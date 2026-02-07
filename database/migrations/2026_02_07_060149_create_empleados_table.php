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
        Schema::create('empleados', function (Blueprint $table) {
        	$table->id();
        	$table->string('cedula');        // Atributo 1: Cédula [cite: 37]
        	$table->decimal('sueldo', 10, 2); // Atributo 2: Sueldo [cite: 37]
        	$table->boolean('activo');       // Atributo 3: Activo [cite: 37]
        	$table->date('fecha_ingreso');    // Atributo 4: Fecha de Ingreso [cite: 37]
        	$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empleados');
    }
};
