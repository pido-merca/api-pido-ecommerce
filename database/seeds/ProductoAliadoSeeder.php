<?php

use Illuminate\Database\Seeder;
use App\Models\ProductoAliado;

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
            'preciosubmedida' => 1000,
            'stockminimo' => 2,
            'estado' =>  '0'
        ]);

        DB::table('producto_aliado')->insert([
            'id' => 2,
            'cod_producto_admon' => 2,
            'id_aliado' => 1,
            'cantidad' => 10,
            'preciosubmedida' => 2000,
            'stockminimo' => 4,
            'estado' =>  '0'
        ]);

        DB::table('producto_aliado')->insert([
            'id' => 3,
            'cod_producto_admon' => 3,
            'id_aliado' => 1,
            'cantidad' => 15,
            'preciosubmedida' => 3000,
            'stockminimo' => 6,
            'estado' =>  '0'
        ]);

        DB::table('producto_aliado')->insert([
            'id' => 4,
            'cod_producto_admon' => 4,
            'id_aliado' => 1,
            'cantidad' => 20,
            'preciosubmedida' => 4000,
            'stockminimo' => 8,
            'estado' =>  '0'
        ]);

        DB::table('producto_aliado')->insert([
            'id' => 5,
            'cod_producto_admon' => 5,
            'id_aliado' => 1,
            'cantidad' => 25,
            'preciosubmedida' => 5000,
            'stockminimo' => 10,
            'estado' =>  '0'
        ]);
    }
}
