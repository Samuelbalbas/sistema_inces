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
        Schema::create('equipos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_marca'); // Agregar columna de clave foránea
            $table->unsignedBigInteger('id_modelo'); // Agregar columna de clave foránea
            $table->string('serial');
            $table->string('serialA');
            $table->string('cpu');
            $table->string('velocidad');
            $table->string('ram');
            $table->string('disco');
            $table->unsignedBigInteger('id_so'); // Agregar columna de clave foránea
            $table->timestamps();

            // Establecer relación con la tabla de marca
            $table->foreign('id_marca')->references('id')->on('marcas');
            // Establecer relación con la tabla de modelo
            $table->foreign('id_modelo')->references('id')->on('modelos');
             // Establecer relación con la tabla de sistemas
            $table->foreign('id_so')->references('id')->on('sistemas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('equipos');
    }
};
