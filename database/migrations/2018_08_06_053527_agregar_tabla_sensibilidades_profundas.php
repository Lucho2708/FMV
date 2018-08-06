<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AgregarTablaSensibilidadesProfundas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sensibilidades_profundas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('barognosia');
            $table->string('esterognosia');
            $table->string('diferenciacion_texturas');
            $table->string('grafestesia');
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
        Schema::dropIfExists('sensibilidades_profundas');
    }
}
