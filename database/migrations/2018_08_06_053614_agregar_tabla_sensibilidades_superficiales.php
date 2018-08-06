<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AgregarTablaSensibilidadesSuperficiales extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sensibilidades_superficiales', function (Blueprint $table) {
            $table->increments('id');
            $table->string('calor');
            $table->string('frio');
            $table->string('dolor');
            $table->unsignedInteger('perceptiva_id');

            $table->foreign('perceptiva_id')->references('id')->on('perceptivas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sensibilidades_superficiales');
    }
}
