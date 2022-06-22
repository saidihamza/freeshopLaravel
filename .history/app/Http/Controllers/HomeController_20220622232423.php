<?php
namespace App\Http\Controllers;

use App\Models\accessoires;
use App\Models\products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Homecontroller extends Controller
{
    public function index()
    {
        $data = products::all();
        $data1 = accessoires::all();
        return view("home", compact("data","data1"));
    }
    public function redirects()
    {
        $data = products::all();
        $usertype = Auth::user()->usertype;

        if ($usertype == '1') {
            return view('admin.adminhome');
        } else {
            return view('home',compact('data'));
        }
    }
}
