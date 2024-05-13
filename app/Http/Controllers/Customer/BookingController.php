<?php

namespace App\Http\Controllers\Customer;

use DateTime;
use App\Models\Fare;
use App\Models\User;
use App\Models\Fleet;
use App\Models\Coupon;
use App\Models\Driver;
use App\Models\Service;
use App\Models\Amenitie;
use App\Models\Customer;
use App\Traits\UserTrait;
use App\Models\CouponUser;
use App\Models\TaxiBooking;
use Illuminate\Support\Str;
use App\Traits\BookingTrait;
use Illuminate\Http\Request;
use App\Models\BookingDetails;
use App\Models\BookingPayment;
use App\Models\CustomerReview;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Mail\BookingConfirmationMail;
use Illuminate\Support\Facades\Cache;
use App\Models\DriverTransportDetails;
use Illuminate\Support\Facades\Validator;

class BookingController extends Controller
{
    use BookingTrait;
    use UserTrait;
    
    public function index(){
        $services= Service::whereStatus(1)->get();
        $amenities= Amenitie::whereStatus(1)->get();
        $bookingId = generateRandomNumber();
        session(['bookingId' => $bookingId]);

        Cache::forget('return_fleet_service');
        Cache::forget('service_charge');
        Cache::forget('first_step');
        Cache::forget('service_id');
        Cache::forget('tour_id');
        Cache::forget('fleet_id');
        Cache::forget('vehicle_charge');
        Cache::forget('total_fare');

        return view('theme.booking.step_1', compact('services', 'amenities', 'bookingId'));
    }
    
    public function bookingList(){
        try {
            $user = User::with('customer')->where('id', auth()->user()->id)->first();
            if($user->customer){
                $bookings = TaxiBooking::with('customer', 'driver', 'customer_review', 'payment', 'driver_review', 'service')->where('customer_id', $user->customer->id)->get();
            }else{
                $bookings = [];
            }

            return view('customer.booking.booking_list', compact('bookings'));
        } catch (\Exception $e) {
            return back()->withError('An error occurred: ' . $e->getMessage());
        }
    }

    public function getBookingForm($id){
        switch ($id) {
            case 1:
                return view('customer.booking.form.from_airport');
                break;
            case 2:
                return view('customer.booking.form.to_airport');
                break;
            case 3:
                return view('customer.booking.form.point_to_point');
                break;
            case 4:
                return view('customer.booking.form.hourly');
                break;
            case 5:
                return view('customer.booking.form.wedding');
                break;
            case 6:
                return view('customer.booking.form.private');
                break;
            default:
                $html = ''; // Default HTML when no match
                break;
        }
        
    }
    
    public function bookingCreate(){
        try {
            $services = Service::whereStatus(1)->get();
            $id = auth()->user()->id;
            $customer = Customer::where('user_id', $id)->first();
            return view('customer.booking.booking_create', compact('services', 'customer'));
        } catch (\Exception $e) {
            return back()->withError('An error occurred: ' . $e->getMessage());
        }
    }

