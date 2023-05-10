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
        Schema::create('actividads', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('verbo');
            $table->string('objeto');
            $table->string('condicion');
            $table->string('descripcion');
            $table->integer('tiempo');
            $table->string('estado');
            $table->boolean('genera_evidencia');
            $table->foreignId('tipoapp_id')->constrained();
            $table->foreignId('tipologiapp_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('actividads');
    }
};
