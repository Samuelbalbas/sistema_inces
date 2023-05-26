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
        Schema::create('division_sede', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_sede'); // Agregar columna de clave foránea
            $table->unsignedBigInteger('id_division'); // Agregar columna de clave foránea
            $table->timestamps();

            // Establecer relación con la tabla de sedes
            $table->foreign('id_sede')->references('id')->on('sedes');
            // Establecer relación con la tabla de divsion
            $table->foreign('id_division')->references('id')->on('divisions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('division_sede');
    }
};
