<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\ProductoAliado;
use Faker\Generator as Faker;

$factory->define(ProductoAliado::class, function (Faker $faker) {
    return [
        'cod_producto_admon' => rand (1,40),
        'id_aliado' => rand (1,5),
        'cantidad' => rand (10,20),
        'preciosubmedida' => rand (1200,10000),
        'stockminimo' => 10,
        'estado' => 1,
    ];
});
