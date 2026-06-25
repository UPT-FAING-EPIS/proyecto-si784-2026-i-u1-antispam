<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        RateLimiter::for('public-api', function ($request) {
            return Limit::perMinute(30)->by($request->ip());
        });

        RateLimiter::for('webhook', function ($request) {
            return Limit::perMinute(120)->by($request->ip());
        });
    }
}
