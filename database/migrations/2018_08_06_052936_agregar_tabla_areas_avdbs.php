<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AgregarTablaAreasAvdbs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('areas_avdbs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('alimentacion');
            $table->string('vestido');
            $table->string('higiene_mayor');
            $table->string('higiene_menor');
            $table->string('desplazamiento');
            $table->string('observacion');
            $table->unsignedInteger('eto_id');

            $table->foreign('eto_id')->references('id')->on('evaluaciones_terapias_ocupacionales');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('areas_avdbs');
    }
}
