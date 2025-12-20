<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProgramRequest;
use App\Models\Program;

class AdminProgramController extends Controller
{
    public function index()
    {
        $programs = Program::latest()->paginate(10);

        return view('admin.programs.index', compact('programs'));
    }

    public function create()
    {
        return view('admin.programs.create');
    }

    public function store(ProgramRequest $request)
    {
        $data = $request->only(['title', 'description', 'program_type', 'highlights', 'link', 'report_link', 'video_link']);

        if ($request->has('references')) {
            $data['references'] = array_values(array_filter($request->input('references'), function ($value) {
                return !empty($value);
            }));
        }

        if ($request->has('reference_titles')) {
            $data['reference_titles'] = array_values(array_filter($request->input('reference_titles'), function ($value) {
                return !empty($value);
            }));
        }

        if (empty($data['slug'])) {
            $data['slug'] = \Illuminate\Support\Str::slug($data['title']);
        }

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '_' . \Illuminate\Support\Str::slug(pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME)) . '.' . $file->getClientOriginalExtension();
            $filePath = $file->storeAs('programs', $filename, 'public');
            $data['image'] = $filePath;
        }

        Program::create($data);

        return redirect()->route('programs.index')->with('success', 'Program successfully created.');
    }

    public function edit($slug)
    {
        $program = Program::where('slug', $slug)->firstOrFail();
        return view('admin.programs.edit', compact('program'));
    }

    public function update(ProgramRequest $request, $slug)
    {
        $program = Program::where('slug', $slug)->firstOrFail();
        $data = $request->only(['title', 'description', 'program_type', 'highlights', 'link', 'report_link', 'video_link']);

        if ($request->has('references')) {
            $data['references'] = array_values(array_filter($request->input('references'), function ($value) {
                return !empty($value);
            }));
        } else {
            $data['references'] = [];
        }

        if ($request->has('reference_titles')) {
            $data['reference_titles'] = array_values(array_filter($request->input('reference_titles'), function ($value) {
                return !empty($value);
            }));
        } else {
            $data['reference_titles'] = [];
        }

        if ($request->hasFile('image')) {
            if ($program->image && \Illuminate\Support\Facades\Storage::disk('public')->exists($program->image)) {
                \Illuminate\Support\Facades\Storage::disk('public')->delete($program->image);
            }

            $file = $request->file('image');
            $filename = time() . '_' . \Illuminate\Support\Str::slug(pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME)) . '.' . $file->getClientOriginalExtension();
            $filePath = $file->storeAs('programs', $filename, 'public');
            $data['image'] = $filePath;
        }

        $program->update($data);
        return redirect()->route('programs.index')->with('success', 'Program successfully updated.');
    }

    public function destroy($slug)
    {
        $program = Program::where('slug', $slug)->firstOrFail();

        $program->delete();
        return redirect()->route('programs.index')->with('success', 'Program successfully deleted.');
    }
}
