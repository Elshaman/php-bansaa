<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TipoEvidencia;

class TipoEvidenciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TipoEvidencia::create([
            'nombre'=>'Producto'
        ]);

        TipoEvidencia::create([
            'nombre'=>'Conocimiento'
        ]);

        TipoEvidencia::create([
            'nombre'=>'Desempeño'
        ]);
    }
}
