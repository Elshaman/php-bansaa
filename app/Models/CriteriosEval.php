<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CriteriosEval extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'rap_id',
    ];
}
