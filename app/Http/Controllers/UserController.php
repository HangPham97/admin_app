<?php

namespace App\Http\Controllers;
use Auth;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class UserController extends Controller
{

    public function __construct() {
        $this->middleware('auth');
    }
    public function getIndex(){
        $id = Auth::user()->id;
        $user = User::find($id);
        return view('user',compact('user'));
    }
    public function updateUser(Request $request,$id){
        $user = [];
        $user['name'] = $request['name'];
        $user['first_name'] = $request['first_name'];
        $user['last_name'] = $request->last_name;
        $user['address'] = $request->adress;
        $user['country'] = $request->country;
        $user['postal_code'] = $request->postal_code;
        $user['email'] = $request['email'];
        $user['city'] = $request->city;
        $user['about_me'] = $request->about_me;
        if ($request->hasFile('image')) {
            $img = $request->file('image')->getClientOriginalName();
            $request->image->move('images', $img);
            $user['image'] = $img;
        }
        User::where('id', $id)->update($user);
        return redirect('user');
    }
}
