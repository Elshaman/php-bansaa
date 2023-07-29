<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('evidencias', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('desc');
            $table->foreignId('instrumento_id')->constrained();
            $table->foreignId('tecnicaevaluacion_id')->constrained();
            $table->foreignId('actividad_id')->constrained();
            $table->foreignId('formatoevidencia_id')->constrained();
            $table->foreignId('tipo_evidencia_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evidencias');
    }
};
