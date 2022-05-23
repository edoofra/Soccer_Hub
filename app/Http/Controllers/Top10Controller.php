<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataLayer;

class Top10Controller extends Controller
{
    public function indexAttaccanti(){
        $dl = new DataLayer;
        session_start();

        $listaGiocatori = $dl->listAttaccantiTop();
        if(isset($_SESSION['logged'])) {
            return view('top10.Top_A')->with('listaGiocatori',$listaGiocatori)->with('logged',true)->with('loggedName', $_SESSION['loggedName']);
        }
        else{
            return view('top10.Top_A')->with('listaGiocatori',$listaGiocatori)->with('logged',false);
        }
    }

    public function indexCentrocampisti(){
        $dl = new DataLayer;
        session_start();
        
        $listaGiocatori = $dl->listCentrocampistiTop();
        if(isset($_SESSION['logged'])) {
            return view('top10.Top_C')->with('listaGiocatori',$listaGiocatori)->with('logged',true)->with('loggedName', $_SESSION['loggedName']);
        }
        else{
            return view('top10.Top_C')->with('listaGiocatori',$listaGiocatori)->with('logged',false);
        }
    }

    public function indexDifensori(){
        $dl = new DataLayer;
        session_start();
        
        $listaGiocatori = $dl->listDifensoriTop();
        if(isset($_SESSION['logged'])) {
            return view('top10.Top_D')->with('listaGiocatori',$listaGiocatori)->with('logged',true)->with('loggedName', $_SESSION['loggedName']);
        }
        else{
            return view('top10.Top_D')->with('listaGiocatori',$listaGiocatori)->with('logged',false);
        }
    }
}
