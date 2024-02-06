<?php

namespace App\Http\Controllers;

use App\Models\Programa;
use App\Models\Actividad;
use App\Models\Raps;
use App\Models\Tipoapp;
use App\Models\Competencia;
use \Illuminate\Support\Facades\Request;

class CatalogController extends Controller
{

    public function index(){

        if(Request::isMethod('post')){
            $actividades_consultadas = Programa::find(Request::input("programa"))->
                                       competencias()->
                                       where("id", Request::input("competencia"))->
                                       first()->
                                       raps()->
                                       where("id" , Request::input("raps") )->
                                       first()->
                                       actividades()->
                                       where("tipoapp_id", Request::input("tipos_actividad"))->
                                       get();
            return view('modulo_2.actividad.results')->with('actividades', $actividades_consultadas);

        }else{
            $tipos_actividad = Tipoapp::all();
            $programas = Programa::all();
            return view('modulo_2.actividad.catalog')->
            with('programas', $programas)
                ->with('tipos_actividad', $tipos_actividad) ;
        }

    }



    public function show($idactividad){
        //var_dump($idactividad);
        $actividad_seleccionada = Actividad::find($idactividad);
        $id_rap= $actividad_seleccionada->rap->id;
        $competencia = Raps::find($id_rap)->competencia;
        $programa = Competencia::find($competencia->id)->programa;
        //TODO: se require enviar competencia y programa a la vista
        return view('modulo_2.actividad.details')->with("actividad", $actividad_seleccionada)
                                                      ->with('programa', $programa)
                                                        ->with('competencia', $competencia);

    }




}
