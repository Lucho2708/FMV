<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AgregarTablaEpicrisisEgresos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('epicrisis_egresos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('linea_pago',60);;
            $table->string('incapacidades',60);
            $table->string('plan_mejora',60);
            $table->string('medicamentos',60);
            $table->string('estado_salud',60);
            $table->string('servicio',60);
            $table->string('observaciones',60);
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
        Schema::dropIfExists('epicrisis_egresos');
    }
}
