<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Produto::class, function (Faker\Generator $faker) {
    return [
        'categoria_id' => rand(1,6),
        'nome' => $faker->words($nb = 3, $asText = true),
        'codigo' => $faker->numerify('######') ,
        'texto' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
        'valor' => $faker->randomFloat($nbMaxDecimals = 2, $min = 100, $max = 400),
    ];
});

$factory->define(App\Cliente::class, function (Faker\Generator $faker) {
    return [
        'nome' => $faker->firstName . ' ' . $faker->lastName,
        'email' => $faker->freeEmail,
        'cpf' => $faker->numerify('###.###.###-##')
    ];
});

$factory->define(App\Pedido::class, function (Faker\Generator $faker) {
    return [
        'status_id' => rand(1,5),
        'cliente_id' => rand(1,20),
        'frete_id' => rand(1,2),
        'forma_pagamento_id' => rand(1,2),
        'valor_frete' => $faker->randomFloat($nbMaxDecimals = 2, $min = 10, $max = 30),
        'valor_total' => $faker->randomFloat($nbMaxDecimals = 2, $min = 100, $max = 600),
    ];
});