<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Innovation;

class InnovationController extends Controller
{
    public function index()
    {
        $innovations = Innovation::paginate(6);
        return view('landing.innovation', compact('innovations'));
    }
}
