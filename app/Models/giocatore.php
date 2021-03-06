<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class giocatore extends Model
{
    use HasFactory;

    // Lo linko alla tabella giocatore
    protected $table = 'giocatore';
    public $timestamps = false;

    public function user(){
        return this->belongsTo('App\Models\Soccer_user');
    }
}
