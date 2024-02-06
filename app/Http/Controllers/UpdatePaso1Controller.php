<?php

namespace App\Http\Controllers;

use App\Models\Actividad;
use App\Models\Competencia;
use App\Models\Programa;
use App\Models\Raps;
use App\Models\Tipoapp;
use Illuminate\Http\Request;

class UpdatePaso1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $actividad_seleccionada = Actividad::find($id);
        session(["actividad" => $actividad_seleccionada]);
        $id_rap= $actividad_seleccionada->rap->id;
        $id_competencia = Raps::find($id_rap)->competencia->id;
        $id_programa = Competencia::find($id_competencia)->programa->id;
        $id_tipo = $actividad_seleccionada->tipo->id;

        $programas = Programa::all();
        $competencias = Programa::find($id_programa)->competencias;
        $raps = Competencia::find($id_competencia)->raps;
        $tipos = Tipoapp::all();



        return view("modulo_2.actividad_update.paso1")->with("programas" , $programas)
                                                           ->with("id_programa" , $id_programa)
                                                           ->with("raps" , $raps)
                                                           ->with("id_rap" , $id_rap)
                                                           ->with("competencias" , $competencias)
                                                           ->with("id_competencia" , $id_competencia)
                                                           ->with("tipos" , $tipos)
                                                           ->with("id_tipo" , $id_tipo);

}

/**
 * Show the form for editing the specified resource.
 */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         //actualizacion de tipo y de rap
         $actividad = Actividad::find($id);
         $actividad->tipoapp_id = $request->input("tipos_actividad");
         $actividad->rap_id = $request->input("raps");
         $actividad->save();

         //redireccion al siguiente paso
        return redirect("update_paso_2/$id");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
