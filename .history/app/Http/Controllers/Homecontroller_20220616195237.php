<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Homecontroller extends Controller
{
    public function index()
    {
        return view("home");
    }
    public function redirects()
    {
        return view("home");
    }
}
