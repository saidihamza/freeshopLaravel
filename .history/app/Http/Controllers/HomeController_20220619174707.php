<?php

namespace App\Http\Controllers;

use App\Models\products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Homecontroller extends Controller
{
    public function index()
    {
        $data = products::all();
        return view("home", compact("data"));
    }
    public function redirects()
    {
        $data = products::all();
        $usertype = Auth::user()->usertype;

        if ($usertype == '1') {
            return view('admin.adminhome');
        } else {
            return view('home');
        }
    }
}
