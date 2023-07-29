<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Competencia extends Model
{
    use HasFactory;
    protected $fillable = [
        'codigo',
        'nombre',
        'programa_id',
    ];


    public function raps(){

        return $this->hasMany(Raps::class);
    }
}
