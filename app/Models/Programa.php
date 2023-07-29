<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Programa extends Model
{
    use HasFactory;
    protected $fillable = [
        'codigo',
        'nombre',
        'version',
        'estado',
    ];

    public function competencias(){

        return $this->hasMany(Competencia::class);

    }
}
