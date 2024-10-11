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
        Schema::create('_estudiantes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_estudiante', 40)->nullable();
            $table->string('apellido', 40)->nullable();
            $table->string('programa', 40)->nullable();
            $table->integer('matricula')->unsigned()->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_estudiantes');
    }
};
