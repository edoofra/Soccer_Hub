<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function goHome(){
        session_start();
        if(isset($_SESSION['logged'])) {
            return view('HomePage')->with('logged',true)->with('loggedName', $_SESSION['loggedName']);
        } else {
            return view('HomePage')->with('logged',false);
        }
    }
}
