<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;

class GalleryController extends Controller
{
    public function index()
    {
        $images = Gallery::latest()->paginate(6);
        return view('landing.gallery', compact('images'));
    }

    public function show($slug)
    {
        $image = Gallery::where('slug', $slug)->firstOrFail();
        $images = Gallery::inRandomOrder()->take(6)->get();
        return view('landing.detail-gallery', compact('image', 'images'));
    }
}
