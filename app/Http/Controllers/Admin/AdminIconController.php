<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\IconRequest;
use App\Models\Icon;

class AdminIconController extends Controller
{
    public function index()
    {
        $icons = Icon::latest()->paginate(10);
        return view('admin.icons.index', compact('icons'));
    }

    public function create()
    {
        return view('admin.icons.create');
    }

    public function store(IconRequest $request)
    {
        $data = $request->only(['name']);

        if (empty($data['slug'])) {
            $data['slug'] = \Illuminate\Support\Str::slug($data['name']);
        }

        if ($request->hasFile('icon')) {
            $file = $request->file('icon');
            $filename = time() . '_' . \Illuminate\Support\Str::slug(pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME)) . '.' . $file->getClientOriginalExtension();
            $filePath = $file->storeAs('icons', $filename, 'public');
            $data['icon'] = $filePath;
        }

        Icon::create($data);

        return redirect()->route('icons.index')->with('success', 'Icon successfully created.');
    }

    public function edit($slug)
    {
        $icon = Icon::where('slug', $slug)->firstOrFail();
        return view('admin.icons.edit', compact('icon'));
    }

    public function update(IconRequest $request, $slug)
    {
        $icon = Icon::where('slug', $slug)->firstOrFail();
        $data = $request->only(['name']);

        if ($request->hasFile('icon')) {
            if ($icon->icon && \Illuminate\Support\Facades\Storage::disk('public')->exists($icon->icon)) {
                \Illuminate\Support\Facades\Storage::disk('public')->delete($icon->icon);
            }

            $file = $request->file('icon');
            $filename = time() . '_' . \Illuminate\Support\Str::slug(pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME)) . '.' . $file->getClientOriginalExtension();
            $filePath = $file->storeAs('icons', $filename, 'public');
            $data['icon'] = $filePath;
        }

        $icon->update($data);

        return redirect()->route('icons.index')->with('success', 'Icon successfully updated.');
    }

    public function destroy($slug)
    {
        $icon = Icon::where('slug', $slug)->firstOrFail();

        if ($icon->icon && \Illuminate\Support\Facades\Storage::disk('public')->exists($icon->icon)) {
            \Illuminate\Support\Facades\Storage::disk('public')->delete($icon->icon);
        }

        $icon->delete();

        return redirect()->route('icons.index')->with('success', 'Icon successfully deleted.');
    }
}
