<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AboutSection;

class AboutController extends Controller
{
    public function index()
    {
        $aboutSection = AboutSection::first();
        return view('landing.about', compact('aboutSection'));
    }
}
