<?php

namespace App\Providers;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

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
        // Visitor statistics for footer
        View::composer('core.partials.footer', function ($view) {
            $date = now()->format('Y-m-d');
            $view->with('visitsToday', (int) Cache::get("visits:$date", 0));
            $view->with('totalVisits', (int) Cache::get('visits:total', 0));
            $view->with('visitorsToday', count((array) Cache::get("visitors:$date", [])));
            $view->with('totalVisitors', count((array) Cache::get('visitors:all', [])));
        });

        // Visitor statistics for admin dashboard
        View::composer('dashboard', function ($view) {
            $date = now()->format('Y-m-d');
            $view->with('visitsToday', (int) Cache::get("visits:$date", 0));
            $view->with('totalVisits', (int) Cache::get('visits:total', 0));
            $view->with('visitorsToday', count((array) Cache::get("visitors:$date", [])));
            $view->with('totalVisitors', count((array) Cache::get('visitors:all', [])));
        });
    }
}
