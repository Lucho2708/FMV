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
            $table-> string('nombres',45);
            $table-> string('apellidos',45);
            $table-> enum('tipo_documento',['CC'.'CE'.'TI'.'RC']);
            $table-> integer('documento');
            $table-> date('fecha_nacimiento');
            $table-> enum('estado_civil',['casado(a)','soltero(a)','viudo(a)']);
            $table-> integer('hijos');
            $table-> string('alias',50);
            $table-> enum('estudios',['primaria','secundaria','universitario','ninguno']);
            $table-> enum('genero',['masculino','femenino']);
            $table-> string('rh' ,3);
            $table-> string('senales',50);
            $table-> string('foto',100);
            $table-> unsignedInteger('user_id')->unsigned();
            $table-> unsignedInteger('acudiente_id')->unsigned();
            $table-> unsignedInteger('eps_id')->unsigned();
            $table-> unsignedInteger('ubicacion_id')->unsigned();

            $table->foreign('user_id')->references('id')->on('users');
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
