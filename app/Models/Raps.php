<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Raps extends Model
{
    use HasFactory;

    public function criteriosEvaluacion(){
        return $this->hasMany(CriteriosEval::class);
    }

    public function actividades(){
        return $this->hasMany(Actividad::class, "rap_id");
    }



}
