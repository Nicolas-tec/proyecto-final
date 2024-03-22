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
        Schema::create('diario', function (Blueprint $table) {
            $table->id();
            $table->string('Fecha');
            $table->string('Nombre_paciente');
            $table->string('Nombre_doctor');
            $table->string('Enfermedad');
            $table->string('Reporte_día');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('diario');
    }
};
