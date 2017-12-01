<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $title = 'Philippine Ulama Congress Organization, Inc.';

        return view('welcome', compact('title'));
    }

    public function about()
    {
        $title = 'About Us';

        return view('about', compact('title'));
    }
}
