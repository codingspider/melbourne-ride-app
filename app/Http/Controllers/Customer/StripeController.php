<?php

namespace App\Http\Controllers\Customer;


use Session;
use Stripe\Charge;
use Stripe\Stripe;
use App\Models\TaxiBooking;
use Illuminate\Http\Request;
use App\Models\BookingPayment;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class StripeController extends Controller
{
    public function stripePost(Request $request)
    {
        DB::beginTransaction();
        try {
            $booking = TaxiBooking::with(['customer', 'service'])->where('id', $request->id)->first();
            
            Stripe::setApiKey(env('STRIPE_SECRET'));
            $payment = Charge::create ([
                    "amount" => $request->amount*100,
                    "currency" => "BDT",
                    "source" => $request->stripeToken,
                    "description" => 'Payment by '. $booking->customer->name . ' ' . ' for ' . $booking->service->name
            ]);

            $row = BookingPayment::find($request->pay_id);

            if($payment->status == "succeeded"){
                $row->status = 1;
                $row->save();
            }else{
                $row->status = 3;
                $row->save();
            }
            DB::commit();
            return redirect()->route('booking-list')->withSuccess('Payment done successfully.');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->route('booking-list')->withError('An error occurred: ' . $e->getMessage());
        }
    }
}
