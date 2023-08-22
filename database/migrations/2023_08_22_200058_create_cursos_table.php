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
        Schema::create('cursos', function (Blueprint $table) {
            $table->id(); // Genera un id tipo entero incremental 
            $table->string('name'); // Genera una columna tipo varchar max 255
            $table->text('description'); // Genera una columna para un infinito de caracteres
            $table->timestamps(); // Genera dos columnas created_at updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cursos');
    }
};
