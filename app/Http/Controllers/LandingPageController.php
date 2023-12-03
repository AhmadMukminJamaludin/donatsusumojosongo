<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function home()
    {
        return view('landing-page.home');
    }
    
    public function about()
    {
        return view('landing-page.about');
    }

    public function product()
    {
        return view('landing-page.product');
    }

    public function store()
    {
        return view('landing-page.store');
    }
}
