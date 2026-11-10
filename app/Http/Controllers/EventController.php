<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Helpers\TranslationHelper;

class EventController extends Controller
{
    private array $fields = ['title', 'description'];

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
        $events->getCollection()->transform(fn($item) => TranslationHelper::translateModel($item, $this->fields));
        return view('landing.event', compact('events', 'search'));
    }

    public function show($slug)
    {
        $event = Event::where('slug', $slug)->firstOrFail();
        $event = TranslationHelper::translateModel($event, $this->fields);
        $paragraphs = explode("\n", $event->description);
        $relatedEvents = Event::where('id', '!=', $event->id)->inRandomOrder()->take(3)->get();
        $relatedEvents = TranslationHelper::translateCollection($relatedEvents, $this->fields);
        return view('landing.detail-events', compact('event', 'paragraphs', 'relatedEvents'));
    }
}
