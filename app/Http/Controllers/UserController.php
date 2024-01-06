<?php

namespace App\Http\Controllers;

use App\models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    function login()
    {
        return view('login');
        
    }

    function register()
    {

        return view('register');
        
    }

    function register_user(Request $request)
    {

        $user = new User;
        $user->username = $request->input('username');
        $user->password = Hash::make($request->input('password'));
        $user->save();
        
        return view('register');
        
    }


    public function check_login(Request $request)
    {
        $credentials = $request->only('username', 'password');
       
        if (Auth::attempt($credentials)) {
            return redirect()->intended('/dashboard');
        } else {
            return redirect()->back()->with('error', 'Invalid user ID or password');
        }
        
    }

    
    function dashboard()
    {
        
        return view('dashboard');
        
    }
    
}
