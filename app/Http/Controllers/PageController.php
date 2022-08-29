<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function about()
    {
        return view('about');
    }

    public function profile()
    {
        return view('profile');
    }

    public function faq()
    {
        return view('faq');
    }
}
