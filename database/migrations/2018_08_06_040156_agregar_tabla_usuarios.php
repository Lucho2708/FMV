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
            $table->increments('id');
            $table-> string('nombres',45);
            $table-> string('apellidos',45);
            $table-> enum('tipo_documento',['CC','CE','TI','RC']);
            $table-> integer('documento');
            $table-> string('direccion',50);
            $table-> integer('telefono');
            $table-> string('email',50)->unique();
            $table-> string('usuario',40);
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
