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
            $table->increments('id');
            $table->string('titulo_dia');
            $table->string('cronica');
            $table->string('estado_inicial');
            $table->string('estado_final');
            $table->string('experiencias_positivas');
            $table->string('experiencias_negativas');
            $table->string('compromiso');
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
