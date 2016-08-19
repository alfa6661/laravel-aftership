<?php

namespace Alfa6661\AfterShip\Facades;

use Illuminate\Support\Facades\Facade;

class AfterShip extends Facade
{

    protected static function getFacadeAccessor()
    {
        return 'laravel-aftership';
    }

}