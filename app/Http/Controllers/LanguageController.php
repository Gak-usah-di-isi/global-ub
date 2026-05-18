<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function switch(Request $request, string $locale)
    {
        $supported = ['en', 'id'];

        if (in_array($locale, $supported)) {
            $request->session()->put('locale', $locale);
            \Log::info('Locale switched to: ' . $locale . ' | session id: ' . $request->session()->getId());
        }

        return redirect()->back();
    }
}
