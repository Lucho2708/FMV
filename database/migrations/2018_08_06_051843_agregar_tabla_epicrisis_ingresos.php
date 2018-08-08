<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AgregarTablaEpicrisisIngresos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('epicrisis_ingresos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('linea_pago');
            $table->string('servicio');
            $table->string('motivo_consulta');
            $table->string('emfermedad_actual');
            $table->string('conducta');
            $table->string('evolucion');
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
        Schema::dropIfExists('epicrisis_ingresos');
    }
}
