<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\EventRequest;
use App\Models\Event;

class AdminEventController extends Controller
{
    public function index()
    {
        $events = Event::latest()->paginate(10);

        return view('admin.events.index', compact('events'));
    }

    public function create()
    {
        return view('admin.events.create');
    }

    public function store(EventRequest $request)
    {
        $data = $request->only(['title', 'event_type', 'event_date', 'start_time', 'end_time', 'location', 'expected_attendees', 'description', 'image', 'status']);

        if (empty($data['slug'])) {
            $data['slug'] = \Illuminate\Support\Str::slug($data['title']);
        }

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '_' . \Illuminate\Support\Str::slug(pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME)) . '.' . $file->getClientOriginalExtension();
            $filePath = $file->storeAs('events', $filename, 'public');
            $data['image'] = $filePath;
        }

        Event::create($data);

        return redirect()->route('events.index')->with('success', 'Event successfully created.');
    }

    public function edit($slug)
    {
        $event = Event::where('slug', $slug)->firstOrFail();
        return view('admin.events.edit', compact('event'));
    }

    public function update(EventRequest $request, $slug)
    {
        $event = Event::where('slug', $slug)->firstOrFail();
        $data = $request->only(['title', 'event_type', 'event_date', 'start_time', 'end_time', 'location', 'expected_attendees', 'description', 'status']);

        if ($request->hasFile('image')) {
            if ($event->image && \Illuminate\Support\Facades\Storage::disk('public')->exists($event->image)) {
                \Illuminate\Support\Facades\Storage::disk('public')->delete($event->image);
            }

            $file = $request->file('image');
            $filename = time() . '_' . \Illuminate\Support\Str::slug(pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME)) . '.' . $file->getClientOriginalExtension();
            $filePath = $file->storeAs('events', $filename, 'public');
            $data['image'] = $filePath;
        }

        $event->update($data);

        return redirect()->route('events.index')->with('success', 'Event successfully updated.');
    }

    public function destroy($slug)
    {
        $event = Event::where('slug', $slug)->firstOrFail();

        if ($event->image && \Illuminate\Support\Facades\Storage::disk('public')->exists($event->image)) {
            \Illuminate\Support\Facades\Storage::disk('public')->delete($event->image);
        }

        $event->delete();

        return redirect()->route('events.index')->with('success', 'Event successfully deleted.');
    }
}
