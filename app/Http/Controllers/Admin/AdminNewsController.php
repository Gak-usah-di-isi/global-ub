<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;

class AdminNewsController extends Controller
{
    public function index()
    {
        $newsItems = News::latest()->paginate(10);

        return view('admin.news.index', compact('newsItems'));
    }

    public function create()
    {
        return view('admin.news.create');
    }

    public function store(Request $request)
    {
        $data = $request->only(['title', 'content']);

        if (empty($data['slug'])) {
            $data['slug'] = \Illuminate\Support\Str::slug($data['title']);
        }

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '_' . \Illuminate\Support\Str::slug(pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME)) . '.' . $file->getClientOriginalExtension();
            $filePath = $file->storeAs('news', $filename, 'public');
            $data['image'] = $filePath;
        }

        News::create($data);

        return redirect()->route('news.index')->with('success', 'News item successfully created.');
    }

    public function edit($slug)
    {
        $newsItem = News::where('slug', $slug)->firstOrFail();
        return view('admin.news.edit', compact('newsItem'));
    }

    public function update(Request $request, $slug)
    {
        $newsItem = News::where('slug', $slug)->firstOrFail();
        $data = $request->only(['title', 'content']);

        if ($request->hasFile('image')) {
            if ($newsItem->image && \Illuminate\Support\Facades\Storage::disk('public')->exists($newsItem->image)) {
                \Illuminate\Support\Facades\Storage::disk('public')->delete($newsItem->image);
            }

            $file = $request->file('image');
            $filename = time() . '_' . \Illuminate\Support\Str::slug(pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME)) . '.' . $file->getClientOriginalExtension();
            $filePath = $file->storeAs('news', $filename, 'public');
            $data['image'] = $filePath;
        }

        $newsItem->update($data);

        return redirect()->route('news.index')->with('success', 'News item successfully updated.');
    }

    public function destroy($slug)
    {
        $newsItem = News::where('slug', $slug)->firstOrFail();

        if ($newsItem->image && \Illuminate\Support\Facades\Storage::disk('public')->exists($newsItem->image)) {
            \Illuminate\Support\Facades\Storage::disk('public')->delete($newsItem->image);
        }

        $newsItem->delete();

        return redirect()->route('news.index')->with('success', 'News item successfully deleted.');
    }
}
