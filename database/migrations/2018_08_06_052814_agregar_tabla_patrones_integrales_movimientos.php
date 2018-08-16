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
            $table->enum('alcance_plano_superior',['funcional','semifuncional','no funcional']);
            $table->enum('alcance_plano_inferior',['funcional','semifuncional','no funcional']);
            $table->enum('agarre_mano_llena',['funcional','semifuncional','no funcional']);
            $table->enum('agarre_cilindro',['funcional','semifuncional','no funcional']);
            $table->enum('enganche',['funcional','semifuncional','no funcional']);
            $table->enum('salto_involuntario',['funcional','semifuncional','no funcional']);
            $table->enum('lanzar_proporcional',['funcional','semifuncional','no funcional']);
            $table->enum('lanzar_rudimentaria',['funcional','semifuncional','no funcional']);
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
        Schema::dropIfExists('patrones_integrales_movimientos');
    }
}
