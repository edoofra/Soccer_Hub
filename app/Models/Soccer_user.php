<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Soccer_user extends Model
{
    use HasFactory;
    
     // Lo linko alla tabella utente
     protected $table = 'utente';
     protected $timestamps = false;
 
     public function giocatori(){
         return this->hasMany('Laravel\giocatore');
     }
 
     public function squadre(){
         return this->hasMany('Laravel\squadra');
     }
}