<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BookingPayment;
use Srmklive\PayPal\Services\PayPal;
use Illuminate\Support\Facades\Cache;

class PayPalController extends Controller
{

    public function cancel()
    {
        $bookID = Cache::get('bookingID');
        $payment = BookingPayment::where('booking_id', $bookID)->update([
            'status' => 0,
        ]);
        return redirect()->route('home')->withError('Your payment is canceled');
    }

    public function success(Request $request)
    {
        $response = $provider->getExpressCheckoutDetails($request->token);
        if (in_array(strtoupper($response['ACK']), ['SUCCESS', 'SUCCESSWITHWARNING'])) {
            $bookID = Cache::get('bookingID');
            $payment = BookingPayment::where('booking_id', $bookID)->update([
                'status' => 1,
            ]);
            return redirect()->route('home')->withSuccess('Booking is successful');
        }
    }
}
