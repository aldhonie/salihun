<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Helpers;

class HelperServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
        require_once base_path().'/app/Helpers/GlobalHelper.php';
    }
}
