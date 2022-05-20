<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataLayer;

class Top10Controller extends Controller
{
    public function indexAttaccanti(){
        $dl = new DataLayer;
        $listaGiocatori = $dl->listAttaccantiTop();
        return view('top10.Top_A')->with('listaGiocatori',$listaGiocatori);
    }
}
