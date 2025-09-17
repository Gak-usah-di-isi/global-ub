<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Partnership;

class PartnershipController extends Controller
{
    public function index()
    {
        $partnerships = Partnership::paginate(32);
        return view('landing.partnership', compact('partnerships'));
    }
}
