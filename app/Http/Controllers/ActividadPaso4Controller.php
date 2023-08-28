<?php

namespace App\Http\Controllers;

use App\Models\Material;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ActividadPaso4Controller extends Controller
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
            $num_materiales  = session("num_materiales") ;
            $num_materiales ++;
            session(['num_materiales' =>  $num_materiales]);
        }else if(isset($_GET["del"])) {
            $num_materiales  = session("num_materiales") ;
            $num_materiales --;
            session(['num_materiales' =>  $num_materiales]);
        }else{
            session(['num_materiales' =>  1]);
        }

        //@todo mostrar la interfaz de materiales
        return view('modulo_1.actividad.paso4');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //var_dump(session("actividad"));
        for($i=1 ; $i<=session("num_materiales"); $i++ ){
             //Crear el material en bd
             $m = new Material();
             $m->nombre = $request->input("nombre_material_$i");
             $m->ruta = $request->file("archivo_material_$i")->getClientOriginalName();
             $m->actividad_id = session("actividad");
             $m->save();

             //@cargar el archivo en storage

            Storage::disk('local')->putFileAs(
                "actividad_". session("actividad") ."/".$m->ruta,
                $request->file("archivo_material_$i"),
                $m->ruta
            );

        }


       return redirect('actividad_paso_5/create');



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
