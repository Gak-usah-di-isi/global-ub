<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Innovation;

class InnovationController extends Controller
{
    public function index()
    {
        $innovations = Innovation::paginate(6);
        return view('landing.innovation', compact('innovations'));
    }

    public function show($slug)
    {
        $innovation = Innovation::where('slug', $slug)->firstOrFail();
        $relatedInnovations = Innovation::where('id', '!=', $innovation->id)
            ->inRandomOrder()
            ->take(3)
            ->get();
        return view('landing.detail-innovation', compact('innovation', 'relatedInnovations'));
    }
}
