<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AgregarTablaVisuales extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visuales', function (Blueprint $table) {
            $table->increments('id');
            $table->string('agudes_visual');
            $table->string('campo_visual');
            $table->string('forma');
            $table->string('color');
            $table->string('tamano');
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
        Schema::dropIfExists('visuales');
    }
}
