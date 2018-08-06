<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AgregarTablaIntervenciones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('intervenciones', function (Blueprint $table) {
            $table->increments('id');
            $table->string('objetivo_general');
            $table->string('objetivo_espesifico');
            $table->string('tecnica');
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
        Schema::dropIfExists('intervenciones');
    }
}
