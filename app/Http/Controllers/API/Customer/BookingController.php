<?php

namespace App\Http\Controllers\API\Customer;

use App\Models\User;
use App\Models\Customer;
use App\Constants\Status;
use App\Models\TaxiBooking;
use App\Helpers\ApiResponse;
use App\Traits\BookingTrait;
use Illuminate\Http\Request;
use App\Models\BookingPayment;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Mail\BookingConfirmationMail;
use App\Models\Fare;
use Illuminate\Support\Facades\Validator;

class BookingController extends Controller
{
    use BookingTrait;

    /**
     * @method
     * 
     * Create Booking
     * 
     * @authenticated
     * 
     * @bodyParam start_location string required Example: New York
     * @bodyParam end_location string required Example: Chicago
     * @bodyParam service_id integer required Example: 1
     * @bodyParam driver_id integer required Example: 2
     * @bodyParam customer_id integer required Example: 2
     * @bodyParam pickup_time time required Example: 12:30:33
     * @bodyParam from_date date required Example: 2023-12-01
     * @bodyParam to_date date required Example: 2023-12-02
     * @bodyParam payment_method string required Example: Bank Account
     * @bodyParam total_km string required Example: 450.50 Km
     * @bodyParam base_fare string required Example: 30.00
     * @bodyParam final_total string required Example: 13500.00
     * 
     * @response scenario="Request Successfull" {
     *       "status": true,
     *       "message": "Data created successfully",
     *       "data": {
     *           "start_location": "bogura",
     *           "end_location": "dhaka",
     *           "service_id": "1",
     *           "driver_id": "1",
     *           "pickup_time": "12:30:00",
     *           "from_date": "2023-12-01",
     *           "to_date": "2023-12-01",
     *           "payment_method": "cash",
     *           "total_km": "100",
     *           "final_total": 5000,
     *           "customer_id": "1",
     *           "status": 0,
     *           "order_id": "INV -20231204043028",
     *           "created_by": "1",
     *           "updated_at": "2023-12-04T04:30:28.000000Z",
     *           "created_at": "2023-12-04T04:30:28.000000Z",
     *           "id": 1
     *       }
     *   }
     * 
     * @response 417 scenario="Service Unavailable"{
     * "status": false,
     * "message": "Requested service is not available."
     * }
     * 
     * @response 417 scenario="Request Failed"{
     * "status": false,
     * "message": "Error Occurred."
     * }
     * 
     */
    public function createBooking(Request $request){
        try {
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

            if ($validator->fails()) {
                return ApiResponse::error($validator->errors(), Status::VALIDATION_ERROR);
            }
            $fare = Fare::where('service_id', $request->service_id)->first();
            if(!$fare){
                return ApiResponse::error('Requested service is not available.', Status::ERROR);
            }
            DB::beginTransaction();

            $booking = $this->bookingStoreUtil($request);
            // send confirmation mail if auto approve active 
            if($booking && gs()->mail_status == "Active"){
                $customer = Customer::where('id', $request->customer_id)->first();
                Mail::to($customer->email)->send(new BookingConfirmationMail($booking));
            }

            DB::commit();
            return ApiResponse::success($booking, 'Data created successfully', Status::SUCCESS);

        } catch (\Exception $e) {
            return ApiResponse::error('An error occurred: '. $e->getMessage(), Status::ERROR);
        }
    }

    /**
     * @method
     * Payment History
     *
     * This endpoint is used to get all Payment History.
     * 
     * @authenticated
     *
     * @response scenario="Request Successfull" {
     *       "status": true,
     *       "message": "Data retrived successfully",
     *       "data": [
     *           {
     *               "id": 4,
     *               "booking_id": 1,
     *               "total_amount": "5580.00",
     *               "discount_amount": "0.00",
     *               "paid_amount": "5580.00",
     *               "payment_method": "card",
     *               "status": 1,
     *               "created_at": "2023-12-03T10:06:02.000000Z",
     *               "updated_at": "2023-12-03T10:06:34.000000Z"
     *           }
     *       ]
     *   }
     *
     *  @response 417 scenario="Request Failed"{
     * "status": false,
     * "message": "Error Occurred."
     * }
     */
    
