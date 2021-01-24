<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            'cod_marca' => 1,
            'cod_categoria' => 1,
            'cod_submedida' => 1,
            'nombre' => 'Pechuga de pollo fresca x 500 grs',
            'descripcion' => 'Pechuga de pollo fresca',
            'imagen' =>  '974060_G.jpg'
        ]);

        DB::table('producto_admon')->insert([
            'id' => 2,
            'cod_marca' => 1,
            'cod_categoria' => 1,
            'cod_submedida' => 1,
            'nombre' => 'Muslo pollo fresco x 500 grs',
            'descripcion' => 'Muslo de pollo fresco',
            'imagen' =>  'muslo-pollo-fresco.jpg'
        ]);

        DB::table('producto_admon')->insert([
            'id' => 3,
            'cod_marca' => 1,
            'cod_categoria' => 1,
            'cod_submedida' => 1,
            'nombre' => 'Contra muslo de pollo fresco x 500 grs',
            'descripcion' => 'Contra muslo de pollo fresco',
            'imagen' =>  'depositphotos_3512906-stock-photo-raw-chicken-legs.jpg'
        ]);

        DB::table('producto_admon')->insert([
            'id' => 4,
            'cod_marca' => 1,
            'cod_categoria' => 1,
            'cod_submedida' => 1,
            'nombre' => 'Muslo y contramuslo fresco x 500 grs',
            'descripcion' => 'Muslo y contramuslo fresco',
            'imagen' =>  'chicken-breast-279848_1280.jpg'
        ]);

        DB::table('producto_admon')->insert([
            'id' => 5,
            'cod_marca' => 1,
            'cod_categoria' => 1,
            'cod_submedida' => 1,
            'nombre' => 'Ala completa x 500 grs',
            'descripcion' => 'Ala completa',
            'imagen' =>  'alas-pollo-fresca.jpg'
        ]);

        DB::table('producto_admon')->insert([
            'id' => 6,
            'cod_marca' => 1,
            'cod_categoria' => 1,
            'cod_submedida' => 1,
            'nombre' => 'Filete de pechuga sin piel x 500 grs',
            'descripcion' => 'Filete de pechuga sin piel',
            'imagen' =>  'filetes-crudos-pechuga-pollo-piel-tabla-cortar_73511-66.jpg'
        ]);

        DB::table('producto_admon')->insert([
            'id' => 7,
            'cod_marca' => 1,
            'cod_categoria' => 1,
            'cod_submedida' => 1,
            'nombre' => 'Pechuga congelada x 500 grs',
            'descripcion' => 'Pechuga congelada',
            'imagen' =>  'pechuga-congelada.jpg'
        ]);

        DB::table('producto_admon')->insert([
            'id' => 8,
            'cod_marca' => 1,
            'cod_categoria' => 1,
            'cod_submedida' => 1,
            'nombre' => 'Queso costeño blando bajo de sal x 500 grs',
            'descripcion' => 'Queso costeño blando',
            'imagen' =>  '-nacl-queso-costeño-picado.jpg'
        ]);

        DB::table('producto_admon')->insert([
            'id' => 9,
            'cod_marca' => 1,
            'cod_categoria' => 1,
            'cod_submedida' => 1,
            'nombre' => 'Queso costeño duro x 500 grs',
            'descripcion' => 'Queso costeño duro',
            'imagen' =>  'CECOG100416010.jpg'
        ]);

        DB::table('producto_admon')->insert([
            'id' => 10,
            'cod_marca' => 1,
            'cod_categoria' => 1,
            'cod_submedida' => 1,
            'nombre' => 'Lomo de cerdo x 500 grs',
            'descripcion' => 'lomo-de-cerdo-6.jpg',
            'imagen' =>  'lomo-de-cerdo-6.jpg'
        ]);

    }
}