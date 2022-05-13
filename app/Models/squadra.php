<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class squadra extends Model
{
    use HasFactory;

     // Lo linko alla tabella squadra
     protected $table = 'Squadra';
     protected $timestamps = false;
 
     public function user(){
         return this->belongsTo('App\Models\Soccer_user');
     }
 
     public function giocatori(){
         return this->hasMany('App\Models\giocatore');
     }
}
