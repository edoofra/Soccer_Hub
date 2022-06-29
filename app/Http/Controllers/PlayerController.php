<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\DataLayer;

class PlayerController extends Controller
{
    public function goToAggiuntaGiocatore(){
        //session_start();
        if(isset($_SESSION['logged'])) {
            return view('Players.addNewPlayer')->with('logged',true)->with('loggedName', $_SESSION['loggedName']);
        } else {
            return view('Players.addNewPlayer')->with('logged',false);
        }  
    }

    public function aggiungiGiocatore(Request $request) {
        //session_start();
        $dl = new DataLayer();
        $user_id = $dl->getUserId($_SESSION['loggedName']);
        $dl->addGiocatore($request->input('nome'), $request->input('cognome'), $request->input('età'), $request->input('squadra'),$user_id, $request->input('ruolo'));
        return Redirect::to(route('goToDashboard'));
    }

    public function checkNomeCognome(Request $request){
        $dl = new DataLayer();
        if($dl->findGiocatoreByName($request->nome,$request->cognome)){
            return response()->json(['error' => 'Giocatore già presente']);
        } else {
            return response()->json(['success' => 'Giocatore non presente']);
        }
    }

    public function goToDashboard(){
        //session_start();
        $dl = new DataLayer();
        $attaccanti = $dl->listAttaccantiByUserID($dl->getUserId($_SESSION['loggedName']));
        $centrocampisti = $dl->listCentrocampistiByUserID($dl->getUserId($_SESSION['loggedName']));
        $difensori = $dl->listDifensoriByUserID($dl->getUserId($_SESSION['loggedName']));
        return view('Players.userHomePage')->with('logged',true)->with('loggedName', $_SESSION['loggedName'])->with('listaAttaccanti', $attaccanti)
                ->with('listaCentrocampisti', $centrocampisti)->with('listaDifensori', $difensori); 
    }

    public function goToDeletePlayerPage($id){
        //session_start();
        $dl = new DataLayer();
        $giocatore = $dl->findGiocatoreById($id);
        return view('Players.deletePlayer')->with('logged',true)->with('loggedName', $_SESSION['loggedName'])->with('giocatore',$giocatore);
    }

    public function deletePlayer($id){
        //session_start();
        $dl = new DataLayer();
        $dl->deletePlayer($id);
        $attaccanti = $dl->listAttaccantiByUserID($dl->getUserId($_SESSION['loggedName']));
        $centrocampisti = $dl->listCentrocampistiByUserID($dl->getUserId($_SESSION['loggedName']));
        $difensori = $dl->listDifensoriByUserID($dl->getUserId($_SESSION['loggedName']));
        return view('Players.userHomePage')->with('logged',true)->with('loggedName', $_SESSION['loggedName'])->with('listaAttaccanti', $attaccanti)
                ->with('listaCentrocampisti', $centrocampisti)->with('listaDifensori', $difensori); 
    }

    public function studyPlayer($id){
        //session_start();
        $dl = new DataLayer();
        $valori = $dl->creaRiassuntoValori($id);
        $giocatore = $dl->findGiocatoreById($id);
        return view('Players.studyPlayer')->with('logged',true)->with('loggedName', $_SESSION['loggedName'])->with('giocatore',$giocatore)->with('valori',$valori);
    }

    public function goToEditPlayer($id){
        $dl = new DataLayer();
        $giocatore = $dl->findGiocatoreById($id);
        return view('Players.editPlayer')->with('logged',true)->with('loggedName', $_SESSION['loggedName'])->with('giocatore',$giocatore);
    }

    public function editGiocatore($id,Request $request){
        $dl = new DataLayer();
        $dl->editGiocatore($id,$request->input('squadra'), $request->input('ruolo'),
                            $request->input('partite'),$request->input('gol'),$request->input('assist'),$request->input('cleansheet'),$request->input('ammonizioni'),
                            $request->input('espulsioni'),$request->input('tiriTentati'),$request->input('tiriPorta'),$request->input('passaggiTentati'),$request->input('passaggiCompletati'),
                            $request->input('contrastiTentati'),$request->input('contrastiCompletati'),$request->input('stipendio'),$request->input('valore'),$request->input('scadenza'));
        return Redirect::to(route('goToDashboard'));

    }
}
