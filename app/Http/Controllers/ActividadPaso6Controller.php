<?php

namespace App\Http\Controllers;

use App\Models\Herramienta;

use Illuminate\Http\Request;

class ActividadPaso6Controller extends Controller
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
        if(isset($_GET["add"])){
            $num_herramientas  = session("num_herramientas") ;
            $num_herramientas ++;
            session(['num_herramientas' =>  $num_herramientas]);
        }else if(isset($_GET["del"])) {
            $num_herramientas  = session("num_herramientas") ;
            $num_herramientas --;
            session(['num_herramientas' =>  $num_herramientas]);
        }else{
            session(['num_herramientas' =>  1]);
        }
        return view('modulo_1.actividad.paso6');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        for($i=1 ; $i<=session("num_herramientas"); $i++ ){
            $e = new Herramienta();
            $e->nombre = $request->input("nombre_herramienta_$i");
            $e->save();
        }


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
        //
    }
}
