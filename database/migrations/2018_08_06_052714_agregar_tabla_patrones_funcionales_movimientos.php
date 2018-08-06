<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AgregarTablaPatronesFuncionalesMovimientos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patrones_funcionales_movimientos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('mano_cabeza');
            $table->string('mano_boca');
            $table->string('mano_espalda');
            $table->string('mano_hombro');
            $table->string('mano_pierna');
            $table->string('mano_pie');
            $table->string('mano_cola');
            $table->string('mano_bilateral');
            $table->string('destreza_manual');
            $table->string('motricidad_gruesa');
            $table->string('motricidad_fina');
            $table->string('movimiento_bilateral');
            $table->string('coordinacion');
            $table->string('velocidad_desempeno');
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
        Schema::dropIfExists('patrones_funcionales_movimientos');
    }
}
