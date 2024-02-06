<?php

namespace App\Http\Controllers;

use App\Models\Actividad;
use App\Models\Material;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UpdatePaso4Controller extends Controller
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //seleccionar materiales de la actividad
        $materiales = Actividad::find($id)->materiales;


        if(isset($_GET["add"])){
            $num_materiales  = session("num_materiales") ;
            $num_materiales ++;
            session(['num_materiales' =>  $num_materiales]);
        }else if(isset($_GET["del"])) {
            $num_materiales  = session("num_materiales") ;
            $num_materiales --;
            session(['num_materiales' =>  $num_materiales]);
        }else{
            session(['num_materiales' =>  $materiales->count()]);
        }

        return view("modulo_2.actividad_update.paso4")->with("materiales", $materiales)
                                                     ->with("id_actividad", $id);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        //borrar materiales anteriores
        Actividad::find($id)->materiales()->delete();


        //crear materiales
        for($i=0 ; $i<session("num_materiales"); $i++ ){
            //Crear el material en bd
            $m = new Material();
            $m->nombre = $request->input("nombre_material_$i");
            $m->ruta = $request->file("archivo_material_$i")->getClientOriginalName();
            $m->actividad_id = Actividad::find($id)->id;
            $m->save();

            //@cargar el archivo en storage

            Storage::disk('local')->putFileAs(
                "actividad_". $m->actividad_id ."/".$m->ruta,
                $request->file("archivo_material_$i"),
                $m->ruta
            );

        }

        return redirect("update_paso_5/$id/edit");


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
