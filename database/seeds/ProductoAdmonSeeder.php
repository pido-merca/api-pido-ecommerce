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
            'cod_categoria' => 5,
            'nombre' => 'Manzanas',
            'descripcion' => 'descripción 5',
            'imagen' =>  'apple.jpg'
        ]);

        DB::table('producto_admon')->insert([
            'id' => 2,
            'cod_categoria' => 5,
            'nombre' => 'Uvas',
            'descripcion' => 'descripción 5',
            'imagen' =>  'grape.jpg'
        ]);


        DB::table('producto_admon')->insert([
            'id' => 3,
            'cod_categoria' => 5,
            'nombre' => 'Fresas',
            'descripcion' => 'descripción 5',
            'imagen' =>  'cherry.jpg'
        ]);


        DB::table('producto_admon')->insert([
            'id' => 4,
            'cod_categoria' => 5,
            'nombre' => 'Manzanas',
            'descripcion' => 'descripción 5',
            'imagen' =>  'apple.jpg.jpg'
        ]);


        DB::table('producto_admon')->insert([
            'id' => 5,
            'cod_categoria' => 5,
            'nombre' => 'Frambuesas',
            'descripcion' => 'descripción 5',
            'imagen' =>  'blackberry.jpg'
        ]);

        DB::table('producto_admon')->insert([
            'id' => 6,
            'cod_categoria' => 5,
            'nombre' => 'Lulo',
            'descripcion' => 'descripción 5',
            'imagen' =>  'lulo.jpg'
        ]);

        DB::table('producto_admon')->insert([
            'id' => 7,
            'cod_categoria' => 5,
            'nombre' => 'Mango',
            'descripcion' => 'descripción 5',
            'imagen' =>  'mango.jpg'
        ]);


        DB::table('producto_admon')->insert([
            'id' => 8,
            'cod_categoria' => 5,
            'nombre' => 'Naranja',
            'descripcion' => 'descripción 5',
            'imagen' =>  'orange.jpg'
        ]);


        DB::table('producto_admon')->insert([
            'id' => 9,
            'cod_categoria' => 5,
            'nombre' => 'Papaya',
            'descripcion' => 'descripción 5',
            'imagen' =>  'papaya.jpg'
        ]);


        DB::table('producto_admon')->insert([
            'id' => 10,
            'cod_categoria' => 5,
            'nombre' => 'Pera',
            'descripcion' => 'descripción 5',
            'imagen' =>  'pear.jpg'
        ]);

        DB::table('producto_admon')->insert([
            'id' => 11,
            'cod_categoria' => 3,
            'cod_submedida' => 2,
            'nombre' => 'Lentejas',
            'descripcion' => 'descripción 1',
            'imagen' => 'lentil.jpg'

        ]);

        DB::table('producto_admon')->insert([
            'id' => 12,
            'cod_categoria' => 3,
            'cod_submedida' => 2,
            'nombre' => 'Harina',
            'descripcion' => 'descripción 1',
            'imagen' => 'flour.jpg'

        ]);

        DB::table('producto_admon')->insert([
            'id' => 13,
            'cod_categoria' => 3,
            'cod_submedida' => 2,
            'nombre' => 'Maiz',
            'descripcion' => 'descripción 1',
            'imagen' => 'corn.jpg'

        ]);

        DB::table('producto_admon')->insert([
            'id' => 14,
            'cod_categoria' => 3,
            'cod_submedida' => 2,
            'nombre' => 'Avena',
            'descripcion' => 'descripción 1',
            'imagen' => 'oats.jpg'

        ]);


        DB::table('producto_admon')->insert([
            'id' => 15,
            'cod_categoria' => 3,
            'cod_submedida' => 2,
            'nombre' => 'Azúcar',
            'descripcion' => 'descripción 1',
            'imagen' => 'sugar.jpg'

        ]);

        DB::table('producto_admon')->insert([
            'id' => 16,
            'cod_categoria' => 3,
            'cod_submedida' => 2,
            'nombre' => 'Arroz',
            'descripcion' => 'descripción 1',
            'imagen' => 'rice.jpg'

        ]);


        DB::table('producto_admon')->insert([
            'id' => 17,
            'cod_categoria' => 3,
            'cod_submedida' => 2,
            'nombre' => 'Sal',
            'descripcion' => 'descripción 1',
            'imagen' => 'salt.jpg'
        ]);

        DB::table('producto_admon')->insert([
            'id' => 18,
            'cod_categoria' => 7,
            'nombre' => 'Limpiador de ventanas',
            'descripcion' => 'descripción 5',
            'imagen' =>  'window_cleaner.jpg'
        ]);

        DB::table('producto_admon')->insert([
            'id' => 19,
            'cod_categoria' => 7,
            'nombre' => 'Jabón de lavar',
            'descripcion' => 'descripción 5',
            'imagen' =>  'laundry_soap.jpg'
        ]);

        DB::table('producto_admon')->insert([
            'id' => 20,
            'cod_categoria' => 7,
            'nombre' => 'Jabón de cocina',
            'descripcion' => 'descripción 5',
            'imagen' =>  'kitchen_soap.jpg'
        ]);

        DB::table('producto_admon')->insert([
            'id' => 21,
            'cod_categoria' => 7,
            'nombre' => 'Desinfectante',
            'descripcion' => 'descripción 5',
            'imagen' =>  'disinfectant.jpg'
        ]);

        DB::table('producto_admon')->insert([
            'id' => 22,
            'cod_categoria' => 7,
            'nombre' => 'Raid Max',
            'descripcion' => 'descripción 5',
            'imagen' =>  'clean_furniture.jpg'
        ]);

        DB::table('producto_admon')->insert([
            'id' => 23,
            'cod_categoria' => 7,
            'nombre' => 'Limpia Pisos',
            'descripcion' => 'descripción 5',
            'imagen' =>  'clean_floors.jpg'
        ]);

        DB::table('producto_admon')->insert([
            'id' => 24,
            'cod_categoria' => 1,
            'cod_submedida' => 2,
            'nombre' => 'Carne de res',
            'descripcion' => 'descripción 1',
            'imagen' => 'pexels-markus-spiske-112781.jpg'
        ]);

        DB::table('producto_admon')->insert([
            'id' => 25,
            'cod_categoria' => 1,
            'cod_submedida' => 2,
            'nombre' => 'Carne de cerdo',
            'descripcion' => 'descripción 1',
            'imagen' => 'pexels-pixelme-stock-photography-2773942.jpg'
        ]);

        DB::table('producto_admon')->insert([
            'id' => 26,
            'cod_categoria' => 1,
            'cod_submedida' => 2,
            'nombre' => 'Carne de res',
            'descripcion' => 'descripción 1',
            'imagen' => 'pexels-engin-akyurt-2042564.jpg'
        ]);

        DB::table('producto_admon')->insert([
            'id' => 27,
            'cod_categoria' => 1,
            'cod_submedida' => 2,
            'nombre' => 'Carne de res',
            'descripcion' => 'descripción 1',
            'imagen' => 'pexels-olya-kobruseva-5769381.jpg'
        ]);

        DB::table('producto_admon')->insert([
            'id' => 28,
            'cod_categoria' => 1,
            'cod_submedida' => 2,
            'nombre' => 'Carne de res',
            'descripcion' => 'descripción 1',
            'imagen' => 'pexels-luis-quintero-1857729.jpg'
        ]);
        
        DB::table('producto_admon')->insert([
            'id' => 29,
            'cod_categoria' => 13,
            'nombre' => 'Hilo dental',
            'descripcion' => 'descripción 1',
            'imagen' => 'dental_floss.jpg'
        ]);

        DB::table('producto_admon')->insert([
            'id' => 30,
            'cod_categoria' => 13,
            'nombre' => 'Acondicionador',
            'descripcion' => 'descripción 1',
            'imagen' => 'conditioner.jpg'
        ]);

        DB::table('producto_admon')->insert([
            'id' => 31,
            'cod_categoria' => 13,
            'nombre' => 'Anti transpirante Mujer',
            'descripcion' => 'descripción 1',
            'imagen' => 'antiperspirant_woman.jpg'
        ]);

        DB::table('producto_admon')->insert([
            'id' => 32,
            'cod_categoria' => 13,
            'nombre' => 'Anti transpirante',
            'descripcion' => 'descripción 1',
            'imagen' => 'antiperspirant_man.jpg'
        ]);

        DB::table('producto_admon')->insert([
            'id' => 33,
            'cod_categoria' => 13,
            'nombre' => 'Jabón de liquido',
            'descripcion' => 'descripción 1',
            'imagen' => 'hand_soap.jpg'
        ]);

        DB::table('producto_admon')->insert([
            'id' => 34,
            'cod_categoria' => 13,
            'nombre' => 'Jabón de baño',
            'descripcion' => 'descripción 1',
            'imagen' => 'bath_soap.jpg'
        ]);

        DB::table('producto_admon')->insert([
            'id' => 35,
            'cod_categoria' => 13,
            'nombre' => 'Listerine',
            'descripcion' => 'descripción 1',
            'imagen' => 'mouthwash.jpg'
        ]);

        DB::table('producto_admon')->insert([
            'id' => 36,
            'cod_categoria' => 13,
            'nombre' => 'Shampoo',
            'descripcion' => 'descripción 1',
            'imagen' => 'shampoo.jpg'
        ]);

        DB::table('producto_admon')->insert([
            'id' => 37,
            'cod_categoria' => 13,
            'nombre' => 'Papel de baño',
            'descripcion' => 'descripción 1',
            'imagen' => 'toilet_paper.jpg'
        ]);

        DB::table('producto_admon')->insert([
            'id' => 38,
            'cod_categoria' => 13,
            'nombre' => 'Prestobarba',
            'descripcion' => 'descripción 1',
            'imagen' => 'shaver.jpg'
        ]);

        DB::table('producto_admon')->insert([
            'id' => 39,
            'cod_categoria' => 13,
            'nombre' => 'Colgate',
            'descripcion' => 'descripción 1',
            'imagen' => 'toohtpaste.jpg'
        ]);

        DB::table('producto_admon')->insert([
            'id' => 40,
            'cod_categoria' => 13,
            'nombre' => 'Cepillo',
            'descripcion' => 'descripción 1',
            'imagen' => 'toothbrush.jpg'
        ]);



      

    }
}