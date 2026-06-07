<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
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
        Blade::directive('icon', function ($expression) {
            return "<?php echo asset(config('app.icon_path') . '/' . {$expression}); ?>";
        });

        $redisStats = function ($view) {
            $date = now()->format('Y-m-d');
            try {
                $view->with('visitsToday', Redis::get("visits:$date") ?? 0);
                $view->with('totalVisits', Redis::get("visits:total") ?? 0);
                $view->with('visitorsToday', Redis::scard("visitors:$date") ?? 0);
                $view->with('totalVisitors', Redis::scard("visitors:all") ?? 0);
            } catch (\Throwable $e) {
                $view->with('visitsToday', 0);
                $view->with('totalVisits', 0);
                $view->with('visitorsToday', 0);
                $view->with('totalVisitors', 0);
            }
        };

        // Visitor statistics for footer
        View::composer('core.partials.footer', $redisStats);

        // Visitor statistics for admin dashboard
        View::composer('dashboard', $redisStats);
    }
}
