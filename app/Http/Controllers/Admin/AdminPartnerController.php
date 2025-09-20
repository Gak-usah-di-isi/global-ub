<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Partner;
use App\Models\Icon;
use App\Http\Requests\PartnerRequest;

class AdminPartnerController extends Controller
{
    public function index()
    {
        $partners = Partner::with('icon')->latest()->paginate(10);
        return view('admin.partners.index', compact('partners'));
    }

    public function create()
    {
        $icons = Icon::all();
        return view('admin.partners.create', compact('icons'));
    }

    public function store(PartnerRequest $request)
    {
        $data = $request->only(['title', 'description', 'students_count', 'program_duration', 'icon_class', 'icon_id']);

        if (empty($data['slug'])) {
            $data['slug'] = \Illuminate\Support\Str::slug($data['title']);
        }

        Partner::create($data);

        return redirect()->route('partners.index')->with('success', 'Partner created successfully.');
    }

    public function edit($slug)
    {
        $icons = Icon::all();
        $partner = Partner::where('slug', $slug)->firstOrFail();
        return view('admin.partners.edit', compact('partner', 'icons'));
    }

    public function update(PartnerRequest $request, $slug)
    {
        $partner = Partner::where('slug', $slug)->firstOrFail();

        $data = $request->only(['title', 'description', 'students_count', 'program_duration', 'icon_class', 'icon_id']);

        if (empty($partner->slug)) {
            $partner->slug = \Illuminate\Support\Str::slug($partner->title);
        }

        $partner->update($data);

        return redirect()->route('partners.index')->with('success', 'Partner updated successfully.');
    }

    public function destroy($slug)
    {
        $partner = Partner::where('slug', $slug)->firstOrFail();
        $partner->delete();
        return redirect()->route('partners.index')->with('success', 'Partner deleted successfully.');
    }
}
