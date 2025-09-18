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
        return view('landing.detail-events');
    }
}
