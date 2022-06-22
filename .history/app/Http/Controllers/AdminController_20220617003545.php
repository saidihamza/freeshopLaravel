<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function user()
    {
        $data=user::all();
        return view("admin.users",compact(data))
    }
}
