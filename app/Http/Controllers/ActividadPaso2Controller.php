<?php

namespace App\Http\Controllers;

use App\Models\Actividad;
use App\Http\Requests\StoreActividadRequest;
use App\Http\Requests\UpdateActividadRequest;
use App\Models\Tipologiapp;

class ActividadPaso2Controller extends Controller
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
        $tipologias = Tipologiapp::all();
        return view('actividad.paso2')->with('tipologias' , $tipologias);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreActividadRequest $request)
    {
        $actividad = new Actividad();
        //@todo: toca poner en la migracion atributo name a null
        //@todo
        //var_dump($request->all());
        $actividad->verbo = $request->verbo;
        var_dump($actividad);
        $actividad->objeto =  $request->objeto;
        $actividad->condicion =  $request->condicion;
        $actividad->descripcion =  $request->desc;
        $actividad->tiempo =  $request->tiempo;
        $actividad->estado =  "VIGENTE";
        $actividad->genera_evidencia = $request->genera_evidencia === "si";
        $actividad->tipologiapp_id = $request->tipologia;
        $actividad->tipoapp_id= session('tipos_actividad' );
        $actividad->save();

        echo "actividad creada";
    }

    /**
     * Display the specified resource.
     */
    public function show(Actividad $actividad)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Actividad $actividad)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateActividadRequest $request, Actividad $actividad)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Actividad $actividad)
    {
        //
    }
}
