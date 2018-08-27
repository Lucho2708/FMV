<?php

use Faker\Generator as Faker;
use App\Paciente;

$factory->define(Paciente::class, function (Faker $faker) {
    return [
        "nombres" => $faker->firstName,
        "apellidos"=> $faker->lastName,
        "tipo_documento"=>$faker->randomElement(array('CC','CE','TI','RC')),
        "documento"=> $faker->unique()->ean8,
        "fecha_nacimiento"=>$faker->date($format = 'Y-m-d', $max = 'now'),
        "estado_civil"=>$faker->randomElement(array('soltero(a)','casado(a)','viudo(a)', 'union_libre')),
        "hijos"=>$faker->numberBetween($min=1, $max=20),
        "alias"=>$faker->firstName,
        "estudios"=>$faker->randomElement(array('primaria','secundaria','universitario','ninguno')),
        "genero"=>$faker->randomElement(array('masculino','femenino')),
        "rh"=>$faker->randomElement(array('A+','A-','B+','B-','O+','O-','AB+','AB-')),
        "senales"=>$faker->text($maxNbChars = 200),
        "avatar"=>$faker->imageUrl($width = 640, $height = 480),
        "user_id"=>$faker->numberBetween($min=1, $max=200),
        "acudiente_id"=>$faker->numberBetween($min=1, $max=200),
        "eps_id"=>$faker->numberBetween($min=1, $max=120),
        "ubicacion_id"=>$faker->numberBetween($min=1, $max=1120),
    ];
});
