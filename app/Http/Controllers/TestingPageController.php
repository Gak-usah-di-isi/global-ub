<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestingPageController extends Controller
{
    public function index()
    {
        return view('testing.index');
    }
}
