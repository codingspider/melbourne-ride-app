<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Service;
use App\Models\Customer;
use App\Models\TaxiBooking;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Mail\BookingConfirmationMail;

class BookingController extends Controller
{
    public function confirmBooking($id){
        try {
            
            $booking = TaxiBooking::with('user', 'service', 'payment')->where('id', $id)->first();
            $service = Service::where('id', $booking->service_id)->first();
            $customer = User::where('id', $booking->user_id)->first();
            $booking->status = 1;
            $booking->save();

            if(gs()->mail_status == "Active"){
                Mail::to($customer->email)->send(new BookingConfirmationMail($booking));
            }
            return redirect()->back()->with('success', 'Booking confrimed successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
    
    public function cancellBooking($id){
        try {
            
            $booking = TaxiBooking::with('user', 'service', 'payment')->where('id', $id)->first();
            $service = Service::where('id', $booking->service_id)->first();
            $customer = User::where('id', $booking->user_id)->first();
            $booking->status = 3;
            $booking->save();

            if(gs()->mail_status == "Active"){
                Mail::to($customer->email)->send(new BookingConfirmationMail($booking));
            }
            return redirect()->back()->with('success', 'Booking cancelled successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
