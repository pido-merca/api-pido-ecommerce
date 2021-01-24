<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriaSeeder extends Seeder
{

    public function run()
    {
        DB::table('categoria')->insert([
            'id' => 1,
            'nombre' => 'Cárnicos y lácteos'

        ]);

        DB::table('categoria')->insert([
            'id' => 2,
            'nombre' => 'Congelados'

        ]);

        DB::table('categoria')->insert([
            'id' => 3,
            'nombre' => 'Granos y abarrotes'

        ]);

        DB::table('categoria')->insert([
            'id' => 4,
            'nombre' => 'Bebidas y licores'

        ]);

        DB::table('categoria')->insert([
            'id' => 5,
            'nombre' => 'Frutas y verduras'
        ]);

        DB::table('categoria')->insert([
            'id' => 6,
            'nombre' => 'Celulares y electrónica'

        ]);

        DB::table('categoria')->insert([
            'id' => 7,
            'nombre' => 'Limpieza'

        ]);

        DB::table('categoria')->insert([
            'id' => 8,
            'nombre' => 'Accesorios bioseguridad'

        ]);

        DB::table('categoria')->insert([
            'id' => 9,
            'nombre' => 'Artefactos y alimentos de animales'

        ]);

        DB::table('categoria')->insert([
            'id' => 10,
            'nombre' => 'Ferretería'
        ]);

        DB::table('categoria')->insert([
            'id' => 11,
            'nombre' => 'Medicina veterinaria'

        ]);

        DB::table('categoria')->insert([
            'id' => 12,
            'nombre' => 'Agroquímicos y semillas'

        ]);

        DB::table('categoria')->insert([
            'id' => 13,
            'nombre' => 'Cósmeticos e higiene'

        ]);

        DB::table('categoria')->insert([
            'id' => 14,
            'nombre' => 'Niños y bebes'

        ]);

        DB::table('categoria')->insert([
            'id' => 15,
            'nombre' => 'Medicamentos y salud'
        ]);


        DB::table('categoria')->insert([
            'id' => 16,
            'nombre' => 'Cómida rápida'

        ]);

        DB::table('categoria')->insert([
            'id' => 17,
            'nombre' => 'Jugos naturales'

        ]);

        DB::table('categoria')->insert([
            'id' => 18,
            'nombre' => 'Tortas y postres'

        ]);

        DB::table('categoria')->insert([
            'id' => 19,
            'nombre' => 'Panadería'

        ]);

        DB::table('categoria')->insert([
            'id' => 20,
            'nombre' => 'Cómida saludable'
        ]);

        DB::table('categoria')->insert([
            'id' => 21,
            'nombre' => 'Alimentos preparados'
        ]);

        DB::table('categoria')->insert([
            'id' => 22,
            'nombre' => 'Mecatos y golosinas'
        ]);
    }
}
