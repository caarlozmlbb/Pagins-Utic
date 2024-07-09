<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('profesionales', function (Blueprint $table) {
            $table->id('id_profesional');
            $table->string('nombre');
            $table->string('apellido');
            $table->integer('telefono');
            $table->string('foto');
            $table->unsignedBigInteger('id_cargo');
            $table->foreign('id_cargo')->references('id_cargo')->on('cargos')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('profesionales');
    }
};
