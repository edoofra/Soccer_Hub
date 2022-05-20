<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Top10Controller;

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

Route::get('/home', function () {
    return view('HomePage');
});

//rotte per la sezione dei top accessibile anche senza login
Route::get('/top_A',[Top10Controller::class,'indexAttaccanti'])->name("attaccantiTop.index");
Route::get('/top_C',[Top10Controller::class,'indexCentrocampisti'])->name("centrocampistiTop.index");
Route::get('/top_D',[Top10Controller::class,'indexDifensori'])->name("difensoriTop.index");