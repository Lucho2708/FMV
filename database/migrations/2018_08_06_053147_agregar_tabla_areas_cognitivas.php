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
            $table->enum('observacion',['alta','media','baja']);
            $table->enum('nivel_atencion',['alta','media','baja']);
            $table->enum('concentracion',['alta','media','baja']);
            $table->enum('habilidad_solucionar_problemas',['alta','media','baja']);
            $table->enum('creatividad',['alta','media','baja']);
            $table->enum('iniciativa',['alta','media','baja']);
            $table->enum('competencia',['alta','media','baja']);
            $table->enum('interpretacion',['alta','media','baja']);
            $table->enum('planeacion',['alta','media','baja']);
            $table->string('observaciones',100);
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
