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
            $table->increments('id')->unsigned();
            $table->string('patologicos',150);
            $table->string('quirurjicos',150);
            $table->string('toxicos',150);
            $table->string('farmacologicos',150);
            $table->string('inmunisacion',150);
            $table->string('transfusion',100);
            $table->string('ginecobstetricios',100);
            $table->string('menarquias',100);
            $table->enum('ciclos',['si','no']);
            $table->enum('regular',['si','no']);;
            $table->string('planificacion_ets',10);
            $table->string('patologia_embarazo_actual',100);
            $table->string('patologia_embarazo_anterior',100);
            $table->string('otros',100);
            $table->string('familiares',100);
            $table->string('t_a',100);
            $table->string('f_c',100);
            $table->string('f_r',100);
            $table->string('temp',100);
            $table->string('peso',100);
            $table->string('glasglow',100);
            $table->string('talla',100);
            $table->string('sato2',100);
            $table->unsignedInteger('epicrisis_ingreso_id');

            $table->foreign('epicrisis_ingreso_id')->references('id')->on('epicrisis_ingresos');
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
