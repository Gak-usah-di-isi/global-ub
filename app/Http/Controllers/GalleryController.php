<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;
use App\Helpers\TranslationHelper;

class GalleryController extends Controller
{
    private array $fields = ['title', 'description'];

    public function index()
    {
        $images = Gallery::latest()->paginate(6);
        $images->getCollection()->transform(fn($item) => TranslationHelper::translateModel($item, $this->fields));
        return view('landing.gallery', compact('images'));
    }

    public function show($slug)
    {
        $image = Gallery::where('slug', $slug)->firstOrFail();
        $image = TranslationHelper::translateModel($image, $this->fields);
        $images = Gallery::inRandomOrder()->take(6)->get();
        $images = TranslationHelper::translateCollection($images, $this->fields);
        return view('landing.detail-gallery', compact('image', 'images'));
    }
}