    public function getPaymentHistory(){
        try {
            $user_id = auth()->user()->id;
            $payments = BookingPayment::whereIn('booking_id', function ($query) use ($user_id) {
                $query->select('id')
                    ->from(with(new TaxiBooking)->getTable())
                    ->where('customer_id', function ($query) use ($user_id) {
                        $query->select('id')
                            ->from(with(new Customer)->getTable())
                            ->where('user_id', $user_id)
                            ->limit(1);
                    });
            })->get();


            return ApiResponse::success($payments, 'Data retrived successfully', Status::SUCCESS);

        } catch (\Exception $e) {
            return ApiResponse::error('An error occurred: '. $e->getMessage(), Status::ERROR);
        }
    }

    /**
     * @method
     * Booking History
     *
     * This endpoint is used to get all Booking History.
     * 
     * @authenticated
     *
     * @response scenario="Request Successfull" {
     *           "status": true,
     *           "message": "Data retrived successfully",
     *           "data": [
     *               {
     *                   "id": 1,
     *                   "customer_id": 3,
     *                   "driver_id": 6,
     *                   "service_id": 1,
     *                   "pickup_time": "02:00",
     *                   "start_location": "Bogura",
     *                   "end_location": "Dhaka",
     *                   "from_date": "2023-12-03",
     *                   "to_date": "2023-12-03",
     *                   "base_fare": "30.00",
     *                   "total_km": "186.96",
     *                   "coupon_code": null,
     *                   "coupon_amount": null,
     *                   "discount": null,
     *                   "tax": null,
     *                   "final_total": "5580",
     *                   "note": null,
     *                   "payment_method": "Credit Debit  Card",
     *                   "created_by": "3",
     *                   "is_round_trip": null,
     *                   "transportation_mode": null,
     *                   "passenger": "4",
     *                   "order_id": "INV -20231203100006",
     *                   "status": 0,
     *                   "created_at": "2023-12-03T10:00:06.000000Z",
     *                   "updated_at": "2023-12-03T10:00:06.000000Z",
     *                   "customer": {
     *                       "id": 3,
     *                       "name": "Sven69",
     *                       "email": "fakedata90875@gmail.com",
     *                       "phone": "78987",
     *                       "address": "8786 Altenwerth Trace",
     *                       "profile_photo": null,
     *                       "nid_number": null,
     *                       "passport_number": null,
     *                       "passport_photo": null,
     *                       "user_id": 16,
     *                       "status": 1,
     *                       "created_at": "2023-12-03T09:55:00.000000Z",
     *                       "updated_at": "2023-12-03T09:55:00.000000Z"
     *                   },
     *                   "driver": {
     *                       "id": 6,
     *                       "name": "Donnie",
     *                       "phone": "1933374304",
     *                       "address": null,
     *                       "license_number": null,
     *                       "user_id": 9,
     *                       "service_id": 1,
     *                       "license_photo": null,
     *                       "nid_photo": null,
     *                       "passport_photo": null,
     *                       "documents": null,
     *                       "preferred_areas": null,
     *                       "status": 0,
     *                       "created_at": "2023-12-03T03:22:47.000000Z",
     *                       "updated_at": "2023-12-03T03:22:47.000000Z"
     *                   },
     *                   "customer_review": [],
     *                   "payment": [
     *                       {
     *                           "id": 4,
     *                           "booking_id": 1,
     *                           "total_amount": "5580.00",
     *                           "discount_amount": "0.00",
     *                           "paid_amount": "5580.00",
     *                           "payment_method": "card",
     *                           "status": 1,
     *                           "created_at": "2023-12-03T10:06:02.000000Z",
     *                           "updated_at": "2023-12-03T10:06:34.000000Z"
     *                       }
     *                   ],
     *                   "driver_review": [],
     *                   "service": {
     *                       "id": 1,
     *                       "name": "Airport Shuttle Service",
     *                       "status": 1,
     *                       "auto_approved": 1,
     *                       "description": null,
     *                       "service_type_id": null,
     *                       "created_at": "2023-12-03T03:22:44.000000Z",
     *                       "updated_at": "2023-12-03T09:43:59.000000Z"
     *                   }
     *               }
     *           ]
     *       }
     *
     *  @response 417 scenario="Request Failed"{
     * "status": false,
     * "message": "Error Occurred."
     * }
     */

