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
            $table->string('familiar',50);//Funcion Familiar
            $table->string('consulta',50);
            $table->string('diagnostico',50);
            $table->string('problema',50);
            $table->string('hipotesis',50);
            $table->string('observacion',50);
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
