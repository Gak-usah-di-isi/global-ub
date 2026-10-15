<?php

namespace App\Http\Middleware;

use App\Models\CountryVisit;
use App\Models\DailyVisit;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;
use Stevebauman\Location\Facades\Location;
use Symfony\Component\HttpFoundation\Response;

class CountVisitor
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $date = now()->format('Y-m-d');
        $ip = $request->ip() ?? '127.0.0.1';

        $hasVisitedTodayCookie = $request->cookie('visited_today') === $date;
        $isNewTodayByIp = Cache::add("visited_today:{$date}:{$ip}", 1, now()->endOfDay());
        $isNewToday = !$hasVisitedTodayCookie && $isNewTodayByIp;

        $isNewAllTime = Cache::add("visited_all:{$ip}", 1, now()->addYear());

        $daily = DailyVisit::firstOrCreate(
            ['date' => $date],
            ['total_visits' => 0, 'unique_visitors' => 0]
        );
        $daily->increment('total_visits');

        if ($isNewToday) {
            $daily->increment('unique_visitors');
        }

        $this->recordCountryVisit($ip, $isNewAllTime);

        $response = $next($request);

        if (!$hasVisitedTodayCookie && method_exists($response, 'cookie')) {
            $response->cookie('visited_today', $date, 1440);
        }

        return $response;
    }

    /**
     * Resolve the visitor's country from their IP and persist visit counters for it.
     */
    protected function recordCountryVisit(string $ip, bool $isNewVisitor): void
    {
        [$code, $name] = Cache::remember("geoip:$ip", now()->addDay(), function () use ($ip) {
            try {
                $position = Location::get($ip);

                if ($position && $position->countryCode) {
                    return [$position->countryCode, $position->countryName];
                }
            } catch (\Throwable $e) {
                Log::warning("GeoIP lookup failed for {$ip}: {$e->getMessage()}");
            }

            return ['XX', 'Unknown'];
        });

        $visit = CountryVisit::firstOrNew(['country_code' => $code]);
        $visit->country_name = $name;
        $visit->total_visits = ($visit->total_visits ?? 0) + 1;
        $visit->unique_visitors = ($visit->unique_visitors ?? 0) + ($isNewVisitor ? 1 : 0);
        $visit->last_visited_at = now();
        $visit->save();
    }
}
