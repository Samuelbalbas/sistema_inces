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
        Schema::create('perifericos', function (Blueprint $table) {
            $table->id();
            $table->string('periferic');
            $table->unsignedBigInteger('id_marca'); // Agregar columna de clave foránea
            $table->unsignedBigInteger('id_modelo'); // Agregar columna de clave foránea
            $table->string('serial');
            $table->string('serialA');
            $table->timestamps();

            // Establecer relación con la tabla de marca
            $table->foreign('id_marca')->references('id')->on('marcas');
            // Establecer relación con la tabla de modelo
            $table->foreign('id_modelo')->references('id')->on('modelos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('perifericos');
    }
};
