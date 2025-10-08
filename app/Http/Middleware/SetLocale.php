<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (session()->has('locale')) {
            $locale = session('locale');
        } else {
            $locale = config('app.locale', 'en');
        }

        $supportedLocales = ['en', 'id'];
        if (in_array($locale, $supportedLocales)) {
            app()->setLocale($locale);
        }

        return $next($request);
    }
}
