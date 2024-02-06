<?php

namespace App\Http\Controllers;

use App\Models\Actividad;
use App\Models\Elemento;
use Illuminate\Http\Request;

class UpdatePaso5Controller extends Controller
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
        //var_dump($id);
        $elementos = Actividad::find($id)->elementos;
        if(isset($_GET["add"])){
            $num_elementos  = session("num_elementos") ;
            $num_elementos ++;
            session(['num_elementos' =>  $num_elementos]);
        }else if(isset($_GET["del"])) {
            $num_elementos  = session("num_elementos") ;
            $num_elementos --;
            session(['num_elementos' =>  $num_elementos]);
        }else{
            session(['num_elementos' =>  $elementos->count()]);
        }
        return view('modulo_2.actividad_update.paso5')->with("id_actividad", $id)
                                                           ->with("elementos", $elementos);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //var_dump($request->all());
        //borrar elementos
        Actividad::find($id)->elementos()->delete();

        for($i=0; $i<session("num_elementos"); $i++ ){
            $e = new Elemento();
            $e->actividad_id = $id;
            $e->nombre = $request->input("nombre_elemento_$i");
            $e->save();
        }

        //destruir todas las variables de sesion utilizadas
        //en el proceso
        session()->forget([

            "actividad",
            "numevidencias",
            "num_elementos",
            "num_materiales",
            "numcriterios"]);
        //

        return redirect('actividad')
            ->with('success', 'Actividad Editada exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
