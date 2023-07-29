<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tecnicaevaluacion;

class TecnicaevaluacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tecnicaevaluacion::create([
            "name" => "Observación"
        ]);
        Tecnicaevaluacion::create([
            "name" => "Simulación"
        ]);
        Tecnicaevaluacion::create([
            "name" => "Valoración de productos"
        ]);
    }
}
