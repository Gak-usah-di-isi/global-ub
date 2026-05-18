<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Partner;
use App\Helpers\TranslationHelper;

class PartnerController extends Controller
{
    private array $fields = ['title', 'description'];

    public function index()
    {
        $partners = Partner::latest()->paginate(6);
        $partners->getCollection()->transform(fn($item) => TranslationHelper::translateModel($item, $this->fields));
        return view('landing.partner', compact('partners'));
    }
}
