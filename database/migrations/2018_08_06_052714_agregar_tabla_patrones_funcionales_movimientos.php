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
            $table->increments('id')->unsigned();
            $table->enum('mano_cabeza',['funcional','semifuncional','no funcional']);
            $table->enum('mano_boca',['funcional','semifuncional','no funcional']);
            $table->enum('mano_espalda',['funcional','semifuncional','no funcional']);
            $table->enum('mano_hombro',['funcional','semifuncional','no funcional']);
            $table->enum('mano_pierna',['funcional','semifuncional','no funcional']);
            $table->enum('mano_pie',['funcional','semifuncional','no funcional']);
            $table->enum('mano_cola',['funcional','semifuncional','no funcional']);
            $table->enum('mano_bilateral',['funcional','semifuncional','no funcional']);
            $table->enum('destreza_manual',['funcional','semifuncional','no funcional']);
            $table->enum('motricidad_gruesa',['funcional','semifuncional','no funcional']);
            $table->enum('motricidad_fina',['funcional','semifuncional','no funcional']);
            $table->enum('movimiento_bilateral',['funcional','semifuncional','no funcional']);
            $table->enum('coordinacion',['funcional','semifuncional','no funcional']);
            $table->enum('velocidad_desempeno',['funcional','semifuncional','no funcional']);
            $table->string('observaciones',150);
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
