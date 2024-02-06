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


//Rutas para actualizar paso a paso
Route::resource('update_paso_1' , \App\Http\Controllers\UpdatePaso1Controller::class);
Route::resource('update_paso_2' , \App\Http\Controllers\UpdatePaso2Controller::class);
Route::resource('update_paso_3' , \App\Http\Controllers\UpdatePaso3Controller::class);
Route::resource('update_paso_4' , \App\Http\Controllers\UpdatePaso4Controller::class);
Route::resource('update_paso_5' , \App\Http\Controllers\UpdatePaso5Controller::class);

//Rutas para actividad
Route::resource('actividad' , \App\Http\Controllers\ActividadController::class);


//Rutas de usuario y Login
Route::resource('user' , \App\Http\Controllers\UserController::class);
Route::resource('login' , \App\Http\Controllers\LoginController::class);
Route::get('logout' , [\App\Http\Controllers\LoginController::class , "logout"]);

//Rutas varias modulo 1:
Route::get('/' , [\App\Http\Controllers\VariosModulo1Controller::class , "principal"]);

//Rutas JSON
Route::resource('programas' , \App\Http\Controllers\ProgramaController::class);
Route::resource('competencias' , CompetenciaController::class);
Route::resource('raps' , RapsController::class);


//RUTAS MODULO 2
Route::any('catalogo', [\App\Http\Controllers\CatalogController::class , "index"]);
Route::get('details/{idactividad}', [\App\Http\Controllers\CatalogController::class , "show"]);

//rutas prueba
Route::get('nultiselect' , function (){
    return view('multiselect');
});


/*Route::group([
    'middleware' => ['api', 'cors'],
], function ($router) {
    //Add you routes here, for example:
    Route::get('navbar' , function (){
        return view('layouts.master');
    }
    )}`*/


Route::get('navbar' , function (){
    return view('layouts.master');
});


