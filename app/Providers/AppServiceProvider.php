<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Redis;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('core.partials.footer', function ($view) {
            $date = now()->format('Y-m-d');
            $view->with('visitsToday', Redis::get("visits:$date") ?? 0);
            $view->with('totalVisits', Redis::get("visits:total") ?? 0);
            $view->with('visitorsToday', Redis::scard("visitors:$date") ?? 0);
            $view->with('totalVisitors', Redis::scard("visitors:all") ?? 0);
        });
    }
}
