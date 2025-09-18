<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StudyRequest;
use App\Models\Study;
use App\Models\Icon;

class AdminStudyController extends Controller
{
    public function index()
    {
        $studies = Study::with('icon')->latest()->paginate(10);
        return view('admin.studies.index', compact('studies'));
    }
    public function create()
    {
        $icons = Icon::all();
        return view('admin.studies.create', compact('icons'));
    }
    public function store(StudyRequest $request)
    {
        $data = $request->only(['title', 'tagline', 'description', 'students_count', 'duration', 'highlights', 'icon_class', 'icon_id']);

        if (empty($data['slug'])) {
            $data['slug'] = \Illuminate\Support\Str::slug($data['title']);
        }

        Study::create($data);

        return redirect()->route('studies.index')->with('success', 'Study item successfully created.');
    }
    public function edit($slug)
    {
        $icons = Icon::all();
        $study = Study::where('slug', $slug)->firstOrFail();
        return view('admin.studies.edit', compact('study', 'icons'));
    }
    public function update(StudyRequest $request, $slug)
    {
        $study = Study::where('slug', $slug)->firstOrFail();
        $data = $request->only(['title', 'tagline', 'description', 'students_count', 'duration', 'highlights', 'icon_class', 'icon_id']);

        $study->update($data);
        return redirect()->route('studies.index')->with('success', 'Study item successfully updated.');
    }
    public function destroy($slug)
    {
        $study = Study::where('slug', $slug)->firstOrFail();

        $study->delete();
        return redirect()->route('studies.index')->with('success', 'Study item successfully deleted.');
    }
}
