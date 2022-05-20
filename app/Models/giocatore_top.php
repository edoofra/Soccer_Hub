<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class giocatore_top extends Model
{
    use HasFactory;

     // Lo linko alla tabella giocatore top
     protected $table = 'Giocatore_top';
     public $timestamps = false;
 
}
