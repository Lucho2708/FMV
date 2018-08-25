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
        factory(App\User::class,200)->create();

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
			'perfil'=>"admin",
		]);

        App\User::create([
            'nombres'=>"Hans",
            'apellidos'=>"Acero Hernandez",
            'email'=>"zonaacero92@gmail.com",
            'tipo_documento'=>"CC",
            'documento'=>"1070606951",
            'direccion'=>"Mz 31 casa 5 Br/ diamante",
            'telefono'=>"8333085",
            'password'=>bcrypt('123456'),
            'usuario'=>"hans.acero26",
            'avatar'=>"user.png",
            'perfil'=>"admin",
        ]);
    }
}
