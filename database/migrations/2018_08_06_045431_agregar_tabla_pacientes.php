<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AgregarTablaPacientes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacientes', function (Blueprint $table) {
            $table->increments('id');
            $table-> string('nombres');
            $table-> string('apellidos');
            $table-> string('tipo_documento',2);
            $table-> integer('documento');
            $table-> date('fecha_nacimiento');
            $table-> string('estado_civil');
            $table-> integer('hijos');
            $table-> string('alias');
            $table-> string('estudios');
            $table-> string('genero');
            $table-> string('rh');
            $table-> string('senales');
            $table-> unsignedInteger('usuario_id')->unsigned();
            $table-> unsignedInteger('acudiente_id')->unsigned();
            $table-> unsignedInteger('eps_id')->unsigned();
            $table-> unsignedInteger('ubicacion_id')->unsigned();

            $table->foreign('usuario_id')->references('id')->on('usuarios');
            $table->foreign('acudiente_id')->references('id')->on('acudientes');
            $table->foreign('eps_id')->references('id')->on('eps');
            $table->foreign('ubicacion_id')->references('id')->on('ubicaciones');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pacientes');
    }
}
