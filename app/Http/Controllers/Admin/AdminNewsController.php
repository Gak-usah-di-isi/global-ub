<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\NewsRequest;
use App\Models\News;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

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

    public function store(NewsRequest $request)
    {
        $data = $request->only(['title', 'content']);

        if (empty($data['slug'])) {
            $data['slug'] = \Illuminate\Support\Str::slug($data['title']);
        }

        if ($request->hasFile('image')) {
            $file = $request->file('image');

            $manager = new ImageManager(new Driver());
            $image = $manager->read($file->getPathname());

            $maxKb = 400;
            $quality = 80;
            do {
                $encoded = $image->toWebp(quality: $quality);
                $quality -= 5;
            } while (strlen((string)$encoded) > $maxKb * 1024 && $quality >= 40);

            $filenameBase = time() . '_' . Str::slug(pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME));
            $webpPath = "news/{$filenameBase}.webp";

            Storage::disk('public')->put($webpPath, $encoded);
            $data['image'] = $webpPath;
        }

        News::create($data);

        return redirect()->route('news.index')->with('success', 'News item successfully created.');
    }

    public function edit($slug)
    {
        $newsItem = News::where('slug', $slug)->firstOrFail();
        return view('admin.news.edit', compact('newsItem'));
    }

    public function update(NewsRequest $request, $slug)
    {
        $newsItem = News::where('slug', $slug)->firstOrFail();
        $data = $request->only(['title', 'content']);

        if ($request->hasFile('image')) {
            if ($newsItem->image && Storage::disk('public')->exists($newsItem->image)) {
                Storage::disk('public')->delete($newsItem->image);
            }

            $file = $request->file('image');

            $manager = new ImageManager(new Driver());
            $image = $manager->read($file->getPathname());

            $maxKb = 400;
            $quality = 80;
            do {
                $encoded = $image->toWebp(quality: $quality);
                $quality -= 5;
            } while (strlen((string)$encoded) > $maxKb * 1024 && $quality >= 40);

            $filenameBase = time() . '_' . Str::slug(pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME));
            $webpPath = "news/{$filenameBase}.webp";

            Storage::disk('public')->put($webpPath, $encoded);
            $data['image'] = $webpPath;
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
