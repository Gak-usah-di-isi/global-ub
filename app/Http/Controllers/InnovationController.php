<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Innovation;
use App\Helpers\TranslationHelper;

class InnovationController extends Controller
{
    private array $fields = ['title', 'description', 'highlights'];

    public function index()
    {
        $innovations = Innovation::paginate(6);
        $innovations->getCollection()->transform(fn($item) => TranslationHelper::translateModel($item, $this->fields));
        return view('landing.innovation', compact('innovations'));
    }

    public function show($slug)
    {
        $innovation = Innovation::where('slug', $slug)->firstOrFail();
        $innovation = TranslationHelper::translateModel($innovation, $this->fields);
        $relatedInnovations = Innovation::where('id', '!=', $innovation->id)
            ->inRandomOrder()
            ->take(3)
            ->get();
        $relatedInnovations = TranslationHelper::translateCollection($relatedInnovations, $this->fields);
        return view('landing.detail-innovation', compact('innovation', 'relatedInnovations'));
    }
}
