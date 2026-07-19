<?php

namespace App\Http\Controllers;

class CountryController extends Controller
{
    public function index()
    {
        $countries = [['name' => 'Russia', 'role' => 'Research link', 'status' => 'Partner',], ['name' => 'Canada', 'role' => 'Academic exchange', 'status' => 'Partner',], ['name' => 'Greenland', 'role' => 'Network point', 'status' => 'Connected',], ['name' => 'Brazil', 'role' => 'International collaboration', 'status' => 'Highlighted',], ['name' => 'China', 'role' => 'Strategic cooperation', 'status' => 'Highlighted',], ['name' => 'United States', 'role' => 'Global academic partner', 'status' => 'Partner',], ['name' => 'Norway', 'role' => 'Research collaboration', 'status' => 'Highlighted',], ['name' => 'Palestine', 'role' => 'Academic solidarity', 'status' => 'Highlighted',],];
        return view('landing.country', compact('countries'));
    }
}
