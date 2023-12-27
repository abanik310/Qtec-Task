<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function index()
    {
        //echo "anik";exit;
        return view('login');
        
    }

    function register()
    {
        //echo "anik";exit;
        return view('register');
        
    }
}
