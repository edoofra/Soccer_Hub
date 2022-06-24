<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Model;
use Faker\Factory as Faker;

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

    public function createNumberBetween($min, $max){
        $number = random_int($min, $max);
        return $number;
    }

    //return a casual date after today using faker
    public function createDate(){
        //use faker to create a fake date
        $faker = Faker::create();
        $date = $faker->dateTimeBetween('now', '+4 year');
         return $date;
    }

    public function createValuesForAttaccante(){
        $values = array();
        $values['partite'] = $this->createNumberBetween(10,40);
        $values['gol'] = $this->createNumberBetween(0,2*$values['partite']);
        $values['assist'] = $this->createNumberBetween(0,0.8*$values['gol']);
        $values['clean_sheets'] = 1;
        $values['ammonizioni'] = $this->createNumberBetween(0,0.2*$values['partite']);
        $values['espulsioni'] = $this->createNumberBetween(0,0.2*$values['partite']);
        $values['tiri_tentati'] = $this->createNumberBetween($values['gol'],15*$values['partite']);
        $values['tiri_in_porta'] = $this->createNumberBetween($values['gol'],$values['tiri_tentati']);
        $values['passaggi_tentati'] = $this->createNumberBetween($values['assist'],20*$values['partite']);
        $values['passaggi_completati'] = $this->createNumberBetween($values['assist'],$values['passaggi_tentati']);
        $values['contrasti_tentati'] = $this->createNumberBetween($values['partite'],12*$values['partite']);
        $values['contrasti_completati'] = $this->createNumberBetween(0.2*$values['contrasti_tentati'],0.8*$values['contrasti_tentati']);
        $values['stipendio'] = $this->createNumberBetween(0.3,30);
        $values['valore'] = $this->createNumberBetween(0.5,150);
        $values['data_scadenza'] = $this->createDate();
        return $values;
    }

    public function createValuesForCentrocampista(){
        $values = array();
        $values['partite'] = $this->createNumberBetween(10,40);
        $values['gol'] = $this->createNumberBetween(0,0.5*$values['partite']);
        $values['assist'] = $this->createNumberBetween(0,2*$values['partite']);
        $values['clean_sheets'] = 1;
        $values['ammonizioni'] = $this->createNumberBetween(0,0.5*$values['partite']);
        $values['espulsioni'] = $this->createNumberBetween(0,0.3*$values['partite']);
        $values['tiri_tentati'] = $this->createNumberBetween($values['gol'],5*$values['partite']);
        $values['tiri_in_porta'] = $this->createNumberBetween($values['gol'],$values['tiri_tentati']);
        $values['passaggi_tentati'] = $this->createNumberBetween($values['assist'],80*$values['partite']);
        $values['passaggi_completati'] = $this->createNumberBetween($values['assist'],$values['passaggi_tentati']);
        $values['contrasti_tentati'] = $this->createNumberBetween($values['partite'],15*$values['partite']);
        $values['contrasti_completati'] = $this->createNumberBetween(0.4*$values['contrasti_tentati'],0.8*$values['contrasti_tentati']);
        $values['stipendio'] = $this->createNumberBetween(0.3,30);
        $values['valore'] = $this->createNumberBetween(0.5,150);
        $values['data_scadenza'] = $this->createDate();
        return $values;
    }

    public function createValuesForDifensore(){
        $values = array();
        $values['partite'] = $this->createNumberBetween(10,40);
        $values['gol'] = $this->createNumberBetween(0,0.2*$values['partite']);
        $values['assist'] = $this->createNumberBetween(0,0.5*$values['partite']);
        $values['clean_sheets'] = $this->createNumberBetween(0,0.6*$values['partite']);
        $values['ammonizioni'] = $this->createNumberBetween(0,0.6*$values['partite']);
        $values['espulsioni'] = $this->createNumberBetween(0,0.3*$values['partite']);
        $values['tiri_tentati'] = $this->createNumberBetween($values['gol'],5*$values['partite']);
        $values['tiri_in_porta'] = $this->createNumberBetween($values['gol'],$values['tiri_tentati']);
        $values['passaggi_tentati'] = $this->createNumberBetween($values['assist'],40*$values['partite']);
        $values['passaggi_completati'] = $this->createNumberBetween($values['assist'],$values['passaggi_tentati']);
        $values['contrasti_tentati'] = $this->createNumberBetween($values['partite'],25*$values['partite']);
        $values['contrasti_completati'] = $this->createNumberBetween(0.4*$values['contrasti_tentati'],$values['contrasti_tentati']);
        $values['stipendio'] = $this->createNumberBetween(0.3,30);
        $values['valore'] = $this->createNumberBetween(0.5,150);
        $values['data_scadenza'] = $this->createDate();
        return $values;
    }

    public function createValuesForGiocatore($ruolo){
        $values = array();
        switch ($ruolo){
            case 'D':
                $values = $this->createValuesForDifensore();
                break;
            case 'C':
                $values = $this->createValuesForCentrocampista();
                break;
            case 'A':
                $values = $this->createValuesForAttaccante();
                break;
        }
        return $values;
    }

    public function addGiocatore($nome,$cognome,$età,$squadra,$id_utente,$ruolo){
        $giocatore = new giocatore;
        $giocatore->nome = $nome;
        $giocatore->cognome = $cognome;
        $giocatore->età = $età;
        $giocatore->squadra = $squadra;
        $giocatore->user_id = $id_utente;
        $giocatore->ruolo = $ruolo;
        $values = $this->createValuesForGiocatore($ruolo);
        $giocatore->partite_giocate = $values['partite'];
        $giocatore->gol = $values['gol'];
        $giocatore->assist = $values['assist'];
        $giocatore->clean_sheet = $values['clean_sheets'];
        $giocatore->ammonizioni = $values['ammonizioni'];
        $giocatore->espulsioni = $values['espulsioni'];
        $giocatore->tiri_tentati = $values['tiri_tentati'];
        $giocatore->tiri_in_porta = $values['tiri_in_porta'];
        $giocatore->passaggi_tentati = $values['passaggi_tentati'];
        $giocatore->passaggi_completati = $values['passaggi_completati'];
        $giocatore->contrasti_tentati = $values['contrasti_tentati'];
        $giocatore->contrasti_vinti = $values['contrasti_completati'];
        $giocatore->stipendio = $values['stipendio'];
        $giocatore->valore_mercato = $values['valore'];
        $giocatore->scadenza_contratto = $values['data_scadenza'];
        $giocatore->save();
    }

    public function editGiocatore($id,$nome,$cognome,$id_squadra,$ruolo){
        $giocatore = giocatore::find($id);
        $giocatore->nome = $nome;
        $giocatore->cognome = $cognome;
        $giocatore->id_squadra = $id_squadra;
        $giocatore->ruolo = $ruolo;
        $giocatore->save();
    }

    public function addStatisticheGiocatore($id){
        $giocatore = giocatore::find($id);
        $ruolo = $giocatore->ruolo;
        $values = $this->createValuesForGiocatore($ruolo);
        $giocatore->partite_giocate = $values['partite'];
        $giocatore->gol = $values['gol'];
        $giocatore->assist = $values['assist'];
        $giocatore->clean_sheet = $values['clean_sheets'];
        $giocatore->ammonizioni = $values['ammonizioni'];
        $giocatore->espulsioni = $values['espulsioni'];
        $giocatore->tiri_tentati = $values['tiri_tentati'];
        $giocatore->tiri_in_porta = $values['tiri_in_porta'];
        $giocatore->passaggi_tentati = $values['passaggi_tentati'];
        $giocatore->passaggi_completati = $values['passaggi_completati'];
        $giocatore->contrasti_tentati = $values['contrasti_tentati'];
        $giocatore->contrasti_vinti = $values['contrasti_completati'];
        $giocatore->stipendio = $values['stipendio'];
        $giocatore->valore_mercato = $values['valore'];
        $giocatore->scadenza_contratto = $values['data_scadenza'];
        $giocatore->save();

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

    public function findGiocatoreByName($nome,$cognome){
        $giocatori = giocatore::where('nome',$nome)->where('cognome',$cognome)->get();
        if(count($giocatori)!=0){
            return true;
        }
        else {
            return false;
        }
    }

    public function listAttaccantiByUserID($id_utente){
        $giocatori = giocatore::where('user_id',$id_utente)->where('ruolo','A')->get();
        return $giocatori;
    }

    public function listCentrocampistiByUserID($id_utente){
        $giocatori = giocatore::where('user_id',$id_utente)->where('ruolo','C')->get();
        return $giocatori;
    }

    public function listDifensoriByUserID($id_utente){
        $giocatori = giocatore::where('user_id',$id_utente)->where('ruolo','D')->get();
        return $giocatori;
    }

    public function deletePlayer($id){
        giocatore::find($id)->delete();
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

    public function checkUsername($username) {
        $users = Soccer_user::where('username',$username)->get(['id']);
        if(count($users) == 0){
            return false;
        }
        else {
            return true;
        }
    }

    public function listUsers() {
        $users = Soccer_user::all();
        return $users;
    }

    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    //SEZIONE OPERAZIONI SU GIOCATORE TOP
    public function listAttaccantiTop() {
        $attaccanti = giocatore_top::where('ruolo','A')->orderBy('rank')->get();
        return $attaccanti;
    }

    public function listCentrocampistiTop() {
        $centrocampisti = giocatore_top::where('ruolo','C')->orderBy('rank')->get();
        return $centrocampisti;
    }

    public function listDifensoriTop() {
        $difensori = giocatore_top::where('ruolo','D')->orderBy('rank')->get();
        return $difensori;
    }
    
}
