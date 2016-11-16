<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display home page.
     */
    public function home()
    {
        return view('home');
    }
}
