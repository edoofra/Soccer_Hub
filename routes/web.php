<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Top10Controller;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\LangController;
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








//rotte per il controllo dei campi tramite JS e ajax
Route::get('/ajaxControlNomeCognome',[PlayerController::class,'checkNomeCognome'])->name('checkNomeCognome');

Route::middleware(['authCustom','lang'])->group(function () {
    //rotte per la gestione dei giocatori
    Route::get('/addPlayerForm',[PlayerController::class,'goToAggiuntaGiocatore'])->name('addPlayerForm');
    Route::post('/addPlayer',[PlayerController::class,'AggiungiGiocatore'])->name('addPlayer');
    Route::get('/editPlayerForm/{id}',[PlayerController::class,'goToEditPlayer'])->name('editPlayerForm');
    Route::post('/editPlayer/{id}',[PlayerController::class,'editGiocatore'])->name('editPlayer');
    Route::get('/goToDashboard',[PlayerController::class,'goToDashboard'])->name('goToDashboard');
    Route::get('/deletePlayerPage/{id}',[PlayerController::class,'goToDeletePlayerPage'])->name('goToDeletePlayerPage');
    Route::get('/deletePlayer/{id}',[PlayerController::class,'deletePlayer'])->name('deletePlayer');
    Route::get('/studyPlayer/{id}',[PlayerController::class,'studyPlayer'])->name('studyPlayer');
});

Route::middleware(['lang'])->group(function () {
    Route::get('/',[FrontController::class,'goHome'])->name('goHome');
    Route::get('/auth',[AuthController::class,'goToAuthentication'])->name('auth');
    Route::get('/register',[AuthController::class,'goToRegistration'])->name('registr');
    Route::post('/login',[AuthController::class,'login'])->name('login');
    Route::post('/registration',[AuthController::class,'registration'])->name('registration');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/ajaxRegistration', [AuthController::class, 'ajaxCheckUsername'])->name('ajaxCheckUsername');


    //rotte per la sezione dei top accessibile anche senza login
    Route::get('/top_A',[Top10Controller::class,'indexAttaccanti'])->name("attaccantiTop.index");
    Route::get('/top_C',[Top10Controller::class,'indexCentrocampisti'])->name("centrocampistiTop.index");
    Route::get('/top_D',[Top10Controller::class,'indexDifensori'])->name("difensoriTop.index");

    Route::get('/lang/{lang}/',[LangController::class,'changeLanguage'])->name('setLang');
});