    public function fetchTransport(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'service_id' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 422);
        }

        $driver_ids = Driver::where("service_id", $request->service_id)->pluck('id');
        $transports['fleets'] = DriverTransportDetails::whereIn('driver_id', $driver_ids)->pluck('model_no', 'id');
        return response()->json($transports);
    }

    public function getFleetsData(Request $request)
    {
        $id = Cache::get('service_id');
        $tour_id = Cache::get('tour_id');
        $service_charge = Cache::get('service_charge');
        

        $perPage = $request->input('perPage', 9);
        $query = Fleet::query(); 

        if($tour_id){
            $tours = allPrivateTours();
            $key = array_search($tour_id, $tours);
            $query->where('tour_id', $key);
        }

        $items = $query->where('service_id', $id)->whereStatus(1)->paginate($perPage);
        

        return view('theme.booking.fleets', compact('items', 'service_charge', 'id'));
    }
    
    public function removeReturnTrip(Request $request)
    {
        return response()->json(['removed' => true]);
    }
    
    public function addReturnTrip(Request $request)
    {
        return response()->json(['is_return' => true]);
    }

    public function searchDrivers($id)
    {
        $drivers = Driver::where('service_id', $id)->pluck('id');
        $transports = DriverTransportDetails::whereIn('driver_id', $drivers)->get();
        return view('admin.driver.filter_driver', ['transports' => $transports]);
    }
    
    public function bookingStore(Request $request)
    {
        // Validate the incoming request
        $validator = Validator::make($request->all(), [
            'start_location' => 'required',
            'end_location' => 'required',
            'service_id' => 'required',
            'driver_id' => 'required',
            'pickup_time' => 'required',
            'from_date' => 'required',
            'to_date' => 'required',
            'payment_method' => 'required',
            'total_km' => 'required',
            'final_total' => 'required',
        ]);


        // If validation fails, redirect back with errors and old input
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Begin a database transaction
        DB::beginTransaction();

        try {
            $booking = $this->bookingStoreUtil($request);
            // send confirmation mail if auto approve active 
            if($booking && gs()->mail_status == "Active"){
                $customer = Customer::where('id', $request->customer_id)->first();
                Mail::to($customer->email)->send(new BookingConfirmationMail($booking));
            }

            // Commit the transaction
            DB::commit();

            // Redirect with success message
            $user = User::find(auth()->user()->id);
            if($user->user_type == 0){
                return redirect()->route('taxi-booking.index')->withSuccess('Booking created successfully.');
            }else{
                return redirect()->route('booking-list')->withSuccess('Booking created successfully.');
            }
           
        } catch (\Exception $e) {
            DB::rollback();
            return back()->withError('An error occurred: ' . $e->getMessage());
        }
    }
   
    public function frontBookingSave(Request $request)
    {
        
        // Validate the incoming request
        $validator = Validator::make($request->all(), [
            'start_location' => 'required',
            'end_location' => 'required',
            'service_id' => 'required',
            'driver_id' => 'required',
            'pickup_time' => 'required',
            'from_date' => 'required',
            'to_date' => 'required',
            'payment_method' => 'required',
            'total_km' => 'required',
            'final_total' => 'required',
        ]);


        // If validation fails, redirect back with errors and old input
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Begin a database transaction
        DB::beginTransaction();

        try {

            if (!auth()->check()) {
                $validator = Validator::make($request->all(), [
                    'name' => 'required',
                    'email' => 'required|email|unique:users,email',
                    'address' => 'required',
                    'phone' => 'required',
                ]);

                if ($validator->fails()) {
                    return redirect()->back()->withErrors($validator)->withInput();
                }
                
                $password = Str::random(8);
                $username = convertToUsername($request->name);

                $inputs = [];
                $inputs['name'] = $request->name;
                $inputs['password'] = Hash::make($password);
                $inputs['username'] = $username;
                $inputs['email'] = $request->email;
                $inputs['user_type'] = 2;
                $inputs['is_admin'] = 2;
                $inputs['approved'] = 1;
                $user = User::create($inputs);

                $customer = $this->customerProfileUpdateOrStore($user, $request);
                $request['customer_id'] = $customer->id;
                Auth::login($user);
            }

            $booking = $this->bookingStoreUtil($request);
            // send confirmation mail if auto approve active 
            if($booking && gs()->mail_status == "Active"){
                $customer = Customer::where('id', $request->customer_id)->first();
                Mail::to($customer->email)->send(new BookingConfirmationMail($booking));
            }

            // Commit the transaction
            DB::commit();
            return redirect()->back()->withSuccess('Booking created successfully.');
           
        } catch (\Exception $e) {
            DB::rollback();
            return back()->withError('An error occurred: ' . $e->getMessage());
        }
    }

    public function driverReview($id){
        $booking = TaxiBooking::find($id);
        return view('customer.booking.review', compact('booking'));
    }

    public function storeReview(Request $request){
        $validator = Validator::make($request->all(), [
            'rating' => [
                'required',
                'numeric',
                Rule::in([1, 2, 3, 4, 5]),
            ],
            'comment' => 'required',
            'customer_id' => 'required',
            'driver_id' => 'required',
            'service_id' => 'required',
            'booking_id' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        DB::beginTransaction();
        try {
            $inputs = $request->all();
            $review = CustomerReview::create($inputs);
            DB::commit();
            return redirect()->route('booking-list')->withSuccess('Rating Submitted successfully.');

        }catch(\Exception $e){
            DB::rollback();
            return back()->withError('An error occurred: ' . $e->getMessage());
        }

    }

    public function bookingDetails($id){
        $booking = TaxiBooking::with('user', 'service', 'payment')->where('id', $id)->first();
        return view('customer.booking.details', compact('booking'));
    }
    
    public function makeBookingPayment($id){
        $booking = TaxiBooking::with('customer', 'driver', 'customer_review', 'service')->where('id', $id)->first();
        $customer = Customer::where('id', $booking->customer_id)->first();
        return view('customer.booking.payment', compact('booking', 'customer'));
    }


    public function findCouponCode(Request $request)
    {
        dd($request);
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
                return response()->json(['error' => 'Coupon not valid or expired'], 400);
            }

            $discount = ($coupon->type == 'percentage')
                ? calculatePercentage($amount, $coupon->discount)
                : $coupon->discount;

            $finalAmount = intval($amount) - intval($discount);

            Cache::put('discountAmount', $discount);

            return response()->json([
                'success' => 'Coupon applied successfully',
            ], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Internal Server Error'], 500);
        }
    }


    public function initPaymentProcess(Request $request)
    {
        DB::beginTransaction();
        try {
            // Validate the request data
            $validator = Validator::make($request->all(), [
                'booking_id' => 'required|numeric',
                'total_amount' => 'required|numeric',
            ]);

            if ($validator->fails()) {
                return redirect()->route('booking-list')->withErrors($validator)->withInput();
            }
            $amount = $request->total_amount;
            $booking = $request->booking_id;

            $inputs = $request->all();
            $inputs['paid_amount'] = $amount;
            $inputs['status'] = 0;
            $inputs['payment_method'] = 'card';
            $payment = BookingPayment::create($inputs);

            $name = $request->name;
            DB::commit();
            return view('customer.booking.stripe', compact('payment', 'name'));

            
        } catch (\Exception $e) {
            DB::rollback();
            return back()->withError('An error occurred: ' . $e->getMessage());
        }
    }

    public function paymentList(){
        $payments = BookingPayment::with('booking')->get();
        return view('customer.booking.payment_history', compact('payments'));
    }

    public function getFareByService($id){
        try {
            $fare = Fare::where('service_id', $id)->latest()->first();

            if($fare){
                $total = $fare->base_fare;;
            }else{
                $total = 0.00;
            }
            return response()->json(['data' => $total]);

        } catch (\Exception $e) {
            return response()->json(['data' => $e->getMessage()]);
        }
    }
    
    public function customerBookingCancell($id){
        try {
            $booking = TaxiBooking::find($id);
            $booking->status = 3;
            $booking->save();
            return redirect()->back()->with('success', 'Booking cancelled successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function completedTrip(){
        try {
            $user = User::with('customer')->where('id', auth()->user()->id)->first();
            if($user->customer){
                $bookings = TaxiBooking::with('customer', 'customer', 'customer_review', 'payment')->where('status', 2)->where('customer_id', $user->customer->id)->get();
            }else{
                $bookings = [];
            }
            return view('customer.booking.booking_list', compact('bookings'));
        }catch(\Exception $e){
            return back()->withError('An error occurred: ' . $e->getMessage());
        }
    }
    
    public function pendingTrip(){
        try {
            $user = User::with('customer')->where('id', auth()->user()->id)->first();
            if($user->customer){
                $bookings = TaxiBooking::with('customer', 'customer', 'customer_review', 'payment')->where('status', 0)->where('customer_id', $user->customer->id)->get();
            }else{
                $bookings = [];
            }
            return view('customer.booking.booking_list', compact('bookings'));
        }catch(\Exception $e){
            return back()->withError('An error occurred: ' . $e->getMessage());
        }
    }
    
    public function cancelTrip(){
        try {
            $user = User::with('customer')->where('id', auth()->user()->id)->first();
            if($user->customer){
                $bookings = TaxiBooking::with('customer', 'customer', 'customer_review', 'payment')->where('status', 3)->where('customer_id', $user->customer->id)->get();
            }else{
                $bookings = [];
            }
            return view('customer.booking.booking_list', compact('bookings'));
        }catch(\Exception $e){
            return back()->withError('An error occurred: ' . $e->getMessage());
        }
    }

    public function getFleetBooking(Request $request){
        $services= Service::whereStatus(1)->get();
        $amenities= Amenitie::whereStatus(1)->get();
        $bookingId = generateRandomNumber();
        session(['bookingId' => $bookingId]);
        Cache::put('first_step', $request->all(), now()->addMinutes(60));
        return view('theme.booking.step_1', compact('services', 'amenities', 'bookingId'));
    }

    public function getBookingFromByQouteService (Request $request){
        $bookingId = generateRandomNumber();
        session(['bookingId' => $bookingId]);
        $services= Service::whereStatus(1)->get();
        $amenities= Amenitie::whereStatus(1)->get();

        $qoute_service = $request->input('service_id');
        $airport = $request->input('airport_id');
        $dropoff = $request->input('drop_off');
        $pickup = $request->input('pick_up');
        $pickupdate = $request->input('pick_up_date');
        $package = $request->input('package_name');

        if($pickupdate){
            $datetime = DateTime::createFromFormat('m/d/Y g:i A', $pickupdate);
            $dateOnly = $datetime->format('Y-m-d');
            $time_only = date("h:i A", strtotime($pickupdate));
        }else{
            $dateOnly = null;
            $time_only = null;
        }
        
        $hour = $request->input('number_of_hour');

        return view('theme.booking.qoute_booking', compact(
            'services', 
            'amenities', 
            'bookingId', 
            'qoute_service', 
            'airport',
            'dropoff',
            'pickup',
            'dateOnly',
            'time_only',
            'hour',
            'package'
        ));
    }

}