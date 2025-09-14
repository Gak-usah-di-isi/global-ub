<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoryRequest;
use App\Models\Story;

class AdminStoryController extends Controller
{
    public function index()
    {
        $stories = Story::latest()->paginate(10);
        return view('admin.stories.index', compact('stories'));
    }

    public function create()
    {
        return view('admin.stories.create');
    }

    public function store(StoryRequest $request)
    {
        $data = $request->only(['title', 'description', 'category_story', 'video_url']);

        if ($request->hasFile('thumbnail')) {
            $data['thumbnail'] = $request->file('thumbnail')->store('thumbnails', 'public');
        }

        Story::create($data);

        return redirect()->route('stories.index')->with('success', 'Story created successfully.');
    }

    public function edit($slug)
    {
        $story = Story::where('slug', $slug)->firstOrFail();
        return view('admin.stories.edit', compact('story'));
    }

    public function update(StoryRequest $request, $slug)
    {
        $story = Story::where('slug', $slug)->firstOrFail();
        $data = $request->only(['title', 'description', 'category_story', 'video_url']);

        if ($request->hasFile('thumbnail')) {
            $data['thumbnail'] = $request->file('thumbnail')->store('thumbnails', 'public');
        }

        $story->update($data);

        return redirect()->route('stories.index')->with('success', 'Story updated successfully.');
    }

    public function destroy($slug)
    {
        $story = Story::where('slug', $slug)->firstOrFail();
        if ($story->thumbnail && \Storage::disk('public')->exists($story->thumbnail)) {
            \Storage::disk('public')->delete($story->thumbnail);
        }
        $story->delete();
        return redirect()->route('stories.index')->with('success', 'Story deleted successfully.');
    }
}
