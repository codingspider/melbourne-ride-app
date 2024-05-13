<?php

namespace App\Http\Controllers\Booking;

use Carbon\Carbon;
use App\Models\User;
use Omnipay\Omnipay;
use App\Models\Fleet;
use App\Models\Coupon;
use App\Models\Subrub;
use GuzzleHttp\Client;
use App\Models\Service;
use App\Models\Amenitie;
use ClickSend\Api\SMSApi;
use App\Facades\ClickSend;
use App\Models\TaxiBooking;
use ClickSend\Configuration;
use Illuminate\Http\Request;
use App\Models\BookingPayment;
use Omnipay\Common\CreditCard;
use ClickSend\Model\SmsMessage;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Srmklive\PayPal\Services\PayPal;
use App\Mail\BookingConfirmationMail;
use Illuminate\Support\Facades\Cache;
use GuzzleHttp\Client as GuzzleClient;
use ClickSend\Model\SmsMessageCollection;
use Illuminate\Support\Facades\Validator;
use Srmklive\PayPal\Services\ExpressCheckout;
use Srmklive\PayPal\Services\PayPal as PayPalClient;

class StoreBookingController extends Controller
{

    public function rideInfoStore(Request $request){

        $validator = Validator::make($request->all(), [
            'service_id' => 'required',
            'pick_up_date' => 'required',
            'pick_up_time' => 'required',
            'hours' => 'NULLable|lt:14',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 422);
        }

        $service = Service::find($request->service_id);
        $distance = $request->total_distance;

        if($request->service_id == 1 || $request->service_id == 2){
            $subrub = Subrub::where('name', $request->suburb)->first();
            $fare = $subrub->price;
        }elseif($request->service_id == 3){
            
            if ($distance >= 1 && $distance <= 10) {
                $base_fare = $service->fare_1;
            } else if ($distance >= 11 && $distance <= 20) {
                $base_fare = $service->fare_2;
            } else if ($distance >= 21 && $distance <= 30) {
                $base_fare = $service->fare_3;
            } else if ($distance >= 31 && $distance <= 500) {
                $base_fare = $service->fare_4 * $distance;
            } else {
                $base_fare = 0;
            }
            $fare = $base_fare;
        }elseif($request->service_id == 4){
            $fare = $service->base_fare *  $request->hours;
        }else{
            $fare = 0;
        }

        if($request->service_id == 1 && $request->airport == "Melbourne Int  Airport" || $request->airport == "Melbourne Domestic Airport"){
            $fare += 15;
        }
        
        $requestData = $request->all();
        $requestData['service_charge'] = $fare;
        Cache::put('service_charge', $fare);
        Cache::put('first_step', $requestData, now()->addMinutes(60));
        Cache::put('service_id', $request->service_id);
        Cache::put('tour_id', $request->private_tour);
        return view('theme.booking.extra.step_one_table', compact('requestData'));
    }
    
    public function rideReturnInfoStore(Request $request){
        Cache::put('return_fleet_service', true);
        Cache::put('return_time', $request->input('return_time'));

        return response()->json(['status' => true]);
    }
    
    public function rideReturnInfoRemove(Request $request){
        Cache::put('return_fleet_service', false);
        Cache::put('return_time', null);
        return response()->json(['status' => false]);
    }

    public function selectFleet($id){
        $item = Fleet::whereStatus(1)->whereId($id)->first();
        $amenities = Amenitie::whereStatus(1)->get();
        Cache::put('fleet_id', $id, now()->addMinutes(60));
        $total_fare = Cache::get('service_charge');
        Cache::put('vehicle_charge', $item->price);
        Cache::put('total_fare', $total_fare + $item->price);
        return view('theme.booking.extra.selected_fleet', compact('item', 'amenities'));
    }

