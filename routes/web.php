<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ActividadPaso1Controller;
use App\Http\Controllers\ActividadPaso2Controller;
use App\Http\Controllers\ActividadPaso3Controller;
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

//Rutas para paso a paso  actividad

Route::resource('actividad_paso_1' , ActividadPaso1Controller::class);
Route::resource('actividad_paso_2' , ActividadPaso2Controller::class);
Route::resource('actividad_paso_3' , ActividadPaso3Controller::class);
Route::resource('actividad_paso_3_alt' , \App\Http\Controllers\ActividadPaso3AltController::class);
Route::resource('actividad_paso_4' , \App\Http\Controllers\ActividadPaso4Controller::class);
Route::resource('actividad_paso_5' , \App\Http\Controllers\ActividadPaso5Controller::class);
Route::resource('actividad_paso_6' , \App\Http\Controllers\ActividadPaso6Controller::class);

//Rutas para actividad
Route::resource('actividad' , \App\Http\Controllers\ActividadController::class);


//Rutas de usuario y Login
Route::resource('user' , \App\Http\Controllers\UserController::class);
Route::resource('login' , \App\Http\Controllers\LoginController::class);

//Rutas JSON
Route::resource('programas' , \App\Http\Controllers\ProgramaController::class);
Route::resource('competencias' , CompetenciaController::class);
Route::resource('raps' , RapsController::class);

//rutas prueba
Route::get('nultiselect' , function (){
    return view('multiselect');
});
