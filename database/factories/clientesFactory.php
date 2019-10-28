<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\clientes;
use Faker\Generator as Faker;

$factory->define(clientes::class, function (Faker $faker) {

    return [
        'nome' => $faker->word,
        'endereco' => $faker->word,
        'estado' => $faker->word,
        'bairro' => $faker->word,
        'complemento' => $faker->word,
        'localidade' => $faker->word,
        'numero' => $faker->randomDigitNotNull,
        'telefone' => $faker->word,
        'nascimento' => $faker->word,
        'cep' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
