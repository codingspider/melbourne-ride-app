<?php

namespace App\Constants;

use Illuminate\Http\JsonResponse;

class Status
{

    const ENABLE  = 1;
    const DISABLE = 0;
    const BOOKED = 2;

    const ACTIVE  = 1;
    const INACTIVE = 0;

    const PUBLISH  = 1;
    const ARCHIVE = 0;

    const YES = 1;
    const NO  = 0;

    const VERIFIED   = 1;
    const UNVERIFIED = 0;
    const BAN = 2;

    const PAYMENT_INITIATE = 0;
    const PAYMENT_SUCCESS  = 1;
    const PAYMENT_PENDING  = 2;
    const PAYMENT_REJECT   = 3;

    const TICKET_OPEN   = 0;
    const TICKET_ANSWER = 1;
    const TICKET_REPLY  = 2;
    const TICKET_CLOSE  = 3;

    const PRIORITY_LOW    = 1;
    const PRIORITY_MEDIUM = 2;
    const PRIORITY_HIGH   = 3;

    const USER_VERIFIED = 1;
    const USER_BAN    = 2;
    const USER_UNVERIFIED = 0;

    const KYC_UNVERIFIED = 0;
    const KYC_PENDING    = 2;
    const KYC_VERIFIED   = 1;

    const COMPLETE = 1;
    const RUNNING  = 0;

    const AUTO   = 1;
    const MANUAL = 2;

    const PENDING       = 0;
    const ACCEPTED      = 1;
    const COMPLETED     = 2;
    const CANCELLED     = 3;


    const VALIDATION_ERROR = JsonResponse::HTTP_UNPROCESSABLE_ENTITY;
    const ERROR = JsonResponse::HTTP_EXPECTATION_FAILED;
    const SUCCESS = JsonResponse::HTTP_OK;
}