    public function allBooking(){
        try {
            $id = auth()->user()->id;
            $user = User::with('customer')->where('id', $id)->first();
            if($user->customer){
                $bookings = TaxiBooking::with('customer', 'driver', 'customer_review', 'payment', 'driver_review', 'service')->where('customer_id', $user->customer->id)->get();
            }else{
                $bookings = [];
            }
           
            return ApiResponse::success($bookings, 'Data retrived successfully', Status::SUCCESS);
        } catch (\Exception $e) {
            return ApiResponse::error('An error occurred: '. $e->getMessage(), Status::ERROR);
        }
    }
    
    /**
     * @method
     * Completed Trip History
     *
     * This endpoint is used to get all Completed Trip History.
     * 
     * @authenticated
     *
     * @response scenario="Request Successfull" {
     *   "status": true,
     *   "message": "Data retrived successfully",
     *   "data": [
     *       {
     *           "id": 1,
     *           "customer_id": 3,
     *           "driver_id": 6,
     *           "service_id": 1,
     *           "pickup_time": "02:00",
     *           "start_location": "Bogura",
     *           "end_location": "Dhaka",
     *           "from_date": "2023-12-03",
     *           "to_date": "2023-12-03",
     *           "base_fare": "30.00",
     *           "total_km": "186.96",
     *           "coupon_code": null,
     *           "coupon_amount": null,
     *           "discount": null,
     *           "tax": null,
     *           "final_total": "5580",
     *           "note": null,
     *           "payment_method": "Credit Debit  Card",
     *           "created_by": "3",
     *           "is_round_trip": null,
     *           "transportation_mode": null,
     *           "passenger": "4",
     *           "order_id": "INV -20231203100006",
     *           "status": 2,
     *           "created_at": "2023-12-03T10:00:06.000000Z",
     *           "updated_at": "2023-12-03T10:00:06.000000Z",
     *           "customer": {
     *               "id": 3,
     *               "name": "Sven69",
     *               "email": "fakedata90875@gmail.com",
     *               "phone": "78987",
     *               "address": "8786 Altenwerth Trace",
     *               "profile_photo": null,
     *               "nid_number": null,
     *               "passport_number": null,
     *               "passport_photo": null,
     *               "user_id": 16,
     *               "status": 1,
     *               "created_at": "2023-12-03T09:55:00.000000Z",
     *               "updated_at": "2023-12-03T09:55:00.000000Z"
     *           },
     *           "driver": {
     *               "id": 6,
     *               "name": "Donnie",
     *               "phone": "1933374304",
     *               "address": null,
     *               "license_number": null,
     *               "user_id": 9,
     *               "service_id": 1,
     *               "license_photo": null,
     *               "nid_photo": null,
     *               "passport_photo": null,
     *               "documents": null,
     *               "preferred_areas": null,
     *               "status": 0,
     *               "created_at": "2023-12-03T03:22:47.000000Z",
     *               "updated_at": "2023-12-03T03:22:47.000000Z"
     *           },
     *           "customer_review": [],
     *           "payment": [
     *               {
     *                   "id": 4,
     *                   "booking_id": 1,
     *                   "total_amount": "5580.00",
     *                   "discount_amount": "0.00",
     *                   "paid_amount": "5580.00",
     *                   "payment_method": "card",
     *                   "status": 1,
     *                   "created_at": "2023-12-03T10:06:02.000000Z",
     *                   "updated_at": "2023-12-03T10:06:34.000000Z"
     *               }
     *           ],
     *           "driver_review": [],
     *           "service": {
     *               "id": 1,
     *               "name": "Airport Shuttle Service",
     *               "status": 1,
     *               "auto_approved": 1,
     *               "description": null,
     *               "service_type_id": null,
     *               "created_at": "2023-12-03T03:22:44.000000Z",
     *               "updated_at": "2023-12-03T09:43:59.000000Z"
     *           }
     *       }
     *   ]
     *}
     *
     *  @response 417 scenario="Request Failed"{
     * "status": false,
     * "message": "Error Occurred."
     * }
     */

