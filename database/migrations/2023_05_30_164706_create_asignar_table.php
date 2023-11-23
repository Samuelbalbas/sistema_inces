<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asignar', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_persona'); // Agregar columna de clave foránea
            $table->unsignedBigInteger('id_equipo'); // Agregar columna de clave foránea
            $table->unsignedBigInteger('id_periferico'); // Agregar columna de clave foránea
            $table->string('estatus');
            $table->string('observacion')->nullable();
            $table->timestamps();

            // Establecer relación con la tabla de marca
            $table->foreign('id_persona')->references('id')->on('personas');
            // Establecer relación con la tabla de modelo
            $table->foreign('id_equipo')->references('id')->on('equipos');
            // Establecer relación con la tabla de tipo de periféricos
            $table->foreign('id_periferico')->references('id')->on('perifericos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asignar');
    }
};
