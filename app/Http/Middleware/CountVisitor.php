<?php

namespace App\Http\Middleware;

use App\Models\CountryVisit;
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
        $ip = $request->ip();

        Cache::increment("visits:$date");
        Cache::increment('visits:total');

        $dailyVisitors = (array) Cache::get("visitors:$date", []);
        $allVisitors = (array) Cache::get('visitors:all', []);

        $isNewVisitor = !in_array($ip, $allVisitors, true);

        if (!in_array($ip, $dailyVisitors, true)) {
            $dailyVisitors[] = $ip;
            Cache::forever("visitors:$date", array_values($dailyVisitors));
        }

        if ($isNewVisitor) {
            $allVisitors[] = $ip;
            Cache::forever('visitors:all', array_values($allVisitors));
        }

        $this->recordCountryVisit($ip, $isNewVisitor);

        return $next($request);
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
