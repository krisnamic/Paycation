<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('Hotels.index');
    }

    public function aboutUs()
    {
        return view('user.aboutUs');
    }
}
