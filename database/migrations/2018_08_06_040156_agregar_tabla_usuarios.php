<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AgregarTablaUsuarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table-> string('nombres');
            $table-> string('apellidos');
            $table-> enum('tipo_documento',['CC','CE','TI','RC']);
            $table-> integer('documento')->unsigned();
            $table-> string('direccion');
            $table-> integer('telefono')->unsigned();
            $table-> string('email',100)->unique();
            $table-> string('usuario',100)->unique();
            $table-> string('password');
            $table-> string('avatar')->default('user.png');
            $table-> enum('perfil',['admin','director', 'social','psicologa','terapeuta']);
            $table-> rememberToken();
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
        Schema::dropIfExists('users');
    }
}
