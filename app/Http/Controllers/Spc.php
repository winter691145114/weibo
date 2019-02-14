<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Spc extends Controller
{
    public function home()
    {
    	return view('sp.home');
    }

    public function about()
    {
    	return view('sp.about');
    }

    public function help()
    {
    	return view('sp.help');
    }
}
