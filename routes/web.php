<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ActividadPaso1Controller;
use App\Http\Controllers\ActividadPaso2Controller;
use App\Http\Controllers\CompetenciaController;
use App\Http\Controllers\RapsController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::resource('actividad_paso_1' , ActividadPaso1Controller::class);
Route::resource('actividad_paso_2' , ActividadPaso2Controller::class);


//Rutas JSON
Route::resource('programas' , \App\Http\Controllers\ProgramaController::class);
Route::resource('competencias' , CompetenciaController::class);
Route::resource('raps' , RapsController::class);

