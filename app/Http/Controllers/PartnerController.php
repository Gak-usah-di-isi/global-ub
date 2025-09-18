<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Partner;

class PartnerController extends Controller
{
    public function index()
    {
        $partners = Partner::latest()->paginate(6);
        return view('landing.partner', compact('partners'));
    }
}
