<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use App\Http\Requests\TestimonialRequest;

class AdminTestimonialController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::latest()->paginate(10);
        return view('admin.testimonials.index', compact('testimonials'));
    }

    public function create()
    {
        return view('admin.testimonials.create');
    }

    public function store(TestimonialRequest $request)
    {
        $data = $request->only([
            'name', 'position', 'organization', 'testimonial_type',
            'testimonial', 'location', 'partnership_since', 'key_achievements'
        ]);

        if ($request->hasFile('photo')) {
            $data['photo'] = $request->file('photo')->store('testimonials', 'public');
        }
        Testimonial::create($data);
        return redirect()->route('testimonials.index')->with('success', 'Testimonial created successfully.');
    }

    public function edit($slug)
    {
        $testimonial = Testimonial::where('slug', $slug)->firstOrFail();
        return view('admin.testimonials.edit', compact('testimonial'));
    }

    public function update(TestimonialRequest $request, $slug)
    {
        $testimonial = Testimonial::where('slug', $slug)->firstOrFail();
        $data = $request->only([
            'name', 'position', 'organization', 'testimonial_type',
            'testimonial', 'location', 'partnership_since', 'key_achievements'
        ]);

        if ($request->hasFile('photo')) {
            if ($testimonial->photo && \Storage::disk('public')->exists($testimonial->photo)) {
                \Storage::disk('public')->delete($testimonial->photo);
            }
            $data['photo'] = $request->file('photo')->store('testimonials', 'public');
        }

        $testimonial->update($data);
        return redirect()->route('testimonials.index')->with('success', 'Testimonial updated successfully.');
    }

    public function destroy($slug)
    {
        $testimonial = Testimonial::where('slug', $slug)->firstOrFail();
        if ($testimonial->photo && \Storage::disk('public')->exists($testimonial->photo)) {
            \Storage::disk('public')->delete($testimonial->photo);
        }
        $testimonial->delete();
        return redirect()->route('testimonials.index')->with('success', 'Testimonial deleted successfully.');
    }
}
