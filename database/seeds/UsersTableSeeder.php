<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	App\User::create([
	    	'nombres'=>"Luis Eduardo",
			'apellidos'=>"Silva Rodriguez",
			'email'=>"luis.silva.2708@gmail.com",
			'tipo_documento'=>"CC",
			'documento'=>"1070608568",
			'direccion'=>"Mz I Casa 6 Br/ Nuestra Sra del Carmen",
			'telefono'=>"8885338",
			'password'=>bcrypt('123456789'),
			'usuario'=>"luis.silva.2708",
			'avatar'=>"user.png",
			'perfil'=>"Administrador",
		]);   
    }
}
