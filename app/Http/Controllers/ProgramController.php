<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Program;

class ProgramController extends Controller
{
    public function index()
    {
        $programs = Program::paginate(6);
        return view('landing.program', compact('programs'));
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
