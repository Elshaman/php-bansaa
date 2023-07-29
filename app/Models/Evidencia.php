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

    use HasFactory;
}
