<?php

namespace App\Http\Controllers;

use App\Models\accessoires;
use App\Models\products;
use App\Models\reservation;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function user()
    {
        $data = user::all();
        return view("admin.users", compact("data"));
    }
    public function deleteuser($id)
    {
        $data = user::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function products()
    {
        $data = products::all();
        return view("admin.products", compact('data'));
    }
    public function deleteproduct($id)
    {
        $data = products::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function uploadproducts(Request $request)
    {
        $data = new products;
        $data->title = $request->title;
        $data->price = $request->price;
        $image = $request->image;
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->image->move('productimage', $imagename);
        $data->image = $imagename;
        $data->save();
        return redirect()->back();
    }
    public function updateview($id)
    {
        $data = products::find($id);
        return view("admin.updateview", compact("data"));
    }
    
    public function updateviewAcce($id)
    {
        $data = accessoires::find($id);
        return view("admin.updateviewAcce", compact("data"));
    }
    public function update(Request $request, $id)
    {
        $data = products::find($id);
        $data->title = $request->title;
        $data->price = $request->price;
        $image = $request->image;
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->image->move('productimage', $imagename);
        $data->image = $imagename;
        $data->save();
        return redirect()->back();
    }
    public function reservation()
    {
        $data = reservation::all();
        return view("reservation", compact('data'));
    }
    public function uploadreservation(Request $request)
    {
        $data = new reservation;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = $request->password;
        $data->phone = $request->phone;
        $data->save();
        return redirect()->back();
    }
    public function updatereservation()
    {
        $data = reservation::all();
        return view('admin.updatereservation', compact('data'));
    }
    public function deleteperson($id)
    {
        $data = reservation::find($id);
        $data->delete();
        return redirect()->back();

    }
    public function uploadaccessoirs(Request $request)
    {
        $data1 = new accessoires;
        $data1->title = $request->title;
        $data1->price = $request->price;
        $image = $request->image;
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->image->move('accessoiresimage', $imagename);
        $data1->image = $imagename;
        $data1->save();
        return redirect()->back();
    }
    public function accessoires(){
        $data1=accessoires::all();
        return view('admin.accessoires',compact("data11"));
    }
    public function deleteAccessoires($id)
    {
        $data1=accessoires::find($id);
        $data1->delete();
        return redirect()->back();
    }
    public function updateAccessoires(Request $request,$id)
    {
        $da = accessoires::find($id);
        $da->title = $request->title;
        $da->price = $request->price;
        $image = $request->image;
        $image = $request->image;
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->image->move('accessoiresimage', $imagename);
        $da->image = $imagename;
        $da->save();
        return redirect()->back();

    }

    
}
