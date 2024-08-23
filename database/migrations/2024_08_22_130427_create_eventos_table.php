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
        Schema::create('eventos', function (Blueprint $table) {
            $table->id(); 
            $table->string('nombre');
            $table->date('fecha');
            $table->time('hora'); 
            $table->string('ubicacion'); 
            $table->integer('asistentes_esperados'); 
            $table->string('nombre_organizador'); 
            $table->string('contacto_organizador'); 
            $table->decimal('presupuesto', 12, 2); 
            $table->text('agenda'); 
            $table->text('notas_adicionales'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('eventos');
    }
};
