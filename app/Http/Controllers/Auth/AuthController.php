<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request){
        dd($request->all());
    }

    public function register(Request $request) {
        // dd($request->all());
        // validation

        $request->validate([
            'username'  => 'required',
            'email'     => 'required|unique:users|email',
            'password'  => 'required|required_with:conformPassword|same:conformPassword',
            'conformPassword'  => 'required'
        ]);

        // save in database
       $user = new User();
       $user->name      = $request->name;
       $user->username  = $request->username;
       $user->email     = $request->email;
       $user->password  = Hash::make($request->password);

       $res = $user->save();

        if($res){
            return redirect('/');
        }
    }

    public function logout(){

    }

}
