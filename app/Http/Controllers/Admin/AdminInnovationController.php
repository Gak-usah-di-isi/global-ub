<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\InnovationRequest;
use App\Models\Innovation;

class AdminInnovationController extends Controller
{
    public function index()
    {
        $innovations = Innovation::latest()->paginate(10);

        return view('admin.innovations.index', compact('innovations'));
    }

    public function create()
    {
        return view('admin.innovations.create');
    }

    public function store(InnovationRequest $request)
    {
        $data = $request->only(['title', 'description', 'innovation_type', 'innovation_date', 'start_time', 'end_time', 'location', 'expected_attendees']);

        if (empty($data['slug'])) {
            $data['slug'] = \Illuminate\Support\Str::slug($data['title']);
        }

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '_' . \Illuminate\Support\Str::slug(pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME)) . '.' . $file->getClientOriginalExtension();
            $filePath = $file->storeAs('innovations', $filename, 'public');
            $data['image'] = $filePath;
        }

        Innovation::create($data);

        return redirect()->route('innovations.index')->with('success', 'Innovation item successfully created.');
    }

    public function edit($slug)
    {
        $innovation = Innovation::where('slug', $slug)->firstOrFail();
        return view('admin.innovations.edit', compact('innovation'));
    }

    public function update(InnovationRequest $request, $slug)
    {
        $innovation = Innovation::where('slug', $slug)->firstOrFail();
        $data = $request->only(['title', 'description', 'innovation_type', 'innovation_date', 'start_time', 'end_time', 'location', 'expected_attendees']);

        if ($request->hasFile('image')) {
            if ($innovation->image && \Illuminate\Support\Facades\Storage::disk('public')->exists($innovation->image)) {
                \Illuminate\Support\Facades\Storage::disk('public')->delete($innovation->image);
            }

            $file = $request->file('image');
            $filename = time() . '_' . \Illuminate\Support\Str::slug(pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME)) . '.' . $file->getClientOriginalExtension();
            $filePath = $file->storeAs('innovations', $filename, 'public');
            $data['image'] = $filePath;
        }

        $innovation->update($data);
        return redirect()->route('innovations.index')->with('success', 'Innovation item successfully updated.');
    }

    public function destroy($slug)
    {
        $innovation = Innovation::where('slug', $slug)->firstOrFail();

        $innovation->delete();
        return redirect()->route('innovations.index')->with('success', 'Innovation item successfully deleted.');
    }
}
