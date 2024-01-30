<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function password(){
        return view('admin.auth.change_password');
    }

    public function passwordUpdate(Request $request){
        $request->validate([
            'current_password'=>'required',
            'password'=>'required|confirmed',
            'password_confirmation'=>'required'
        ]);
        if(Hash::check($request->old_password, Auth()->user()->password)){
            User::find(Auth()->user()->id)->update([
               'password'=>bcrypt($request->password)
            ]);
            return back()->with('password','password updated');
        }
        else{
            return back()->with('failed','Your old password not match!');
        }
    }
}
