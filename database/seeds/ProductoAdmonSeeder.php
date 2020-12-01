<?php

use Illuminate\Database\Seeder;

class ProductoAdmonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('producto_admon')->insert([
            'id' => 1,
            'cod_marca' => 2,
            'cod_categoria' => 4,
            'cod_submedida' => 3,
            'nombre' => 'producto 1',
            'descripcion' => 'descripción 1',
            'imagen' => 'public/producto_admon/img_1.jpg'

        ]);

        DB::table('producto_admon')->insert([
            'id' => 2,
            'cod_marca' => 3,
            'cod_categoria' => 5,
            'cod_submedida' => 4,
            'nombre' => 'producto 2',
            'descripcion' => 'descripción 2',
            'imagen' => 'public/producto_admon/img_2.jpg'

        ]);

        DB::table('producto_admon')->insert([
            'id' => 3,
            'cod_marca' => 4,
            'cod_categoria' => 1,
            'cod_submedida' => 5,
            'nombre' => 'producto 3',
            'descripcion' => 'descripción 3',
            'imagen' => 'public/producto_admon/img_3.jpg'

        ]);

        DB::table('producto_admon')->insert([
            'id' => 4,
            'cod_marca' => 5,
            'cod_categoria' => 2,
            'cod_submedida' => 1,
            'nombre' => 'producto 4',
            'descripcion' => 'descripción 4',
            'imagen' => 'public/producto_admon/img_4.jpg'

        ]);

        DB::table('producto_admon')->insert([
            'id' => 5,
            'cod_marca' => 1,
            'cod_categoria' => 3,
            'cod_submedida' => 2,
            'nombre' => 'producto 5',
            'descripcion' => 'descripción 5',
            'imagen' =>  'public/producto_admon/img_5.jpg'
        ]);

    }
}