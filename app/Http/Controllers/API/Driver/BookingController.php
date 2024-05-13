<?php

namespace App\Http\Controllers\API\Driver;

use App\Models\User;
use App\Constants\Status;
use App\Models\TaxiBooking;
use App\Helpers\ApiResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class BookingController extends Controller
{
    /**
     * @method
     * Driver Booking List
     *
     * This endpoint is used to get all Driver Booking list.
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
     *
     */

    public function allBookingList(){
        try {
            $user = User::with('driver')->where('id', auth()->user()->id)->first();
            if($user->driver){
                $bookings = TaxiBooking::with('customer', 'driver', 'driver_review', 'customer_review')->where('driver_id', $user->driver->id)->get();
            }else{
                $bookings = [];
            }
            return ApiResponse::success($bookings, 'Data retrive successfully', Status::SUCCESS);

        } catch (\Exception $e) {
            return ApiResponse::error('An error occurred: '. $e->getMessage(), Status::ERROR);
        }
    }


    /**
     * @method
     * Driver completed trip list
     *
     * This endpoint is used to get all Driver completed trip list.
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
     *
     */
    
    public function completedBookingList(){
        try {
            $user = User::with('driver')->where('id', auth()->user()->id)->first();
            if($user->driver){
                $bookings = TaxiBooking::with('customer', 'driver', 'driver_review', 'customer_review')->whereStatus(2)->where('driver_id', $user->driver->id)->get();
            }else{
                $bookings = [];
            }
            return ApiResponse::success($bookings, 'Data retrive successfully', Status::SUCCESS);

        } catch (\Exception $e) {
            return ApiResponse::error('An error occurred: '. $e->getMessage(), Status::ERROR);
        }
    }


    /**
     * @method
     * Driver Pending Booking List
     *
     * This endpoint is used to get all Driver Pending Booking list.
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
     *
     */
    
    public function pendingBookingList(){
        try {
            $user = User::with('driver')->where('id', auth()->user()->id)->first();
            if($user->driver){
                $bookings = TaxiBooking::with('customer', 'driver', 'driver_review', 'customer_review')->whereStatus(0)->where('driver_id', $user->driver->id)->get();
            }else{
                $bookings = [];
            }
            return ApiResponse::success($bookings, 'Data retrive successfully', Status::SUCCESS);

        } catch (\Exception $e) {
            return ApiResponse::error('An error occurred: '. $e->getMessage(), Status::ERROR);
        }
    }
    

    /**
     * @method
     * Driver cancelled Booking List
     *
     * This endpoint is used to get all Driver cancelled Booking list.
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
     *
     */
    public function cancelledBookingList(){
        try {
            $user = User::with('driver')->where('id', auth()->user()->id)->first();
            if($user->driver){
                $bookings = TaxiBooking::with('customer', 'driver', 'driver_review', 'customer_review')->whereStatus(3)->where('driver_id', $user->driver->id)->get();
            }else{
                $bookings = [];
            }
            return ApiResponse::success($bookings, 'Data retrive successfully', Status::SUCCESS);

        } catch (\Exception $e) {
            return ApiResponse::error('An error occurred: '. $e->getMessage(), Status::ERROR);
        }
    }
}