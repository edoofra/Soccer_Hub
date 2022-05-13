<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataLayer {
    use HasFactory;

    //SEZIONE OPERAZIONI SU GIOCATORE
    public function listGiocatori($utente) {
        $giocatori = giocatore::where('id_utente',$utente)->get();
        return $giocatori;
    }

    public function findGiocatoreById($id){
        return giocatore::find($id);
    }

    public function deleteGiocatore($id){
        giocatore::find($id)->delete();
    }

    public function addGiocatore($nome,$cognome,$id_squadra,$id_utente,$ruolo){
        $giocatore = new giocatore;
        $giocatore->nome = $nome;
        $giocatore->cognome = $cognome;
        $giocatore->id_squadra = $id_squadra;
        $giocatore->id_utente = $id_utente;
        $giocatore->ruolo = $ruolo;
        $giocatore->save();
        //chiedere al profe se ha senso generare dei valori random e come fare
    }

    public function editGiocatore($id,$nome,$cognome,$id_squadra,$ruolo){
        $giocatore = giocatore::find($id);
        $giocatore->nome = $nome;
        $giocatore->cognome = $cognome;
        $giocatore->id_squadra = $id_squadra;
        $giocatore->ruolo = $ruolo;
        $giocatore->save();
    }

    public function findGiocatoreBySquadraIdAndUserId($id_squadra,$id_utente){
        $giocatori = giocatore::where('id_squadra',$id_squadra)->where('id_utente',$id_utente)->get();
        if(count($giocatori)!=0){
            return $giocatori; //lui qua mette return true ma meh
        }
        else {
            return false;
        }
    }

    public function findGiocatoreByUserId($id_utente){
        $giocatori = giocatore::where('id_utente',$id_utente)->get();
        if(count($giocatori)!=0){
            return $giocatori; //lui qua mette return true ma meh
        }
        else {
            return false;
        }
    }

    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    //SEZIONE OPERAZIONI SU SQUADRA
    public function listSquadre($utente) {
        $squadre = Squadra::where('id_utente',$utente)->get();
        return $squadre;
    }

    public function findSquadraById($id){
        return Squadra::find($id);
    }

    public function deleteSquadra($id){
        Squadra::find($id)->delete();
    }

    public function addSquadra($nome,$campionato,$id_utente){
        $squadra = new squadra;
        $squadra->nome = $nome;
        $squadra->id_utente = $id_utente;
        $squadra->campionato = $campionato;
        $squadra->save();
    }

    public function editSquadra($id,$nome){
        $squadra = Squadra::find($id);
        $squadra->nome = $nome;
        $squadra->save();
    }

    public function findSquadraByUserId($id_utente){
        $squadre = Squadra::where('id_utente',$id_utente)->get();
        if(count($squadre)!=0){
            return $squadre; //lui qua mette return true ma meh
        }
        else {
            return false;
        }
    }

    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    //SEZIONE OPERAZIONI SU UTENTE
    public function validUser($username, $password) {
        // prendo solamente il campo password di Soccer_user
        $users = Soccer_user::where('username',$username)->get(['password']);
        if(count($users) == 0){
            return false;
        }
        // calcolo l'MD5 della password in modo da poterla confrontare con quelle salvate
        // confronto con il primo elemento dell'array dato che ci sarà un solo utente con quell'username
        return (md5($password) == ($users[0]->password));
    }
    
    public function addUser($username, $password, $email) {
        $user = new Soccer_user();
        $user->username = $username;
        $user->password = md5($password);
        $user->email = $email;
        $user->save();
    }
    
    public function getUserID($username) {
        $users = Soccer_user::where('username',$username)->get(['id']);
        return $users[0]->id;
    }
}
