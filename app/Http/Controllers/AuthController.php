<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function goToAuthentication(){
        return view('Auth.Login');
    }

    public function goToRegistration(){
        return view('Auth.Register');
    }
    
}
