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

    public function listSquadre($utente) {
        $squadre = Squadra::where('id_utente',$utente)->get();
        return $squadre;
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

    public function editGiocatore($nome,$cognome,$id_squadra,$ruolo){
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



}
