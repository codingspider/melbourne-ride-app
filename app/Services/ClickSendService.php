<?php

namespace App\Services;

use ClickSend\Api\SMSApi;
use ClickSend\Api\SendSMS;
use ClickSend\Configuration;
use Illuminate\Support\Facades\Config;
use GuzzleHttp\Client;

class ClickSendService
{
    // protected $apiKey;
    // protected $client;

    // public function __construct()
    // {
    //     $this->apiKey = '48BA9E73-0451-CECC-598E-383A3F8DB470';
    //     $this->client = new Client([
    //         'base_uri' => 'https://rest.clicksend.com/v3/',
    //         'headers' => [
    //             'Content-Type' => 'application/json',
    //             'Authorization' => 'Bearer ' . '48BA9E73-0451-CECC-598E-383A3F8DB470',
    //         ],
    //     ]);
    // }

    // public function sendSMS($to, $message)
    // {
    //     $config = ClickSend\Configuration::getDefaultConfiguration()
    //         ->setUsername('Faysal')
    //         ->setPassword('48BA9E73-0451-CECC-598E-383A3F8DB470');

    //     $apiInstance = new ClickSend\Api\SMSApi(new GuzzleHttp\Client(),$config);
    //     $msg = new \ClickSend\Model\SmsMessage();
    //     $msg->setBody($message); 
    //     $msg->setTo($to);
    //     $msg->setSource("sdk");

    //     // \ClickSend\Model\SmsMessageCollection | SmsMessageCollection model
    //     $sms_messages = new \ClickSend\Model\SmsMessageCollection(); 
    //     $sms_messages->setMessages([$msg]);

    //     try {
    //         $result = $apiInstance->smsSendPost($sms_messages);
    //     } catch (Exception $e) {
    //         echo 'Exception when calling SMSApi->smsSendPost: ', $e->getMessage(), PHP_EOL;
    //     }

    //     return json_decode($result->getBody(), true);
    // }
}
