<?php

// app/Http/Controllers/LandingPageController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index()
    {
        return view('landing.index');
    }

    public function smmLanding()
    {
        return view('landing.smm-landing');
    }

    public function devLanding()
    {
        return view('landing.dev-landing');
    }
}

