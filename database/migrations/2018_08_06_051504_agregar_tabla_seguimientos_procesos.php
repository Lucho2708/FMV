<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AgregarTablaSeguimientosProcesos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seguimientos_procesos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('asistentes');
            $table->string('resumen');
            $table->string('hipotesis');
            $table->string('compromiso');
            $table->unsignedInteger('antecedente_clinico_id');

            $table->foreign('antecedente_clinico_id')->references('id')->on('antecedentes_clinicos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('seguimientos_procesos');
    }
}
