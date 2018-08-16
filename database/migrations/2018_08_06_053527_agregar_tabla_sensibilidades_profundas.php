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
            $table->enum('barognosia',['funcional','semifuncional','no funcional']);
            $table->enum('esterognosia',['funcional','semifuncional','no funcional']);
            $table->enum('diferenciacion_texturas',['funcional','semifuncional','no funcional']);
            $table->enum('grafestesia',['funcional','semifuncional','no funcional']);
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