    public function fareEstimate(Request $request){

        $data = $request->amenitie ?? [];
        $filteredData = array_filter($data);

        $fleetId = Cache::get('fleet_id');
        $serviceId = Cache::get('service_id');
        $bookingData = Cache::get('first_step');
        $luggage = $request->number_of_luggage;

        $service = Service::find($serviceId);
        $fleet = Fleet::find($fleetId);
        $baby_seat_cost = 0;

        $stops = isset($bookingData['stops']) ? $bookingData['stops'] : [];
        $stop_over_charge = 0;
        $late_night = 0;
    
        
        
        
        foreach ($filteredData ?? [] as $key => $value) {
            if (isset($value['amenitie_id'])) {
                $amenitie = Amenitie::find($value['amenitie_id']);
                $baby_seat_cost += $amenitie->cost * $value['baby_seat'];
            }
        }

        $total_without_seat = Cache::get('total_fare');
        $total_fare = Cache::get('total_fare') + $baby_seat_cost;
        
        foreach($stops as $stop){
            $stop_over_charge += 15;
        }
    
        // Calculate subtotal including baby seat and stop over charges
        $total_fare += $stop_over_charge;
        
        // Calculate base fare considering night surcharge for pick-up time
        $pick_up_time = strtotime($bookingData['pick_up_time']);
        $night_start = strtotime('10:30 PM');
        $night_end = strtotime('5:00 AM');

        if ($pick_up_time >= $night_start || $pick_up_time <= $night_end) {
            $pickup_late_fee = calculateTax($total_fare, 20);
            $total_fare += $pickup_late_fee;
            $late_night += $pickup_late_fee;
        }

        // Merge everything into one array
        $mergedArray = [
            'data' => $data,
            'filteredData' => $filteredData,
            'fleetId' => $fleetId,
            'serviceId' => $serviceId,
            'bookingData' => $bookingData,
            'luggage' => $luggage,
            'baby_seat_cost' => $baby_seat_cost,
            'total_fare' => $total_fare,
            'total_without_seat' => $total_without_seat
        ];

        Cache::put('booking_form_data', $mergedArray, now()->addMinutes(60));
        Cache::put('baby_seat_cost', $baby_seat_cost, now()->addMinutes(60));

        return view('theme.booking.extra.booking_info', $mergedArray, compact('service', 'fleet', 'stop_over_charge', 'late_night'));

    }

    public function paymentPage(){
        $service_id = Cache::get('service_id');
        $is_return = Cache::forget('return_fleet_service');
        $discountAmount = Cache::forget('discountAmount');
        $return_time = Cache::forget('return_time');
        return view('theme.booking.step_2', compact('service_id'));
    }
    

    public function paymentPageData(){
        $vehicle_charge = Cache::get('vehicle_charge');
        $is_return = Cache::get('return_fleet_service');
        $baby_seat = Cache::get('baby_seat_cost');
        $first_step = Cache::get('first_step');
        $discountAmount = Cache::get('discountAmount');
    
        $return_time = strtotime(Cache::get('return_time'));
        $pick_up_time = strtotime($first_step['pick_up_time']);
    
        $night_start = strtotime('10:30 PM');
        $night_end = strtotime('5:00 AM');
    
        $pick_up_time_formatted = date("g:i A", $pick_up_time);
        $return_time_formatted = date("g:i A", $return_time);
    

        $fare = Cache::get('total_fare');
    
        $stops = isset($first_step['stops']) ? $first_step['stops'] : [];
        $stop_over_charge = 0;
        $late_night = 0;
    
        foreach($stops as $stop){
            $stop_over_charge += 15;
        }
    
        // Calculate subtotal including baby seat and stop over charges
        $subtotal = $fare + $baby_seat + $stop_over_charge;
        
        // Calculate base fare considering night surcharge for pick-up time
        if ($pick_up_time >= $night_start || $pick_up_time <= $night_end) {
            $pickup_late_fee = calculateTax($subtotal, 20);
            $subtotal += $pickup_late_fee;
            $late_night += $pickup_late_fee;
        }
    
        // Calculate base fare considering night surcharge for return time
        if ($is_return) {
            if($return_time >= $night_start || $return_time <= $night_end){
                $return_late_fee = calculateTax($subtotal, 20);
                $subtotal += $return_late_fee;
                $late_night += $return_late_fee;
            }
        }

        $total_return_fare = $subtotal;
    
        // Double the base fare if it's a return trip
        if($is_return){
            $subtotal *= 2;
        }
    
        // Calculate VAT
        $vat = gs()->gst ?? 0;
        $tax = calculateTax($subtotal, $vat);
    
        // Calculate total amount considering discount
        $total = ($subtotal + $tax) - $discountAmount;
        $total_without_gst = $subtotal - $discountAmount;
    
        // Store the total amount in cache
        $babySeatCost = Cache::get('baby_seat_cost');
        $serviceCharge = Cache::get('service_charge');
        $vehicleCharge = Cache::get('vehicle_charge');

        return view('theme.booking.payment', compact('total', 'vehicle_charge', 'tax', 'discountAmount', 'subtotal', 'babySeatCost', 'serviceCharge', 'vehicleCharge', 'late_night', 'total_without_gst', 'stop_over_charge', 'is_return', 'total_return_fare'));
    }
    

