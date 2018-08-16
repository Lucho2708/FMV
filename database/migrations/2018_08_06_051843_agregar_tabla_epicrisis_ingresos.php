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
            $table->string('linea_pago',60);
            $table->string('servicio' ,60);
            $table->string('consulta',100);
            $table->string('enfermedad',70);
            $table->string('conducta',100);
            $table->string('evolucion',100);
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
