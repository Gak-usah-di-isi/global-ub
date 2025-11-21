<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CarouselRequest;
use App\Models\Carousel;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class AdminCarouselController extends Controller
{
    public function index()
    {
        $carousels = Carousel::orderBy('order', 'asc')->get();
        return view('admin.carousels.index', compact('carousels'));
    }

    public function create()
    {
        return view('admin.carousels.create');
    }

    public function store(CarouselRequest $request)
    {
        $data = $request->only(['title', 'subtitle', 'order']);
        $data['is_active'] = $request->has('is_active');

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $manager = new ImageManager(new Driver());
            $image = $manager->read($file->getPathname());

            $maxKb = 400;
            $quality = 80;
            do {
                $encoded = $image->toWebp(quality: $quality);
                $quality -= 5;
            } while (strlen($encoded) > ($maxKb * 1024) && $quality > 10);

            $filename = time() . '_' . uniqid() . '.webp';
            Storage::disk('public')->put('carousels/' . $filename, $encoded);
            $data['image'] = 'carousels/' . $filename;
        }

        Carousel::create($data);

        return redirect()->route('carousels.index')->with('success', 'Carousel berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $carousel = Carousel::findOrFail($id);
        return view('admin.carousels.edit', compact('carousel'));
    }

    public function update(CarouselRequest $request, $id)
    {
        $carousel = Carousel::findOrFail($id);

        $data = $request->only(['title', 'subtitle', 'order']);
        $data['is_active'] = $request->has('is_active');

        if ($request->hasFile('image')) {
            if ($carousel->image && Storage::disk('public')->exists($carousel->image)) {
                Storage::disk('public')->delete($carousel->image);
            }

            $file = $request->file('image');
            $manager = new ImageManager(new Driver());
            $image = $manager->read($file->getPathname());

            $maxKb = 400;
            $quality = 80;
            do {
                $encoded = $image->toWebp(quality: $quality);
                $quality -= 5;
            } while (strlen($encoded) > ($maxKb * 1024) && $quality > 10);

            $filename = time() . '_' . uniqid() . '.webp';
            Storage::disk('public')->put('carousels/' . $filename, $encoded);
            $data['image'] = 'carousels/' . $filename;
        }

        $carousel->update($data);

        return redirect()->route('carousels.index')->with('success', 'Carousel berhasil diupdate!');
    }

    public function destroy($id)
    {
        $carousel = Carousel::findOrFail($id);

        if ($carousel->image && Storage::disk('public')->exists($carousel->image)) {
            Storage::disk('public')->delete($carousel->image);
        }

        $carousel->delete();

        return redirect()->route('carousels.index')->with('success', 'Carousel berhasil dihapus!');
    }
}
