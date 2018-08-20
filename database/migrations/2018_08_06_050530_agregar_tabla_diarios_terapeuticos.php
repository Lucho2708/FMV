<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AgregarTablaDiariosTerapeuticos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diarios_terapeuticos', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('titulo',75);
            $table->string('cronica',75);
            $table->string('estado_inicial',75);
            $table->string('estado_final',75);
            $table->string('experiencias_positivas',150);
            $table->string('experiencias_negativas',150);
            $table->string('compromiso',150);
            $table->unsignedInteger('paciente_id');

            $table->foreign('paciente_id')->references('id')->on('pacientes');

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
        Schema::dropIfExists('diarios_terapeuticos');
    }
}
