<?php

namespace App\Http\Controllers\Auth;

use Exception;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request){

        $request->validate([
            'username' =>  'required',
            'password' =>  'required'
        ]);

        if(Auth::attempt($request->only('username','password'))) {
             return redirect('/')->with('username',$request->username);
        }

        return redirect('login')->withErrors(["error"  => 'Invalid Credentials']);
    }

    public function register(Request $request) {

        // validation
        $request->validate([
            'username'  => 'required|unique:users',
            'email'     => 'required|unique:users|email',
            'password'  => 'required|required_with:confirmPassword|same:confirmPassword',
            'confirmPassword'  => 'required'
        ]);

        // save in database
       $user = new User();
       $user->name      = '';
       $user->username  = strtolower($request->username);
       $user->email     = strtolower($request->email);
       $user->password  = Hash::make($request->password);

        try {
            $res = $user->save();
            if($res){
                return redirect('login');

            }
        }
        catch(Exception $e){
            echo $e->getMessage();
        }
    }

    public function logout(){
        Auth::logout();
        return redirect('login');
    }

}
