<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Study;
use App\Models\Icon;

class StudyController extends Controller
{
    public function index()
    {
        $studies = Study::with('icon')->latest()->paginate(6);
        return view('landing.study', compact('studies'));
    }

    public function show($slug)
    {
        $study = Study::with('icon')->where('slug', $slug)->firstOrFail();
        $relatedStudies = Study::inRandomOrder()->take(3)->get();
        return view('landing.detail-study', compact('study', 'relatedStudies'));
    }
}
