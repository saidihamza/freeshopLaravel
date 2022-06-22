<?php
namespace App\Http\Controllers;
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
    public function update(Request $request ,$id)
    {
        $data=products::find($id);
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
        return view("reservation",compact('data'));
    }
    public function uploadreservation(Request $request)
    { 
        $data=new reservation;
        $data->name=$request->name;
        $data->email=$request->email;
        $data->password=$request->password;
        $data->phone=$request->phone;
        $data->save();
        return redirect()->back();


    }
    public function updatereservation($id)
    {
        $data=reservation::
    }
}
