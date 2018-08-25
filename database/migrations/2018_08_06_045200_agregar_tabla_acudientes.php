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
            $table-> increments('id')->unsigned();
            $table-> string('nombres');
            $table-> string('apellidos');
            $table-> enum('tipo_documento',['CC','CE','TI','RC']);
            $table-> integer('documento')->unsigned();
            $table-> string('direccion');
            $table-> integer('telefono')->unsigned();
            $table-> string('email',100)->unique();
            $table-> string('empresa_labora');
            $table-> string('profesion');
            $table-> enum('parentesco',['madre','padre','hijo(a)','tio(a)','primo(a)','amigo(a)']);
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
