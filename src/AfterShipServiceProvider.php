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
        $this->publishes([
            __DIR__.'/../config/aftership.php' => config_path('aftership.php'),
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/aftership.php', 'aftership');

        $this->app->bind('laravel-aftership', function () {
            return new AfterShip;
        });
    }
}
