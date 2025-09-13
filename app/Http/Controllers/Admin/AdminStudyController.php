<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Study;

class AdminStudyController extends Controller
{
    public function index()
    {
        $studies = Study::latest()->paginate(10);

        return view('admin.studies.index', compact('studies'));
    }
    public function create()
    {
        return view('admin.studies.create');
    }
    public function store(Request $request)
    {
        $data = $request->only(['title', 'tagline', 'description', 'students_count', 'duration', 'highlights', 'icon_class']);

        if (empty($data['slug'])) {
            $data['slug'] = \Illuminate\Support\Str::slug($data['title']);
        }

        Study::create($data);

        return redirect()->route('studies.index')->with('success', 'Study item successfully created.');
    }
    public function edit($slug)
    {
        $study = Study::where('slug', $slug)->firstOrFail();
        return view('admin.studies.edit', compact('study'));
    }
    public function update(Request $request, $slug)
    {
        $study = Study::where('slug', $slug)->firstOrFail();
        $data = $request->only(['title', 'tagline', 'description', 'students_count', 'duration', 'highlights', 'icon_class']);

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
