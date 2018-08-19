<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AgregarTablaAcudientes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acudientes', function (Blueprint $table) {
            $table-> increments('id');
            $table-> string('nombres',45);
            $table-> string('apellidos',45);
            $table-> enum('tipo_documento',['CC','CE','TI','RC']);
            $table-> integer('documento');
            $table-> string('direccion',50);
            $table-> integer('telefono');
            $table-> string('email',50)->unique();
            $table-> string('empresa_labora',50);
            $table-> string('profesion',50);
            $table-> enum('parentesco',['madre','padre','tio(a)','primo(a)','amigo(a)']);
            $table-> unsignedInteger('ubicacion_id')->unsigned();

            $table->foreign('ubicacion_id')->references('id')->on('ubicaciones');
            $table-> timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('acudientes');
    }
}
