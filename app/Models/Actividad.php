<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actividad extends Model
{
    use HasFactory;

    public function evidencias(){
            return $this->hasMany(Evidencia::class);
    }

    public function tipo(){
        return $this->belongsTo(Tipoapp::class , "tipoapp_id");
    }

    public function rap(){
        return $this->belongsTo(Raps::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function tipologia(){
        return $this->belongsTo(Tipologiapp::class, "tipologiapp_id");
    }

    public function materiales(){
        return $this->hasMany(Material::class);
    }

    public function elementos(){
        return $this->hasMany(Elemento::class);
    }

}
