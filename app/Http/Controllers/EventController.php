<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Helpers\TranslationHelper;

class EventController extends Controller
{
    private array $fields = ['title', 'description'];

    public function index()
    {
        $events = Event::paginate(6);
        $events->getCollection()->transform(fn($item) => TranslationHelper::translateModel($item, $this->fields));
        return view('landing.event', compact('events'));
    }

    public function show($slug)
    {
        $event = Event::where('slug', $slug)->firstOrFail();
        $event = TranslationHelper::translateModel($event, $this->fields);
        $paragraphs = explode("\n", $event->description);
        $relatedEvents = Event::inRandomOrder()->take(3)->get();
        $relatedEvents = TranslationHelper::translateCollection($relatedEvents, $this->fields);
        return view('landing.detail-events', compact('event', 'paragraphs', 'relatedEvents'));
    }
}
