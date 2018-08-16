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
            $table->string('patologicos',100);
            $table->string('quirurjicos',100);
            $table->string('toxicos',100);
            $table->string('farmacologicos',100);
            $table->string('inmunisacion',100);
            $table->string('transfusion',60);
            $table->string('ginecobstetricios',100);
            $table->string('menarquias',60);
            $table->enum('ciclos',['si','no']);
            $table->enum('regular',['si','no']);;
            $table->string('planificacion_ets',5);
            $table->string('patologia_embarazo_actual',60);
            $table->string('patologia_embarazo_anterior',60);
            $table->string('otros',60);
            $table->string('familiares',60);
            $table->string('t_a',60);
            $table->string('f_c',60);
            $table->string('f_r',60);
            $table->string('temp',60);
            $table->string('peso',60);
            $table->string('glasglow',60);
            $table->string('talla',60);
            $table->string('sato2',60);
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
