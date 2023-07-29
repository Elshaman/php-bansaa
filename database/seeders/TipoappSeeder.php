<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tipoapp;

class TipoappSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tipoapp::create(
            [
                "nombre" => "Reflexión Inicial"
            ]
        );

        Tipoapp::create(
            [
                "nombre" => "Contextualización"
            ]
        );

        Tipoapp::create(
            [
                "nombre" => "Apropiación"
            ]
        );

        Tipoapp::create(
            [
                "nombre" => "Transferencia"
            ]
        );
    }
}
