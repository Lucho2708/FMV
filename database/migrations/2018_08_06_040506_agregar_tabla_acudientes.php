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
            $table-> string('nombres');
            $table-> string('apellidos');
            $table-> string('tipo_documento',2);
            $table-> integer('documento');
            $table-> string('direccion');
            $table-> integer('telefono');
            $table-> string('email');
            $table-> string('empresa_labora');
            $table-> string('profesion');
            $table-> string('parentesco');
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
