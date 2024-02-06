<?php

namespace App\Http\Controllers;

use App\Models\Actividad;
use App\Models\Tipologiapp;
use Illuminate\Http\Request;

class UpdatePaso2Controller extends Controller
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

        $actividad_seleccionada  = session("actividad");

        $id_tipologiapp = $actividad_seleccionada->tipologia->id;
        $tipologias = Tipologiapp::all();

        return view("modulo_2.actividad_update.paso2")->with("tipologias", $tipologias)
                                                          ->with("id_tipologia", $id_tipologiapp)
                                                          ->with("actividad",
                                                               session("actividad"));



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
        $actividad = Actividad::find($id);
        $actividad->verbo= $request->input('verbo');
        $actividad->objeto= $request->input('objeto');
        $actividad->condicion= $request->input('condicion');
        $actividad->descripcion= $request->input('desc');
        $actividad->tipologiapp_id= $request->input('tipologia');
        $actividad->tiempo= $request->input('tiempo');
        $actividad->genera_evidencia=$request->input('genera_evidencia');
        $actividad->save();
        //Redirigir a acrualizar evidencias
        session(["genera_evidencia" => $request->input('genera_evidencia') ]);
        return redirect("update_paso_3/$id");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
