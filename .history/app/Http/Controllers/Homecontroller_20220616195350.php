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
        $usertype=Auth::user()->usertype;
        if($usertype=="1")
    }
}
