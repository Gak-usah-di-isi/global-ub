<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CountryVisit;

class AdminVisitorStatisticController extends Controller
{
    public function index()
    {
        $countries = CountryVisit::orderByDesc('total_visits')->get();

        $totalVisits = $countries->sum('total_visits');
        $totalVisitors = $countries->sum('unique_visitors');
        $totalCountries = $countries->where('country_code', '!=', 'XX')->count();
        $topCountry = $countries->first();

        return view('admin.visitor-statistics.index', compact(
            'countries',
            'totalVisits',
            'totalVisitors',
            'totalCountries',
            'topCountry'
        ));
    }
}
