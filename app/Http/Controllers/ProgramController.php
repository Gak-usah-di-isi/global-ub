<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Program;
use App\Helpers\TranslationHelper;

class ProgramController extends Controller
{
    private array $fields = ['title', 'description', 'highlights'];

    public function index()
    {
        $programs = Program::paginate(6);
        $programs->getCollection()->transform(fn($item) => TranslationHelper::translateModel($item, $this->fields));
        return view('landing.program', compact('programs'));
    }

    public function show($slug)
    {
        $program = Program::where('slug', $slug)->firstOrFail();
        $program = TranslationHelper::translateModel($program, $this->fields);
        $relatedPrograms = Program::where('id', '!=', $program->id)
            ->inRandomOrder()
            ->take(3)
            ->get();
        $relatedPrograms = TranslationHelper::translateCollection($relatedPrograms, $this->fields);
        return view('landing.detail-program', compact('program', 'relatedPrograms'));
    }
}
