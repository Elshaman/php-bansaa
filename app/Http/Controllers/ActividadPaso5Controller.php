<?php

namespace App\Http\Controllers;

use App\Models\Elemento;
use Illuminate\Http\Request;

class ActividadPaso5Controller extends Controller
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
            $num_elementos  = session("num_elementos") ;
            $num_elementos ++;
            session(['num_elementos' =>  $num_elementos]);
        }else if(isset($_GET["del"])) {
            $num_elementos  = session("num_elementos") ;
            $num_elementos --;
            session(['num_elementos' =>  $num_elementos]);
        }else{
            session(['num_elementos' =>  1]);
        }
        return view('modulo_1.actividad.paso5');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
            for($i=1 ; $i<=session("num_elementos"); $i++ ){
                $e = new Elemento();
                $e->nombre = $request->input("nombre_elemento_$i");
                $e->save();
            }

            return redirect('actividad_paso_6/create');
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
