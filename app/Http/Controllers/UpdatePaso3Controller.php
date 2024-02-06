<?php

namespace App\Http\Controllers;

use App\Models\CriteriosEval;
use App\Models\Detallevidencia;
use App\Models\Evidencia;
use App\Models\Formatoevidencia;
use App\Models\Instrumento;
use App\Models\Tecnicaevaluacion;
use App\Models\TipoEvidencia;
use Illuminate\Http\Request;
use App\Models\Actividad;

class UpdatePaso3Controller extends Controller
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
        if(session('genera_evidencia') == 1){
            $tipos_evidencia = TipoEvidencia::all();
            $formatos_evidencia = Formatoevidencia::all();
            $tecnicas_evaluacion = Tecnicaevaluacion::all();
            $instrumentos_evaluacion = Instrumento::all();

            //seleccionar rap de la ctividad}
            $rap_id = Actividad::find($id)->rap->id;
            $criterios_evaluacion = CriteriosEval::where('rap_id', $rap_id )->get();
            session(['numcriterios' =>  $criterios_evaluacion->count()]);

            if(isset($_GET["add"])){

                $numevidencias  = session("numevidencias") ;
                $numevidencias ++;
                session(['numevidencias' =>  $numevidencias]);
            }else if(isset($_GET["del"])) {
                $numevidencias  = session("numevidencias") ;
                $numevidencias --;
                session(['numevidencias' =>  $numevidencias]);
            }else{
                session(['numevidencias' =>  Actividad::find($id)->evidencias->count()]);
            }

            $evidencias = Actividad::find($id)->evidencias;

            return view('modulo_2.actividad_update.paso3')
                ->with('numevidencias' , session("numevidencias"))
                ->with('tipos_evidencia' , $tipos_evidencia)
                ->with('formatos_evidencia' , $formatos_evidencia)
                ->with('tecnicas_evaluacion' , $tecnicas_evaluacion)
                ->with('instrumentos_evaluacion' , $instrumentos_evaluacion)
                ->with('criterios_evaluacion' , $criterios_evaluacion)
                ->with('evidencias', $evidencias)
                ->with('id_actividad', $id);


        }else if(session('genera_evidencia') == 2){
            //todo: implementar borrado para cuando no tiene evidencia
            $actividad = Actividad::find($id);
            $evidencias = $actividad->evidencias;
            //borrar los detalles de evidencia
            foreach ($evidencias as $e){
                detallevidencias()->delete();
            }
            //borrar las evidencias de la actividad
            $actividad->evidencias()->delete();

            //redirigir a paso 4
            return redirect('update_paso_4/'.$id.'/edit');
        }



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

        //algoritmo:
        //borrar los detalles de evidencia de cada evidencia
        $evidencias_borrar = Actividad::find($id)->evidencias;
        foreach ($evidencias_borrar as $evidencia){
            $evidencia->detallevidencias()->delete();
        }
        // borrar cada evidencia vinculada a la actividad
        Actividad::find($id)->evidencias()->delete();

        // registrar cada evidencia del formulario

        for($i=0 ; $i<session("numevidencias"); $i++ ){
            //guardar la nueva evidencia
            $e = new Evidencia();
            $e->nombre = $request->input("nombre_evidencia_$i");
            $e->actividad_id = $id;
            $e->desc = $request->input("descripcion_evidencia_$i");
            $e->instrumento_id= $request->input("instrumento_evaluacion_$i");
            $e->tecnicaevaluacion_id = $request->input("tecnica_evaluacion_$i");
            $e->formatoevidencia_id = $request->input("formato_evidencia_$i");
            $e->tipo_evidencia_id = $request->input("tipo_evidencia_$i");
            $e->save();

            //registrar cda criterio de evaluacion con la nomenclatura:
            for($j = 1 ; $j <= session("numcriterios"); $j ++){
                if( $request->has("criterio_evaluacion_".$i."_".$j) ){
                    $newDetalleEvidencia = new Detallevidencia();
                    $newDetalleEvidencia->criterios_eval_id = $request->input("criterio_evaluacion_".$i."_".$j);
                    $newDetalleEvidencia->evidencia_id = $e->id;
                    $newDetalleEvidencia->save();
                }
            }
        }

        return redirect('update_paso_4/'.$id.'/edit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
