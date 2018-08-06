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
            $table->increments('id');
            $table->string('familiar');//Funcion Familiar
            $table->string('consulta');
            $table->string('diagnostico');
            $table->string('problema');
            $table->string('hipotesis');
            $table->string('observacion');
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
