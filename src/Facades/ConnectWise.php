<?php

namespace Wjbecker\ConnectwiseApiClient\Facades;

use Illuminate\Support\Facades\Facade;
use Wjbecker\ConnectwiseApiClient\ConnectWise AS ConnectWiseAPI;

class ConnectWise extends Facade
{
    protected static function getFacadeAccessor()
    {
        return ConnectWiseAPI::class;
    }
}
