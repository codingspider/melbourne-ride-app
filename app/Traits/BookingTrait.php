<?php

namespace App\Traits;

use App\Models\Fare;
use App\Models\User;
use App\Models\Service;
use App\Models\Customer;
use App\Models\TaxiBooking;
use Illuminate\Http\Request;
use App\Models\BookingDetails;
use Illuminate\Support\Facades\Hash;

trait BookingTrait {

    public function bookingStoreUtil($request){
        // Retrieve general settings
        $orderID = 'INV -' . date('YmdHis');
        $fare = Fare::where('service_id', $request->service_id)->first();

        // Prepare the input data
        $inputs = $request->except('_token', '_method', 'requirement', 'pet_name', 'pet_age', 'pet_type', 'mixed_breed', 'breed', 'weight', 'gender', 'service_need', 'organization');

        $inputs['status'] = 0;
        $inputs['customer_id'] = $request->customer_id;
        $inputs['order_id'] = $orderID;

        // Calculate and add VAT if applicable
        if ($fare->is_vat_applicable) {
            $vat = calculatePercentage($request->final_total, $fare->vat);
            $inputs['vat'] = $vat;
        } else {
            $vat = 0;
        }

        $inputs['final_total'] = (int) $request->final_total + (int) $vat;
        $service = Service::where('id', $request->service_id)->first();
        $total_pay_able = (int) $request->final_total + (int) $vat;

        // check auto accept or not 
        if(auth()->user()->user_type = 0){
            $inputs['created_by'] = auth()->user()->id;
            $inputs['status'] = 1;
        }else{
            $inputs['created_by'] = $request->customer_id; 
            $inputs['status'] = 0;
        }
        // Create a new TaxiBooking record
        $booking = TaxiBooking::create($inputs);
        if($service->id == 9){
            $this->storeBookingPetDetails($booking->id, $request);
        }elseif($service->id == 8){
            $this->storeBookingEventDetails($booking->id, $request);
        }elseif($service->id == 2){
            $this->storeBookingBusDetails($booking->id, $request);
        }
        return $booking;
    }
    
    public function bookingUpdateUtil($request, $id){
        // Retrieve general settings
        $orderID = 'INV -' . date('YmdHis');
        $fare = Fare::where('service_id', $request->service_id)->first();

        // Prepare the input data
        $inputs = $request->except('_token', '_method', 'requirement', 'pet_name', 'pet_age', 'pet_type', 'mixed_breed', 'breed', 'weight', 'gender', 'service_need', 'organization');
        $inputs['status'] = 0;
        $inputs['customer_id'] = $request->customer_id;
        $inputs['order_id'] = $orderID;

        // Calculate and add VAT if applicable
        if ($fare->is_vat_applicable) {
            $vat = calculatePercentage($request->final_total, $fare->vat);
            $inputs['vat'] = $vat;
        } else {
            $vat = 0;
        }

        $inputs['final_total'] = (int) $request->final_total + (int) $vat;
        $service = Service::where('id', $request->service_id)->first();
        $total_pay_able = (int) $request->final_total + (int) $vat;

        // check auto accept or not 
        if(auth()->user()->user_type = 0){
            $inputs['created_by'] = auth()->user()->id;
            $inputs['status'] = 1;
        }else{
            $inputs['created_by'] = $request->customer_id; 
            $inputs['status'] = 0;
        }
        // Create a new TaxiBooking record
        $booking = TaxiBooking::where('id', $id)->update($inputs);
        if($service->id == 9){
            $this->storeBookingPetDetails($id, $request);
        }elseif($service->id == 8){
            $this->storeBookingEventDetails($id, $request);
        }elseif($service->id == 2){
            $this->storeBookingBusDetails($id, $request);
        }
        return $booking;
    }

    public function storeBookingPetDetails($id, $request){
        $details = $request->only('pet_name', 'pet_age', 'pet_type', 'mixed_breed', 'breed', 'weight', 'gender');
        $data = BookingDetails::updateOrCreate(
            ['booking_id' => $id],
            $details
        );
        return $data;
    }
    
    public function storeBookingEventDetails($id, $request){
        $details = $request->only('service_need', 'organization');
        $data = BookingDetails::updateOrCreate(
            ['booking_id' => $id],
            $details
        );
        return $data;
    }
    
    public function storeBookingBusDetails($id, $request){
        $details = $request->only('requirement');
        $data = BookingDetails::updateOrCreate(
            ['booking_id' => $id],
            $details
        );
        return $data;
    }
}