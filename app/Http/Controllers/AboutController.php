<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AboutSection;
use App\Helpers\TranslationHelper;

class AboutController extends Controller
{
    public function index()
    {
        $aboutSection = AboutSection::first();
        if ($aboutSection) {
            $aboutSection = TranslationHelper::translateModel($aboutSection, [
                'achievement_1_label', 'achievement_2_label', 'achievement_3_label',
                'achievement_4_label', 'achievement_5_label',
            ]);
        }
        return view('landing.about', compact('aboutSection'));
    }
}
