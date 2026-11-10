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

    public function destroy($id)
    {
        $country = CountryVisit::findOrFail($id);
        $name = $country->country_name ?? $country->country_code;
        $country->delete();

        return redirect()->route('visitor-statistics.index')
            ->with('success', "Statistik pengunjung untuk {$name} berhasil dihapus.");
    }
}
