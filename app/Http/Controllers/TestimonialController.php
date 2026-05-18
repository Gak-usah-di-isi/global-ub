<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonial;
use App\Helpers\TranslationHelper;

class TestimonialController extends Controller
{
    private array $fields = ['position', 'testimonial', 'key_achievements'];

    public function index()
    {
        $testimonials = Testimonial::latest()->paginate(6);
        $testimonials->getCollection()->transform(fn($item) => TranslationHelper::translateModel($item, $this->fields));
        return view('landing.testimonials', compact('testimonials'));
    }
}
