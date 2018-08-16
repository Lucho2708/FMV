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
            $table->enum('agudes_visual',['funcional','semifuncional','no funcional']);
            $table->enum('campo_visual',['funcional','semifuncional','no funcional']);
            $table->enum('forma',['funcional','semifuncional','no funcional']);
            $table->enum('color',['funcional','semifuncional','no funcional']);
            $table->enum('tamano',['funcional','semifuncional','no funcional']);
            $table->string('observaciones',100);
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
