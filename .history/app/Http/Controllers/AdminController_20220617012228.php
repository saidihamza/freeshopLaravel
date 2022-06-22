<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function user()
    {
        $data=user::all();
        return view("admin.users",compact("data"));
    }
    public function deleteuser($id)
    {
        $data=user::all();
        return view("admin.users",compact("data"));
    }
}
