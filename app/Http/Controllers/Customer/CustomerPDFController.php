<?php

namespace App\Http\Controllers\Customer;

use PDF;
use App\Models\TaxiBooking;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CustomerPDFController extends Controller
{
    public function generatePDF($id){
        $booking = TaxiBooking::with('customer', 'driver', 'service', 'payment')->where('id', $id)->first();
        $data = [
            'booking'     => $booking,
        ];
        return view('customer.booking.pdf', $data);
        $pdf = PDF::loadView('customer.booking.pdf', $data);
        return $pdf->stream('recipt.pdf');
    }
}
