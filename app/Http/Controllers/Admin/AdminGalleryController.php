<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use App\Http\Requests\GalleryRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class AdminGalleryController extends Controller
{
    public function index()
    {
        $galleries = Gallery::latest()->paginate(10);

        return view('admin.galleries.index', compact('galleries'));
    }

    public function create()
    {
        return view('admin.galleries.create');
    }

    public function store(GalleryRequest $request)
    {
        $data = $request->only(['title', 'description', 'category_gallery']);

        if (empty($data['slug'])) {
            $data['slug'] = Str::slug($data['title']);
        }

        $images = [];
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $filename = time() . '_' . Str::random(10) . '.' . $image->getClientOriginalExtension();
                $imagePath = $image->storeAs('galleries', $filename, 'public');
                $images[] = $imagePath;
            }
        }

        $data['images'] = json_encode($images);

        Gallery::create($data);

        return redirect()->route('galleries.index')->with('success', 'Gallery successfully created.');
    }

    public function edit($slug)
    {
        $gallery = Gallery::where('slug', $slug)->firstOrFail();
        return view('admin.galleries.edit', compact('gallery'));
    }

    public function update(GalleryRequest $request, $slug)
    {
        $gallery = Gallery::where('slug', $slug)->firstOrFail();
        $data = $request->only(['title', 'description', 'category_gallery']);

        $existingImages = json_decode($gallery->images, true) ?? [];

        if ($request->hasFile('images')) {
            // Delete old images
            foreach ($existingImages as $oldImage) {
                if (Storage::disk('public')->exists($oldImage)) {
                    Storage::disk('public')->delete($oldImage);
                }
            }

            // Upload new images
            $images = [];
            foreach ($request->file('images') as $image) {
                $filename = time() . '_' . Str::random(10) . '.' . $image->getClientOriginalExtension();
                $imagePath = $image->storeAs('galleries', $filename, 'public');
                $images[] = $imagePath;
            }
            $data['images'] = json_encode($images);
        } else {
            $data['images'] = $gallery->images;
        }

        $gallery->update($data);

        return redirect()->route('galleries.index')->with('success', 'Gallery successfully updated.');
    }

    public function destroy($slug)
    {
        $gallery = Gallery::where('slug', $slug)->firstOrFail();

        // Delete associated images
        $images = json_decode($gallery->images, true) ?? [];
        foreach ($images as $image) {
            if (Storage::disk('public')->exists($image)) {
                Storage::disk('public')->delete($image);
            }
        }

        $gallery->delete();

        return redirect()->route('galleries.index')->with('success', 'Gallery successfully deleted.');
    }
}
