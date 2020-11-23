<?php

namespace Irfa\AppLicenseClient;

use Illuminate\Support\ServiceProvider;

class AppLicenseClientServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/irfa/' => config_path('irfa')],'app-license-client');

        
    }
}
