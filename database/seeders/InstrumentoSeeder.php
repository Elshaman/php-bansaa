<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Instrumento;

class InstrumentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Instrumento::create([
            "name" => "Lista de Chequeo"
        ]);

        Instrumento::create([
            "name" => "Escala de Estimación"
        ]);

        Instrumento::create([
            "name" => "Cuestionario"
        ]);

    }
}
