<?php

namespace App\Http\Controllers;

use App\Models\Programa;
use App\Models\Tipoapp;
use Illuminate\Http\Request;

class CatalogController extends Controller
{

    public function index(){
        $tipos_actividad = Tipoapp::all();
        $programas = Programa::all();
        return view('modulo_2.actividad.catalog')->
            with('programas', $programas)
             ->with('tipos_actividad', $tipos_actividad) ;
    }

}
