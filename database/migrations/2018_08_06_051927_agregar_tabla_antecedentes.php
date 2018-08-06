<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AgregarTablaAntecedentes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('antecedentes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('patologicos');
            $table->string('quirurjicos');
            $table->string('toxicos');
            $table->string('farmacologicos');
            $table->string('inmunisacion');
            $table->string('transfusion');
            $table->string('ginecobstetricios');
            $table->string('menarquias');
            $table->string('ciclos');
            $table->string('regular');
            $table->string('planificacion_ets');
            $table->string('patologia_embarazo_actual');
            $table->string('patologia_embarazo_anterior');
            $table->string('otros');
            $table->string('familiares');
            $table->string('t_a');
            $table->string('f_c');
            $table->string('f_r');
            $table->string('temp');
            $table->string('peso');
            $table->string('glasglow');
            $table->string('talla');
            $table->string('sato2');
            $table->unsignedInteger('epicrisi_ingreso_id');

            $table->foreign('epicrisi_ingreso_id')->references('id')->on('epicrisis_ingresos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('antecedentes');
    }
}
