<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Tymon\JWTAuth\Facades\JWTAuth;

class JWTAuthServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton('jwt', function ($app) {
            return new JWTAuth($app['tymon.jwt.provider.jwt']);
        });
    }

    public function boot()
    {
        //
    }
}
