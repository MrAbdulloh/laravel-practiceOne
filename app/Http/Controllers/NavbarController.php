<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavbarController extends Controller
{
    public function index()
    {
        return view('navbar.index');
    }

    public function about()
    {
        return view('navbar.about');
    }

    public function service()
    {
        return view('navbar.service');
    }

    public function contact()
    {
        return view('navbar.contact');
    }
}
