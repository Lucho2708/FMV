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
            $table->increments('id');
            $table->string('cumplimiento');
            $table->string('cierre_semestral');
            $table->string('consultante');
            $table->string('psicologico');
            $table->string('otros');
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
