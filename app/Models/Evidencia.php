<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evidencia extends Model
{
    protected $fillable =[
        'nombre',
        'desc',
        'actividad_id',
        'instrumento_id',
        'tecnicaevaluacion_id',
        'formatoevidencia_id',
        'tipo_evidencia_id'
    ];

    public function criterios(){
            return $this->belongsToMany(CriteriosEval::class,
                                           "detallevidencias",
                                    "evidencia_id",
                                    "criterios_eval_id"      );
    }

    public function detallevidencias(){
            return $this->hasMany(Detallevidencia::class, "evidencia_id");
    }

    public function instrumento(){
            return $this->belongsTo(Instrumento::class,  "instrumento_id");
    }

    public function tecnicaEvaluacion(){
        return $this->belongsTo(Tecnicaevaluacion::class , "tecnicaevaluacion_id");
    }

    public function formato(){
        return $this->belongsTo(Formatoevidencia::class , "formatoevidencia_id");
    }

    public function tipo_evidencia(){
        return $this->belongsTo( TipoEvidencia::class , "tipo_evidencia_id");
    }

    use HasFactory;
}
