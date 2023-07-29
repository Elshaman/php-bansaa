<?php

namespace App\Http\Controllers;

use App\Models\Programa;
//use App\Http\Requests\StoreActividadRequest;
use App\Http\Requests\UpdateActividadRequest;
use App\Models\Tipoapp;
use Illuminate\Http\Request;

class ActividadPaso1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tipos_actividad = Tipoapp::all();
        $programas = Programa::all();
        return view('actividad.paso1')->with('programas', $programas)
                                           ->with('tipos_actividad', $tipos_actividad) ;
       /*foreach ($programas as $programa){
            var_dump($programa->nombre);
            echo "<hr/>";
        }*/


    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        session(['programa' =>  $request->input('programa')]);
        session(['competencia' =>  $request->input('competencia')]);
        session(['raps' =>  $request->input('raps')]);
        session(['tipos_actividad' =>  $request->input('tipos_actividad')]);
        //var_dump(session('programa'));
        return response()->redirectTo('actividad_paso_2/create');
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