    public function completedTrip(){
        try {
            $id = auth()->user()->id;
            $user = User::with('customer')->where('id', $id)->first();
            if($user->customer){
                $bookings = TaxiBooking::with('customer', 'driver', 'customer_review', 'payment', 'driver_review', 'service')->where('customer_id', $user->customer->id)->whereStatus(2)->get();
            }else{
                $bookings = [];
            }
           
            return ApiResponse::success($bookings, 'Data retrived successfully', Status::SUCCESS);
        } catch (\Exception $e) {
            return ApiResponse::error('An error occurred: '. $e->getMessage(), Status::ERROR);
        }
    }

    /**
     * @method
     * Pending Trip History
     *
     * This endpoint is used to get all Pending Trip History.
     * 
     * @authenticated
     *
     * @response scenario="Request Successfull" {
     *   "status": true,
     *   "message": "Data retrived successfully",
     *   "data": [
     *       {
     *           "id": 1,
     *           "customer_id": 3,
     *           "driver_id": 6,
     *           "service_id": 1,
     *           "pickup_time": "02:00",
     *           "start_location": "Bogura",
     *           "end_location": "Dhaka",
     *           "from_date": "2023-12-03",
     *           "to_date": "2023-12-03",
     *           "base_fare": "30.00",
     *           "total_km": "186.96",
     *           "coupon_code": null,
     *           "coupon_amount": null,
     *           "discount": null,
     *           "tax": null,
     *           "final_total": "5580",
     *           "note": null,
     *           "payment_method": "Credit Debit  Card",
     *           "created_by": "3",
     *           "is_round_trip": null,
     *           "transportation_mode": null,
     *           "passenger": "4",
     *           "order_id": "INV -20231203100006",
     *           "status": 2,
     *           "created_at": "2023-12-03T10:00:06.000000Z",
     *           "updated_at": "2023-12-03T10:00:06.000000Z",
     *           "customer": {
     *               "id": 3,
     *               "name": "Sven69",
     *               "email": "fakedata90875@gmail.com",
     *               "phone": "78987",
     *               "address": "8786 Altenwerth Trace",
     *               "profile_photo": null,
     *               "nid_number": null,
     *               "passport_number": null,
     *               "passport_photo": null,
     *               "user_id": 16,
     *               "status": 1,
     *               "created_at": "2023-12-03T09:55:00.000000Z",
     *               "updated_at": "2023-12-03T09:55:00.000000Z"
     *           },
     *           "driver": {
     *               "id": 6,
     *               "name": "Donnie",
     *               "phone": "1933374304",
     *               "address": null,
     *               "license_number": null,
     *               "user_id": 9,
     *               "service_id": 1,
     *               "license_photo": null,
     *               "nid_photo": null,
     *               "passport_photo": null,
     *               "documents": null,
     *               "preferred_areas": null,
     *               "status": 0,
     *               "created_at": "2023-12-03T03:22:47.000000Z",
     *               "updated_at": "2023-12-03T03:22:47.000000Z"
     *           },
     *           "customer_review": [],
     *           "payment": [
     *               {
     *                   "id": 4,
     *                   "booking_id": 1,
     *                   "total_amount": "5580.00",
     *                   "discount_amount": "0.00",
     *                   "paid_amount": "5580.00",
     *                   "payment_method": "card",
     *                   "status": 1,
     *                   "created_at": "2023-12-03T10:06:02.000000Z",
     *                   "updated_at": "2023-12-03T10:06:34.000000Z"
     *               }
     *           ],
     *           "driver_review": [],
     *           "service": {
     *               "id": 1,
     *               "name": "Airport Shuttle Service",
     *               "status": 1,
     *               "auto_approved": 1,
     *               "description": null,
     *               "service_type_id": null,
     *               "created_at": "2023-12-03T03:22:44.000000Z",
     *               "updated_at": "2023-12-03T09:43:59.000000Z"
     *           }
     *       }
     *   ]
     *}
     *
     *  @response 417 scenario="Request Failed"{
     * "status": false,
     * "message": "Error Occurred."
     * }
     */
    
    public function pendingTrip(){
        try {
            $id = auth()->user()->id;
            $user = User::with('customer')->where('id', $id)->first();
            if($user->customer){
                $bookings = TaxiBooking::with('customer', 'driver', 'customer_review', 'payment', 'driver_review', 'service')->where('customer_id', $user->customer->id)->whereStatus(0)->get();
            }else{
                $bookings = [];
            }
           
            return ApiResponse::success($bookings, 'Data retrived successfully', Status::SUCCESS);
        } catch (\Exception $e) {
            return ApiResponse::error('An error occurred: '. $e->getMessage(), Status::ERROR);
        }
    }
    
