<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Study;
use App\Models\Icon;
use App\Helpers\TranslationHelper;

class StudyController extends Controller
{
    private array $fields = ['title', 'tagline', 'description', 'highlights'];

    public function index()
    {
        $studies = Study::with('icon')->latest()->paginate(6);
        $studies->getCollection()->transform(fn($item) => TranslationHelper::translateModel($item, $this->fields));
        return view('landing.study', compact('studies'));
    }

    public function show($slug)
    {
        $study = Study::with('icon')->where('slug', $slug)->firstOrFail();
        $study = TranslationHelper::translateModel($study, $this->fields);
        $relatedStudies = Study::inRandomOrder()->take(3)->get();
        $relatedStudies = TranslationHelper::translateCollection($relatedStudies, $this->fields);
        return view('landing.detail-study', compact('study', 'relatedStudies'));
    }
}
