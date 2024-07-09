<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('carreras', function (Blueprint $table) {
            $table->id('id_carreras');
            $table->string('nombre_carrera');
            $table->string('descripcion');
            $table->string('logo');
            $table->string('url_inscripcion');
            $table->string('url_plataforma');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('carreras');
    }
};
