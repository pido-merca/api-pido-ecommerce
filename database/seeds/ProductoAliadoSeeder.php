<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductoAliadoSeeder extends Seeder
{

    public function run()
    {
        // factory(ProductoAliado::class, 10)->create();

        DB::table('producto_aliado')->insert([
            'id' => 1,
            'cod_producto_admon' => 1,
            'id_aliado' => 1,
            'cantidad' => 5,
            'preciosubmedida' => 4000,
            'stockminimo' => 2,
            'estado' =>  '1'
        ]);

        DB::table('producto_aliado')->insert([
            'id' => 2,
            'cod_producto_admon' => 2,
            'id_aliado' => 1,
            'cantidad' => 10,
            'preciosubmedida' => 2500,
            'stockminimo' => 4,
            'estado' =>  '1'
        ]);

        DB::table('producto_aliado')->insert([
            'id' => 3,
            'cod_producto_admon' => 3,
            'id_aliado' => 1,
            'cantidad' => 15,
            'preciosubmedida' => 2500,
            'stockminimo' => 6,
            'estado' =>  '1'
        ]);

        DB::table('producto_aliado')->insert([
            'id' => 4,
            'cod_producto_admon' => 4,
            'id_aliado' => 1,
            'cantidad' => 20,
            'preciosubmedida' => 2400,
            'stockminimo' => 8,
            'estado' =>  '1'
        ]);

        DB::table('producto_aliado')->insert([
            'id' => 5,
            'cod_producto_admon' => 5,
            'id_aliado' => 1,
            'cantidad' => 25,
            'preciosubmedida' => 2400,
            'stockminimo' => 10,
            'estado' =>  '1'
        ]);

        DB::table('producto_aliado')->insert([
            'id' => 6,
            'cod_producto_admon' => 6,
            'id_aliado' => 1,
            'cantidad' => 25,
            'preciosubmedida' => 6000,
            'stockminimo' => 10,
            'estado' =>  '1'
        ]);

        DB::table('producto_aliado')->insert([
            'id' => 7,
            'cod_producto_admon' => 7,
            'id_aliado' => 1,
            'cantidad' => 25,
            'preciosubmedida' => 3800,
            'stockminimo' => 10,
            'estado' =>  '1'
        ]);

        DB::table('producto_aliado')->insert([
            'id' => 8,
            'cod_producto_admon' => 8,
            'id_aliado' => 1,
            'cantidad' => 25,
            'preciosubmedida' => 6000,
            'stockminimo' => 10,
            'estado' =>  '1'
        ]);

        DB::table('producto_aliado')->insert([
            'id' => 9,
            'cod_producto_admon' => 9,
            'id_aliado' => 1,
            'cantidad' => 25,
            'preciosubmedida' => 7000,
            'stockminimo' => 10,
            'estado' =>  '1'
        ]);

        DB::table('producto_aliado')->insert([
            'id' => 10,
            'cod_producto_admon' => 10,
            'id_aliado' => 1,
            'cantidad' => 25,
            'preciosubmedida' => 8000,
            'stockminimo' => 10,
            'estado' =>  '1'
        ]);
    }
}