    public function findCouponCode(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'code' => 'required|string',
            ]);

            if ($validator->fails()) {
                return response()->json(['error' => $validator->errors()], 422);
            }

            $code = $request->code;
            $amount = Cache::get('payableAmount');

            $coupon = Coupon::where('code', $code)
                ->where('status', 1)
                ->where('expires_at', '>', now())
                ->first();

            if (!$coupon || $amount < $coupon->min_amount) {
                return response()->json(['error' => 'Coupon not valid or expired'], 422);
            }


            $discount = ($coupon->type == 'percentage')
                ? calculatePercentage($amount, $coupon->discount)
                : $coupon->discount;

            $finalAmount = intval($amount) - intval($discount);

            Cache::put('discountAmount', $discount);

            return response()->json([
                'success' => 'Coupon applied successfully',
                'dicount' => $discount
            ], 200);

        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function storeAllBookingData(Request $request)
    {
        
        $validator = Validator::make($request->all(), [
            'passanger_infos.*' => 'required|string|max:255',
            'payment_method' => 'required|string|max:255',
        ]);
    
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 422);
        }

        DB::beginTransaction();

        try {
            $general = gs();
            $step1 = Cache::get('booking_form_data');
            $fleetId = Cache::get('fleet_id');
            $inputs = $request->all();

            $user_id = ($inputs['book_as'] == 'guest_user') ? User::where('email', 'guestuser@gmail.com')->first()->id : auth()->user()->id;
            $inputs['user_id'] = $user_id;

            $booking = $this->createBookingHistory($inputs, $step1);

            $allowedPaymentMethods = ['Credit Card', 'MasterCard', 'Visa', 'American Express', 'Discover', 'credit_card'];
            if ($general->nab_transact == 'on' && in_array($request->payment_method, $allowedPaymentMethods)) {
                $resultMessage = $this->processPayment($booking, $request);
            }

            if($request->payment_method == 'paypal'){
                $res = $this->paypalPayment($booking);
                return redirect($res);
            }

            if($general->sms_status == 'on'){
                $customer_sms = $this->sendCustomerSMS($booking);
                $admin_sms =    $this->sendAdminSMS($booking);
            }

            DB::commit();
            return redirect()->route('home')->withSuccess('Booking is successful');

        } catch (\Exception $e) {
            DB::rollback();
            dd($e->getMessage());
            return redirect()->route('home')->withError($e->getMessage());
            
        }
    }

    public function processPayment($booking, $request)
    {
        $general = gs();
        $gateway = Omnipay::create('NABTransact_SecureXML');
        $gateway->setMerchantId($general->merchant_id);
        $gateway->setTransactionPassword($general->transaction_pass);

        $gateway->setTestMode(false);
        $gateway->setRiskManagement(true);

        $passanger_info = json_decode($booking->passanger_infos);
        $first_name = $passanger_info->first_name ?? "Mr";
        $last_name = $passanger_info->last_name ?? "testuser";
        $extra = getPercent($booking->subtotal, 4);
    
        $card = new CreditCard([
            'firstName' => $first_name,
            'lastName' => $last_name,
            'number'      => $request->card_no,
            'expiryMonth' => $request->exp_month,
            'expiryYear'  => $request->exp_year,
            'cvv'         => $request->cvv,
        ]);
 
    
        $transactionData = [
            'amount'        => $booking->subtotal + $extra,
            'currency'      => 'AUD',
            'transactionId' => $booking->invoice_id,
            'card'          => $card,
            'ip'            => '1.1.1.1',
        ];
    
        $transaction = $gateway->purchase($transactionData);
        $response = $transaction->send();

    }

    public function createBookingHistory($inputs, $data){

        
        $amenities = json_encode($data['filteredData']);
        $return_service = json_encode(array_key_exists('return', $inputs) ? $inputs['return'] : []);
        $stops = json_encode(array_key_exists('stops', $data) ? $data['stops'] : []);
        
        $passanger = [
            'full_name' => $data['bookingData']['full_name'],
            'phone_number' => $data['bookingData']['phone_number'],
            'email' => $data['bookingData']['email']
            ];
        $email = $data['bookingData']['email'];
        $passanger_infos = json_encode($passanger);
        $book = new TaxiBooking();
        $book->user_id  = $inputs['user_id'];
        $book->invoice_id  = $data['bookingData']['invoice_id'];
        $book->service_id  = $data['bookingData']['service_id'];
        $book->fleet_id  = $data['fleetId'];
        $book->pick_up_date  = $data['bookingData']['pick_up_date'];
        $book->pick_up_time  = $data['bookingData']['pick_up_time'];

        if (isset($data['bookingData']['point_a'])) {
            $book->point_a = $data['bookingData']['point_a'];
        } else {
            $book->point_a = "NULL";
        }
        
        if (isset($data['bookingData']['point_b'])) {
            $book->point_b = $data['bookingData']['point_b'];
        } else {
            $book->point_b = "NULL";
        }

        $book->pick_up_location  = $data['bookingData']['pick_up_location'];
        $book->drop_off_location  = $data['bookingData']['drop_off_location'] ?? NULL;
      
        $book->number_of_luggage  = $data['luggage'];
        $book->return_service  = $return_service;
        $book->amenities  = $amenities;
        $book->passanger_infos  = $passanger_infos;
        $book->stops  = $stops;
        $book->subtotal  = $inputs['subtotal'] ?? 0;
        $book->discount  = $inputs['discount'] ?? 0;
        $book->vat  = $inputs['vat'] ?? 0;
        $book->promo_code  = $inputs['promo_code'];
        $book->payment_method  = $inputs['payment_method'];
        $book->special_note  = $inputs['special_note'];
        $book->flight_number = $data['bookingData']['flight_number'] ?? NULL;
        $book->vehicle = $inputs['vehicle'];
        $book->baby_seat = $inputs['baby_seat'];
        $book->estimate_fare = $inputs['estimate_fare'];
        $book->total_without_gst = $inputs['total_without_gst'];
        $book->return_fare = $inputs['return_fare'];
        $book->late_night = $inputs['late_night'];
        $book->stop_over_charge = $inputs['stop_over_charge'];
        $book->save();

        $this->storePaymentInfo($book);
        $general = gs();
        if($general->mail_status == 'Active'){
            Mail::to($email)->send(new BookingConfirmationMail($book));
        }
        return $book;
    }

    public function sendCustomerSMS($book)
    {

        $config = Configuration::getDefaultConfiguration()
            ->setUsername(env('CLICKSEND_USERNAME'))
            ->setPassword(env('CLICKSEND_KEY'));

        $apiInstance = new SMSApi(new Client(), $config);
        $passanger_info = json_decode($book['passanger_infos']);

        $name = $passanger_info->full_name;

        $gs = gs();
        $txt = $gs->customer_confirm_sms;
        $msg = new SmsMessage();
        $msg->setBody($txt);
        $msg->setTo($passanger_info->phone_number);
        $msg->setSource("sdk");

        // SmsMessageCollection model
        $sms_messages = new SmsMessageCollection();
        $sms_messages->setMessages([$msg]);

        try {
            $result = $apiInstance->smsSendPost($sms_messages);
        } catch (\Exception $e) {
        }
    }
    
    public function sendAdminSMS($book)
    {
        $config = Configuration::getDefaultConfiguration()
            ->setUsername(env('CLICKSEND_USERNAME'))
            ->setPassword(env('CLICKSEND_KEY'));

        $passanger_info = json_decode($book['passanger_infos']);
        $name = $passanger_info->full_name;
        $apiInstance = new SMSApi(new Client(), $config);
        $gs = gs();
        $txt = $gs->admin_confirm_sms;;
        $msg = new SmsMessage();
        $msg->setBody($txt);
        $msg->setTo("+61433185032");
        $msg->setSource("sdk");

        // SmsMessageCollection model
        $sms_messages = new SmsMessageCollection();
        $sms_messages->setMessages([$msg]);

        try {
            $result = $apiInstance->smsSendPost($sms_messages);
        } catch (\Exception $e) {
        }
    }

    public function storePaymentInfo($data){
        
        $payment = BookingPayment::create([
            'booking_id' => $data->id,
            'total_amount' => $data->subtotal,
            'discount_amount' => $data->discount,
            'gst' => $data->vat,
            'paid_amount' => $data->subtotal,
            'payment_method' => $data->payment_method,
            'status' => 0,
        ]);

        return true;
    }

    public function getSubrubList(){
        $suburbs = getSubuRB();
        return response()->json(['data' => $suburbs]);
    }

    public function paypalPayment($booking)
    {
        $payable = $booking->subtotal;
        $passanger = json_decode($booking->passanger_infos);
        $extra = getPercent($booking->subtotal, 4);
        $data = [];
        $data['items'] = [
            [
                'name' => $passanger->full_name,
                'price' => $payable+$extra,
                'desc'  => 'Booking confirmed',
                'qty' => 1
            ]
        ];
        
        
        Cache::put('bookingID', $booking->id);
        $data['invoice_id'] = $booking->invoice_id;
        $data['invoice_description'] = "Order #{$booking->invoice_id} Invoice";
        $data['return_url'] = route('payment.success');
        $data['cancel_url'] = route('payment.cancel');
        $data['total'] = $payable+$extra;    
  
        $paypalModule = new ExpressCheckout;
        // $res = $paypalModule->setExpressCheckout($data);
        $res = $paypalModule->setExpressCheckout($data, true);
        
        return $res['paypal_link'];

    }


}
