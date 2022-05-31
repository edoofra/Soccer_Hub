<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlayerController extends Controller
{
    public function goToAggiuntaGiocatore(){
        session_start();
        if(isset($_SESSION['logged'])) {
            return view('Players.addNewPlayer')->with('logged',true)->with('loggedName', $_SESSION['loggedName']);
        } else {
            return view('Players.addNewPlayer')->with('logged',false);
        }
        
    }

    public function checkNomeCognome(Request $request){
        $dl = new DataLayer();
        if($dl->findGiocatoreByName($request->nome,$request->cognome)){
            return response()->json(['error' => 'Giocatore già presente']);
        } else {
            return response()->json(['success' => 'Giocatore non presente']);
        }
    }
}
