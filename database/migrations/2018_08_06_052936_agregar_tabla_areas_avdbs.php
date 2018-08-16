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
            $table->enum('alimentacion',['indepediente','semindepediente','dependiente']);
            $table->enum('vestido',['indepediente','semindepediente','dependiente']);
            $table->enum('higiene_mayor',['indepediente','semindepediente','dependiente']);
            $table->enum('higiene_menor',['indepediente','semindepediente','dependiente']);
            $table->enum('desplazamiento',['indepediente','semindepediente','dependiente']);
            $table->string('observacion',100);
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
