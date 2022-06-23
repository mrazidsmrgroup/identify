<?php

namespace Dsmr\Identify;

use Illuminate\Support\ServiceProvider;

class IdentifyServiceProvider extends ServiceProvider
{
    public function boot()
    {
        require(__DIR__ . '/../vendor/autoload.php');
    }

    public function register()
    {
        //    
    }
}