<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\DataLayer;

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

    public function aggiungiGiocatore(Request $request) {
        session_start();
        $dl = new DataLayer();
        $user_id = $dl->getUserId($_SESSION['loggedName']);
        $dl->addGiocatore($request->input('nome'), $request->input('cognome'), $request->input('età'), $request->input('squadra'),$user_id, $request->input('ruolo'));
        return Redirect::to(route('goHome'));
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
