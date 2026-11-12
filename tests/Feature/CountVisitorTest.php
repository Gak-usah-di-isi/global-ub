<?php

use App\Http\Middleware\CountVisitor;
use App\Models\CountryVisit;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Stevebauman\Location\Facades\Location;
use Stevebauman\Location\Position;

it('records a visitor country from a public IP', function () {
    Location::fake([
        '8.8.8.8' => Position::make([
            'country_code' => 'ID',
            'country_name' => 'Indonesia',
        ]),
    ]);

    $request = Request::create('/', 'GET', server: ['REMOTE_ADDR' => '8.8.8.8']);
    $response = app(CountVisitor::class)->handle($request, fn () => new Response('ok'));

    expect($response)->toBeInstanceOf(Response::class)
        ->and(CountryVisit::first()->only(['country_code', 'country_name', 'total_visits', 'unique_visitors']))
        ->toMatchArray([
            'country_code' => 'ID',
            'country_name' => 'Indonesia',
            'total_visits' => 1,
            'unique_visitors' => 1,
        ]);
});

it('does not send private IPs to the GeoIP provider', function () {
    Location::fake([
        '10.0.0.2' => Position::make([
            'country_code' => 'US',
            'country_name' => 'United States',
        ]),
    ]);

    $request = Request::create('/', 'GET', server: ['REMOTE_ADDR' => '10.0.0.2']);
    app(CountVisitor::class)->handle($request, fn () => new Response('ok'));

    expect(CountryVisit::first()->country_code)->toBe('XX');
});
