<?php

namespace Laraveldaily\Timezones;

use Illuminate\Support\ServiceProvider;

class TimezonesServiceProvider extends ServiceProvider
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
         // include '/home/andrew/Desktop/php/laravel/routes/web.php';
        $this->app->make('Laraveldaily\Timezones\TimezonesController');
    }
}
