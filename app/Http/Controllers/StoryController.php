<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Story;
use App\Helpers\TranslationHelper;

class StoryController extends Controller
{
    private array $fields = ['title', 'description'];

    public function index()
    {
        $stories = Story::latest()->paginate(6);
        $stories->getCollection()->transform(fn($item) => TranslationHelper::translateModel($item, $this->fields));
        return view('landing.stories', compact('stories'));
    }
}
