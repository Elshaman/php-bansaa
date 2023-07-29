<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\ProgramaSeeder;
use Database\Seeders\CompetenciaSeeder;
use Database\Seeders\RapsSeeder;
use Database\Seeders\TipoappSeeder;
use Database\Seeders\TipologiappSeeder;
use Database\Seeders\InstrumentoSeeder;
use Database\Seeders\FormatoevidenciaSeeder;
use Database\Seeders\TecnicaevaluacionSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            ProgramaSeeder::class,
            CompetenciaSeeder::class,
            RapsSeeder::class,
            CriteriosEvalSeeder::class,
            TipoappSeeder::class,
            TipologiappSeeder::class,
            TipoEvidenciaSeeder::class,
            InstrumentoSeeder::class,
            FormatoevidenciaSeeder::class,
            TecnicaevaluacionSeeder::class
        ]);

    }
}
