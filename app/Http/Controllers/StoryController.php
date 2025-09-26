<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Story;

class StoryController extends Controller
{
    public function index()
    {
        $stories = Story::latest()->paginate(6);
        return view('landing.stories', compact('stories'));
    }
}
