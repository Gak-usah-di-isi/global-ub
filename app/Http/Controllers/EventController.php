<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::paginate(6);
        return view('landing.event', compact('events'));
    }

    public function show($slug)
    {
        $event = Event::where('slug', $slug)->firstOrFail();
        $relatedEvents = Event::inRandomOrder()->take(3)->get();
        return view('landing.detail-events', compact('event', 'relatedEvents'));
    }
}
