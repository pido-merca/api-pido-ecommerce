<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriaSeeder extends Seeder
{

    public function run()
    {
        DB::table('categoria')->insert([
            'id' => 1,
            'nombre' => 'Cárnicos y lácteos',
            'slug' => 'carnicos-y-lacteos',
        ]);

        DB::table('categoria')->insert([
            'id' => 2,
            'nombre' => 'Congelados',
            'slug' => 'congelados',
        ]);

        DB::table('categoria')->insert([
            'id' => 3,
            'nombre' => 'Granos y abarrotes',
            'slug' => 'granos-y-abarrotes',
        ]);

        DB::table('categoria')->insert([
            'id' => 4,
            'nombre' => 'Bebidas y licores',
            'slug' => 'bebidas-y-licores',
        ]);

        DB::table('categoria')->insert([
            'id' => 5,
            'nombre' => 'Frutas y verduras',
            'slug' => 'frutas-y-verduras',
        ]);

        DB::table('categoria')->insert([
            'id' => 6,
            'nombre' => 'Celulares y electrónica',
            'slug' => 'celulares-y-electronica',
        ]);

        DB::table('categoria')->insert([
            'id' => 7,
            'nombre' => 'Limpieza',
            'slug' => 'limpieza-y-aseo',
        ]);

        DB::table('categoria')->insert([
            'id' => 8,
            'nombre' => 'Accesorios bioseguridad',
            'slug' => 'accesorios-bioseguridad',
        ]);

        DB::table('categoria')->insert([
            'id' => 9,
            'nombre' => 'Artefactos y alimentos de animales',
            'slug' => 'artefactos-y-alimentos-animales',
        ]);

        DB::table('categoria')->insert([
            'id' => 10,
            'nombre' => 'Ferretería',
            'slug' => 'ferreteria',
        ]);

        DB::table('categoria')->insert([
            'id' => 11,
            'nombre' => 'Medicina veterinaria',
            'slug' => 'medicina-veterinaria',
        ]);

        DB::table('categoria')->insert([
            'id' => 12,
            'nombre' => 'Agroquímicos y semillas',
            'slug' => 'agroquimicos-y-semillas',
        ]);

        DB::table('categoria')->insert([
            'id' => 13,
            'nombre' => 'Cósmeticos e higiene',
            'slug' => 'cosmeticos-e-higiene',
        ]);

        DB::table('categoria')->insert([
            'id' => 14,
            'nombre' => 'Niños y bebes',
            'slug' => 'ninos-y-bebes',
        ]);

        DB::table('categoria')->insert([
            'id' => 15,
            'nombre' => 'Medicamentos y salud',
            'slug' => 'medicina-y-salud',
        ]);

        DB::table('categoria')->insert([
            'id' => 16,
            'nombre' => 'Cómida rápida',
            'slug' => 'comida-rapida',
        ]);

        DB::table('categoria')->insert([
            'id' => 17,
            'nombre' => 'Jugos naturales',
            'slug' => 'jugos-naturales',
        ]);

        DB::table('categoria')->insert([
            'id' => 18,
            'nombre' => 'Tortas y postres',
            'slug' => 'postres-y-tortas',
        ]);

        DB::table('categoria')->insert([
            'id' => 19,
            'nombre' => 'Panadería',
            'slug' => 'panaderia',
        ]);

        DB::table('categoria')->insert([
            'id' => 20,
            'nombre' => 'Cómida saludable',
            'slug' => 'comida-saludable',
        ]);

        DB::table('categoria')->insert([
            'id' => 21,
            'nombre' => 'Alimentos preparados',
            'slug' => 'alimentos-preparados',
        ]);

        DB::table('categoria')->insert([
            'id' => 22,
            'nombre' => 'Mecatos y golosinas',
            'slug' => 'mecatos-y-golosinas',
        ]);
    }
}
