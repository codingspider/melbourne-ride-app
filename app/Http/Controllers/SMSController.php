<?php

namespace App\Http\Controllers;
use App\Services\ClickSendService;

class SMSController extends Controller
{
    protected $clickSendService;

    public function __construct(ClickSendService $clickSendService)
    {
        $this->clickSendService = $clickSendService;
    }

    public function sendSMS()
    {
        $to = '+8801312808289'; // Replace with the recipient's phone number
        $message = 'Hello, this is a test message!';
        $response = $this->clickSendService->sendSMS($to, $message);

        // Handle the response as needed
        dd($response);
    }
}