    /**
     * @method
     * Cancelled Trip History
     *
     * This endpoint is used to get all Cancelled Trip History.
     * 
     * @authenticated
     *
     * @response scenario="Request Successfull" {
     *   "status": true,
     *   "message": "Data retrived successfully",
     *   "data": [
     *       {
     *           "id": 1,
     *           "customer_id": 3,
     *           "driver_id": 6,
     *           "service_id": 1,
     *           "pickup_time": "02:00",
     *           "start_location": "Bogura",
     *           "end_location": "Dhaka",
     *           "from_date": "2023-12-03",
     *           "to_date": "2023-12-03",
     *           "base_fare": "30.00",
     *           "total_km": "186.96",
     *           "coupon_code": null,
     *           "coupon_amount": null,
     *           "discount": null,
     *           "tax": null,
     *           "final_total": "5580",
     *           "note": null,
     *           "payment_method": "Credit Debit  Card",
     *           "created_by": "3",
     *           "is_round_trip": null,
     *           "transportation_mode": null,
     *           "passenger": "4",
     *           "order_id": "INV -20231203100006",
     *           "status": 2,
     *           "created_at": "2023-12-03T10:00:06.000000Z",
     *           "updated_at": "2023-12-03T10:00:06.000000Z",
     *           "customer": {
     *               "id": 3,
     *               "name": "Sven69",
     *               "email": "fakedata90875@gmail.com",
     *               "phone": "78987",
     *               "address": "8786 Altenwerth Trace",
     *               "profile_photo": null,
     *               "nid_number": null,
     *               "passport_number": null,
     *               "passport_photo": null,
     *               "user_id": 16,
     *               "status": 1,
     *               "created_at": "2023-12-03T09:55:00.000000Z",
     *               "updated_at": "2023-12-03T09:55:00.000000Z"
     *           },
     *           "driver": {
     *               "id": 6,
     *               "name": "Donnie",
     *               "phone": "1933374304",
     *               "address": null,
     *               "license_number": null,
     *               "user_id": 9,
     *               "service_id": 1,
     *               "license_photo": null,
     *               "nid_photo": null,
     *               "passport_photo": null,
     *               "documents": null,
     *               "preferred_areas": null,
     *               "status": 0,
     *               "created_at": "2023-12-03T03:22:47.000000Z",
     *               "updated_at": "2023-12-03T03:22:47.000000Z"
     *           },
     *           "customer_review": [],
     *           "payment": [
     *               {
     *                   "id": 4,
     *                   "booking_id": 1,
     *                   "total_amount": "5580.00",
     *                   "discount_amount": "0.00",
     *                   "paid_amount": "5580.00",
     *                   "payment_method": "card",
     *                   "status": 1,
     *                   "created_at": "2023-12-03T10:06:02.000000Z",
     *                   "updated_at": "2023-12-03T10:06:34.000000Z"
     *               }
     *           ],
     *           "driver_review": [],
     *           "service": {
     *               "id": 1,
     *               "name": "Airport Shuttle Service",
     *               "status": 1,
     *               "auto_approved": 1,
     *               "description": null,
     *               "service_type_id": null,
     *               "created_at": "2023-12-03T03:22:44.000000Z",
     *               "updated_at": "2023-12-03T09:43:59.000000Z"
     *           }
     *       }
     *   ]
     *}
     *
     *  @response 417 scenario="Request Failed"{
     * "status": false,
     * "message": "Error Occurred."
     * }
     */

    public function cancelledTrip(){
        try {
            $id = auth()->user()->id;
            $user = User::with('customer')->where('id', $id)->first();
            if($user->customer){
                $bookings = TaxiBooking::with('customer', 'driver', 'customer_review', 'payment', 'driver_review', 'service')->where('customer_id', $user->customer->id)->whereStatus(3)->get();
            }else{
                $bookings = [];
            }
           
            return ApiResponse::success($bookings, 'Data retrived successfully', Status::SUCCESS);
        } catch (\Exception $e) {
            return ApiResponse::error('An error occurred: '. $e->getMessage(), Status::ERROR);
        }
    }
}