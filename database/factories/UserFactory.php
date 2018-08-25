<?php

use Faker\Generator as Faker;
use Faker\Provider\Base;
use Faker\Provider\en_US\Person;
use App\User;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        "nombres" => $faker->firstName,
        "apellidos"=> $faker->lastName,
        "documento"=> $faker->unique()->ean8,
        "usuario"=>$faker->userName,
        "direccion"=>$faker->streetAddress,
        "telefono"=>$faker->ean8,
        "tipo_documento"=>$faker->randomElement(array('CC','CE','TI','RC')),
        "email" => $faker->unique()->safeEmail,
        "avatar"=>'user.png',
        "perfil"=>$faker->randomElement(array('admin','director', 'social','psicologa','terapeuta')),
        "password" => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        "remember_token" => str_random(10),
    ];
});
