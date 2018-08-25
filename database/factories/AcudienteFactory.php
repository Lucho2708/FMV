<?php

use Faker\Generator as Faker;
use App\Acudiente;

$factory->define(Acudiente::class, function (Faker $faker) {
    return [
        "nombres" => $faker->firstName,
        "apellidos"=> $faker->lastName,
        "tipo_documento"=>$faker->randomElement(array('CC','CE','TI','RC')),
        "documento"=> $faker->unique()->ean8,
        "direccion"=>$faker->streetAddress,
        "telefono"=>$faker->ean8,
        "email" => $faker->unique()->safeEmail,
        "empresa_labora"=>$faker->company,
        "profesion"=>$faker->jobTitle,
        "parentesco"=>$faker->randomElement(array('madre','padre','hijo(a)','tio(a)','primo(a)','amigo(a)')),
        "ubicacion_id"=>$faker->numberBetween($min=1, $max=1120),
    ];
});
