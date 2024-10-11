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
        Schema::create('_examenes', function (Blueprint $table) {
            $table->id('id_calificaciones');
            $table->foreignId('asignaturas_id')->unsigned();
            $table->string('titulo', 50)->nullable();
            $table->foreignId('estudiante_id')->unsigned();
            $table->integer('matricula')->unsigned()->nullable();
            $table->integer('nota')->unsigned()->nullable();
            $table->foreignId('periodo_id')->unsigned();
            $table->string('parcial', 40)->nullable();
            $table->timestamps();

            $table->foreign('asignaturas_id')->references('id')->on('_asignaturas')
            ->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('estudiante_id')->references('id')->on('_estudiantes')
            ->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('periodo_id')->references('id')->on('_periodo')
            ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_examenes');
    }
};
