<?php

namespace App\Http\Controllers;

use App\Models\Formatoevidencia;
use App\Models\Instrumento;
use App\Models\Tecnicaevaluacion;
use App\Models\TipoEvidencia;
use Illuminate\Http\Request;
use App\Models\Evidencia;

class ActividadPaso3Controller extends Controller
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
        //seleccion de datos para el formulario
        $tipos_evidencia = TipoEvidencia::all();
        $formatos_evidencia = Formatoevidencia::all();
        $tecnicas_evaluacion = Tecnicaevaluacion::all();
        $instrumentos_evaluacion = Instrumento::all();

        //establecemos  el numero de campos segun sea
        var_dump($_GET);
        //boton add: aumentamos
        if(isset($_GET["add"])){

            $numcampos  = session("numcampos") ;
            $numcampos ++;
            session(['numcampos' =>  $numcampos]);
        //boton borrar: disminuimos
        }else if(isset($_GET["del"])) {
            $numcampos  = session("numcampos") ;
            $numcampos --;
            session(['numcampos' =>  $numcampos]);
        }else{
            //valor inicial = 1
            session(['numcampos' =>  1]);
        }
        //retornamos la vista con los datos
        return view('actividad.paso3-cpy')->with('numcampos' , session("numcampos"))
            ->with('tipos_evidencia' , $tipos_evidencia)
            ->with('formatos_evidencia' , $formatos_evidencia)
            ->with('tecnicas_evaluacion' , $tecnicas_evaluacion)
            ->with('instrumentos_evaluacion' , $instrumentos_evaluacion);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //var_dump(session('actividad'));
        //var_dump($request->all());

        for($i=1 ; $i<=$request->input('numevidencias'); $i++ ){
            Evidencia::create([
                'nombre' => $request->input("nombre$i"),
                'desc' => $request->input("desc$i"),
                'instrumento_id' => $request->input("instrumento$i"),
                'tecnicaevaluacion_id' => $request->input("tecnica$i"),
                'formatoevidencia_id' => $request->input("formato$i"),
                'tipo_evidencia_id' => $request->input("tipoevi$i"),

            ]);

        }

        echo "actividad y evidencias registradas correctamente";


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
