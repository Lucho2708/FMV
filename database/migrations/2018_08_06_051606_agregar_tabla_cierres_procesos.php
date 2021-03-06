<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AgregarTablaCierresProcesos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cierres_procesos', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('cumplimiento',150);
            $table->string('cierre_semestral',150);
            $table->string('consultante',200);
            $table->string('psicologico',200);
            $table->string('otros',150);
            $table->string('e_p_c',255);
            $table->string('e_p_p',255);
            $table->unsignedInteger('antecedente_clinico_id');

            $table->foreign('antecedente_clinico_id')->references('id')->on('antecedentes_clinicos');
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
        Schema::dropIfExists('cierres_procesos');
    }
}
