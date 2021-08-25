<?php

namespace Vi5tar\LaravelExtraHelpers;

use Illuminate\Support\ServiceProvider;

class LaravelExtraHelpersServiceProvider extends ServiceProvider
{
    /**
     * Register the application services.
     */
    public function register()
    {
        foreach (glob(__DIR__.'/Functions.php') as $filename) {
            require_once $filename;
        }
    }
}
