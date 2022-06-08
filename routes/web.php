<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Top10Controller;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PlayerController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/',[FrontController::class,'goHome'])->name('goHome');
Route::get('/auth',[AuthController::class,'goToAuthentication'])->name('auth');
Route::get('/register',[AuthController::class,'goToRegistration'])->name('registr');
Route::post('/login',[AuthController::class,'login'])->name('login');
Route::post('/registration',[AuthController::class,'registration'])->name('registration');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

//rotte per la sezione dei top accessibile anche senza login
Route::get('/top_A',[Top10Controller::class,'indexAttaccanti'])->name("attaccantiTop.index");
Route::get('/top_C',[Top10Controller::class,'indexCentrocampisti'])->name("centrocampistiTop.index");
Route::get('/top_D',[Top10Controller::class,'indexDifensori'])->name("difensoriTop.index");

//rotte per la gestione dei giocatori
Route::get('/addPlayerForm',[PlayerController::class,'goToAggiuntaGiocatore'])->name('addPlayerForm');
Route::post('/addPlayer',[PlayerController::class,'AggiungiGiocatore'])->name('addPlayer');


//rotte per il controllo dei campi tramite JS e ajax
Route::get('/ajaxControlNomeCognome',[PlayerController::class,'checkNomeCognome'])->name('checkNomeCognome');
