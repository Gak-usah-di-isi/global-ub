<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Merchandise extends Controller
{
   public function index()
    {
        return view('landing.merchandise');
    }
}
