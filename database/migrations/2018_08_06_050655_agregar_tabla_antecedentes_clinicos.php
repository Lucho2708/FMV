<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AgregarTablaAntecedentesClinicos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('antecedentes_clinicos', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('familiar',75);//Funcion Familiar
            $table->string('consulta',75);
            $table->string('diagnostico',75);
            $table->string('problema',75);
            $table->string('hipotesis',75);
            $table->string('observacion',100);
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
        Schema::dropIfExists('antecedentes_clinicos');
    }
}
