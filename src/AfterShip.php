<?php

namespace Alfa6661\AfterShip;

use AfterShip\Couriers;
use AfterShip\LastCheckPoint;
use AfterShip\Trackings;
use Config;

class AfterShip
{

    public function Couriers()
    {
        return new Couriers(Config::get('services.aftership.api_key'));
    }

    public function Trackings()
    {
        return new Trackings(Config::get('services.aftership.api_key'));
    }

    public function LastCheckPoint()
    {
        return new LastCheckPoint(Config::get('services.aftership.api_key'));
    }

}