<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Amenitie;
use Illuminate\Http\Request;

class IframeController extends Controller
{
    public function iframeForm(Request $request){
        $services= Service::whereStatus(1)->get();
        $amenities= Amenitie::whereStatus(1)->get();
        $bookingId = generateRandomNumber();
        session(['bookingId' => $bookingId]);
        return view('theme.booking.iframe', compact('services', 'amenities', 'bookingId'))->with(['iframe' => true]);
    }

    public function getIframeCode()
    {
        return '<iframe src="' . route('iframe.form') . '" width="600" height="400" frameborder="0"></iframe>';
    }
}
