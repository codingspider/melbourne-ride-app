<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class ClickSend extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'clicksend';
    }
}