<?php

namespace Database\Seeders;

use App\Models\Formatoevidencia;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class FormatoevidenciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Formatoevidencia::create([
            "name" => "Microsoft Power Point"
        ]);

        Formatoevidencia::create([
            "name" => "Microsoft Word"
        ]);

        Formatoevidencia::create([
            "name" => "Microsoft Excel"
        ]);

        Formatoevidencia::create([
            "name" => "Video Mp4"
        ]);
    }
}
