<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function bisnis()
    {
        return view('business');
    }

    public function culture()
    {
        return view('culture');
    }

    public function politik()
    {
        return view('politics');
    }

    public function tech()
    {
        return view('tech');
    }
}
