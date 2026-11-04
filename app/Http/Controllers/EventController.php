<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->query('search');

        $query = Event::query();
        if ($search) {
            $query->where(function ($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                  ->orWhere('description', 'like', "%{$search}%")
                  ->orWhere('event_type', 'like', "%{$search}%");
            });
        }

        $events = $query->paginate(6)->withQueryString();
        return view('landing.event', compact('events', 'search'));
    }

    public function show($slug)
    {
        $event = Event::where('slug', $slug)->firstOrFail();
        $paragraphs = explode("\n", $event->description);
        $relatedEvents = Event::inRandomOrder()->take(3)->get();
        return view('landing.detail-events', compact('event', 'paragraphs', 'relatedEvents'));
    }
}
