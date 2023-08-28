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
            $table->string('verbo');
            $table->string('objeto');
            $table->string('condicion');
            $table->string('descripcion');
            $table->integer('tiempo');
            $table->boolean('genera_evidencia');
            $table->foreignId('tipoapp_id')->constrained();
            $table->foreignId('tipologiapp_id')->constrained();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('rap_id')->constrained();
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
