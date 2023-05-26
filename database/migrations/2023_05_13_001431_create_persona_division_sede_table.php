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
        Schema::create('persona_division_sede', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_persona'); // Agregar columna de clave foránea
            $table->unsignedBigInteger('id_division_sede'); // Agregar columna de clave foránea
            $table->timestamps();

            
            // Establecer relación con la tabla de sedes
            $table->foreign('id_persona')->references('id')->on('personas');
            // Establecer relación con la tabla de sedes
            $table->foreign('id_division_sede')->references('id')->on('division_sede');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('persona_division_sede');
    }
};
