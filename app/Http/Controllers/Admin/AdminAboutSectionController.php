<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AboutSection;

class AdminAboutSectionController extends Controller
{
    public function index()
    {
        $aboutSection = AboutSection::first();
        return view('admin.about-section.index', compact('aboutSection'));
    }

    public function edit()
    {
        $aboutSection = AboutSection::firstOrCreate([]);
        return view('admin.about-section.edit', compact('aboutSection'));
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'students_count' => 'required|integer|min:0',
            'programs_count' => 'required|integer|min:0',
            'years_count' => 'required|integer|min:0',
            'partners_count' => 'required|integer|min:0',
            'video_url' => 'nullable|url',
            'achievement_1_value' => 'required|string|max:50',
            'achievement_1_label' => 'required|string|max:255',
            'achievement_2_value' => 'required|string|max:50',
            'achievement_2_label' => 'required|string|max:255',
            'achievement_3_value' => 'required|string|max:50',
            'achievement_3_label' => 'required|string|max:255',
            'achievement_4_value' => 'required|string|max:50',
            'achievement_4_label' => 'required|string|max:255',
            'achievement_5_value' => 'required|string|max:50',
            'achievement_5_label' => 'required|string|max:255',
        ]);

        if (!empty($validated['video_url'])) {
            $videoUrl = $validated['video_url'];

            if (preg_match('/(?:youtube\.com\/(?:watch\?v=|embed\/)|youtu\.be\/)([a-zA-Z0-9_-]+)/', $videoUrl, $matches)) {
                $videoId = $matches[1];
                $validated['video_url'] = 'https://www.youtube.com/embed/' . $videoId;
            }
        }

        $aboutSection = AboutSection::firstOrCreate([]);
        $aboutSection->update($validated);

        return redirect()->route('about-section.index')->with('success', 'About section updated successfully.');
    }
}
