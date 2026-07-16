<?php

namespace App\Http\Controllers;

class SocialMediaController extends Controller
{
    public function index()
    {
        $platforms = [
            [
                'name' => 'Instagram',
                'status' => 'Live',
                'description' => 'Official Instagram updates from Globalizing UB.',
            ],
            [
                'name' => 'Facebook',
                'status' => 'Coming Soon',
                'description' => 'Facebook integration will be added next.',
            ],
            [
                'name' => 'LinkedIn',
                'status' => 'Coming Soon',
                'description' => 'LinkedIn updates will follow in the same page.',
            ],
        ];

        return view('landing.social-media', compact('platforms'));
    }
}
