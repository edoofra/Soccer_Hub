<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataLayer;


class AuthController extends Controller
{
    public function goToAuthentication(){
        return view('Auth.Login');
    }

    public function goToRegistration(){
        return view('Auth.Register');
    }

    public function login(Request $request) {
        session_start();
        $dl = new DataLayer();
        if ($dl->validUser($request->input('username'), $request->input('password'))) 
        {
            $_SESSION['logged'] = true;
            $_SESSION['loggedName'] = $request->input('username');
            return Redirect::to(route('index'));

        }
       
        //return view('auth.authErrorPage');
    }
    
}
