<?php

namespace App\Providers;

use App\Models\DailyVisit;
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
        // Visitor statistics for footer and admin dashboard
        View::composer(['core.partials.footer', 'dashboard'], function ($view) {
            $date = now()->format('Y-m-d');
            $today = DailyVisit::where('date', $date)->first();

            $totals = Cache::remember('site_visit_totals', 60, function () {
                return [
                    'totalVisits' => (int) DailyVisit::sum('total_visits'),
                    'totalVisitors' => (int) DailyVisit::sum('unique_visitors'),
                ];
            });

            $view->with('visitsToday', (int) ($today?->total_visits ?? 0));
            $view->with('totalVisits', (int) ($totals['totalVisits'] ?? 0));
            $view->with('visitorsToday', (int) ($today?->unique_visitors ?? 0));
            $view->with('totalVisitors', (int) ($totals['totalVisitors'] ?? 0));
        });
    }
}
