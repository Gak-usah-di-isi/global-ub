<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Redis;

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
        Redis::incr("visits:$date");
        Redis::incr("visits:total");
        Redis::sadd("visitors:$date", $ip);
        Redis::sadd("visitors:all", $ip);
        return $next($request);
    }
}
