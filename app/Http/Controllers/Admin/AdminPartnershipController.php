<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Partnership;
use App\Http\Requests\PartnershipRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class AdminPartnershipController extends Controller
{
    public function index()
    {
        $partnerships = Partnership::latest()->paginate(10);

        return view('admin.partnerships.index', compact('partnerships'));
    }

    public function create()
    {
        return view('admin.partnerships.create');
    }

    public function store(PartnershipRequest $request)
    {
        $data = $request->only(['name', 'website']);

        if (empty($data['slug'])) {
            $data['slug'] = Str::slug($data['name']);
        }

        if ($request->hasFile('logo')) {
            $logo = $request->file('logo');
            $filename = time() . '_' . Str::slug($data['name']) . '.' . $logo->getClientOriginalExtension();
            $logoPath = $logo->storeAs('partnerships', $filename, 'public');
            $data['logo'] = $logoPath;
        }

        Partnership::create($data);

        return redirect()->route('partnerships.index')->with('success', 'Partnership successfully created.');
    }

    public function edit($slug)
    {
        $partnership = Partnership::where('slug', $slug)->firstOrFail();
        return view('admin.partnerships.edit', compact('partnership'));
    }

    public function update(PartnershipRequest $request, $slug)
    {
        $partnership = Partnership::where('slug', $slug)->firstOrFail();
        $data = $request->only(['name', 'website']);

        if ($request->hasFile('logo')) {
            // Delete old logo
            if ($partnership->logo && Storage::disk('public')->exists($partnership->logo)) {
                Storage::disk('public')->delete($partnership->logo);
            }

            $logo = $request->file('logo');
            $filename = time() . '_' . Str::slug($data['name']) . '.' . $logo->getClientOriginalExtension();
            $logoPath = $logo->storeAs('partnerships', $filename, 'public');
            $data['logo'] = $logoPath;
        }

        $partnership->update($data);

        return redirect()->route('partnerships.index')->with('success', 'Partnership successfully updated.');
    }

    public function destroy($slug)
    {
        $partnership = Partnership::where('slug', $slug)->firstOrFail();

        // Delete associated logo
        if ($partnership->logo && Storage::disk('public')->exists($partnership->logo)) {
            Storage::disk('public')->delete($partnership->logo);
        }

        $partnership->delete();

        return redirect()->route('partnerships.index')->with('success', 'Partnership successfully deleted.');
    }
}
