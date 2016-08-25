<?php

namespace Alfa6661\AfterShip;

use Illuminate\Support\ServiceProvider;

class AfterShipServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('laravel-aftership', function () {
            return new AfterShip;
        });
    }
}
