<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tipologiapp;

class TipologiappSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
           Tipologiapp::create([
               'nombre' => 'Cognitivo'
           ]);

           Tipologiapp::create([
                'nombre' => 'Procedimental'
           ]);

           Tipologiapp::create([
                'nombre' => 'Valorativo/actitudinal'
           ]);
    }
}
