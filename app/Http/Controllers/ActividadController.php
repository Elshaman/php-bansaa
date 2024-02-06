<?php

namespace App\Http\Controllers;

use App\Models\Actividad;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ActividadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $actividades = Actividad::where('user_id' , Auth::user()->id)->get();
        return view('modulo_1.actividad_consulta.index' )->with("actividades" , $actividades);
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
        $actividad = Actividad::find($id);
        $evidencias = $actividad->evidencias;
        //borrar los detalles de evidencia
        foreach ($evidencias as $e){
            detallevidencias()->delete();
        }
        //borrar las evidencias de la actividad
        $actividad->evidencias()->delete();

        //borrar elementos y materiales
        $actividad->materiales()->delete();
        $actividad->elementos()->delete();

        //borrar la actividad
        $actividad->delete();



        //redireccionar a mis actividades
        return redirect('actividad')
            ->with('success', 'Actividad eliminada exitosamente');


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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

    }
}
