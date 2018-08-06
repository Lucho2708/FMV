<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AgregarTablaAreasCognitivas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('areas_cognitivas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('vision');
            $table->string('nivel_atencion');
            $table->string('concentracion');
            $table->string('habilidad_solucionar_problemas');
            $table->string('creatividad');
            $table->string('iniciativa');
            $table->string('competencia');
            $table->string('interpretacion');
            $table->string('planeacion');
            $table->string('observaciones');
            $table->unsignedInteger('eto_id');

            $table->foreign('eto_id')->references('id')->on('evaluaciones_terapias_ocupacionales');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('areas_cognitivas');
    }
}
