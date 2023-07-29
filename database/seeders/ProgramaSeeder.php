<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Programa;

class ProgramaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $programas = [
           [
            'codigo'=> 1 ,
            'nombre' => 'Técnico en Promoción de Contenidos en Medios Digitales',
            'version' => 1,
            'estado'=> 'VIGENTE'
            ],[
            'codigo'=> 2 ,
            'nombre' => 'Tecnología en Comunicación Comercial',
            'version' => 1,
            'estado'=> 'VIGENTE'
            ]
        ];
       foreach ($programas as $p){
           Programa::create($p);
       }
    }
}
