<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AgregarTablaPatronesIntegralesMovimientos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patrones_integrales_movimientos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('alcance_plano_superior');
            $table->string('alcance_plano_inferior');
            $table->string('agarre_mano_llena');
            $table->string('agarre_cilindro');
            $table->string('enganche');
            $table->string('salto_involuntario');
            $table->string('lanzar_proporcional');
            $table->string('lanzar_rudimentaria');
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
        Schema::dropIfExists('patrones_integrales_movimientos');
    }
}
