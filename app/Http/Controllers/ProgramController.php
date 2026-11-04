<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Program;

class ProgramController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->query('search');

        $query = Program::query();
        if ($search) {
            $query->where(function ($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                  ->orWhere('description', 'like', "%{$search}%")
                  ->orWhere('program_type', 'like', "%{$search}%");
            });
        }

        $programs = $query->paginate(6)->withQueryString();
        return view('landing.program', compact('programs', 'search'));
    }

    public function show($slug)
    {
        $program = Program::where('slug', $slug)->firstOrFail();
        $relatedPrograms = Program::where('id', '!=', $program->id)
            ->inRandomOrder()
            ->take(3)
            ->get();
        return view('landing.detail-program', compact('program', 'relatedPrograms'));
    }
}
