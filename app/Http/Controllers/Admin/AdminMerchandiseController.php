<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Merchandise;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class AdminMerchandiseController extends Controller
{
    public function index()
    {
        $merchandise = Merchandise::orderBy('order')->paginate(10);
        return view('admin.merchandise.index', compact('merchandise'));
    }

    public function create()
    {
        return view('admin.merchandise.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'category' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'is_active' => 'boolean',
            'shopee_link' => 'nullable|url|max:255',
            'tokopedia_link' => 'nullable|url|max:255',
            'order' => 'nullable|integer',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            // Make sure the directory exists
            if (!file_exists(public_path('storage/merchandise'))) {
                mkdir(public_path('storage/merchandise'), 0777, true);
            }
            $image->move(public_path('storage/merchandise'), $imageName);
            $validated['image'] = 'merchandise/' . $imageName;
        }

        $validated['slug'] = Str::slug($validated['name']);
        $validated['is_active'] = $request->has('is_active');

        Merchandise::create($validated);

        return redirect()->route('merchandise.index')
            ->with('success', 'Merchandise created successfully.');
    }

    public function edit(Merchandise $merchandise)
    {
        return view('admin.merchandise.edit', compact('merchandise'));
    }

    public function update(Request $request, Merchandise $merchandise)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'category' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'is_active' => 'boolean',
            'shopee_link' => 'nullable|url|max:255',
            'tokopedia_link' => 'nullable|url|max:255',
            'order' => 'nullable|integer',
        ]);

        if ($request->hasFile('image')) {
            // Delete old image
            if ($merchandise->image) {
                $oldImagePath = public_path('storage/' . $merchandise->image);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

            // Store new image
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('storage/merchandise'), $imageName);
            $validated['image'] = 'merchandise/' . $imageName;
        }

        $validated['slug'] = Str::slug($validated['name']);
        $validated['is_active'] = $request->has('is_active');

        $merchandise->update($validated);

        return redirect()->route('merchandise.index')
            ->with('success', 'Merchandise updated successfully.');
    }

    public function destroy(Merchandise $merchandise)
    {
        if ($merchandise->image) {
            $imagePath = public_path('storage/' . $merchandise->image);
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }

        $merchandise->delete();

        return redirect()->route('merchandise.index')
            ->with('success', 'Merchandise deleted successfully.');
    }
}
