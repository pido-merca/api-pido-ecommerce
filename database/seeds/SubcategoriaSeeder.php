<?php

use Illuminate\Database\Seeder;
use App\Models\Subcategoria;

class SubcategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Subcategoria::create([
            'id' => 1,
            'cod_categoria' => 1,
            'nombre_subcategoria' => 'Cárnicos y lácteos',
            'slug' => 'carnicos-y-lacteos',
            'estado' => 1
        ]);

        Subcategoria::create([
            'id' => 2,
            'cod_categoria' => 1,
            'nombre_subcategoria' => 'Congelados',
            'slug' => 'congelados',
            'estado' => 1
        ]);

        Subcategoria::create([
            'id' => 3,
            'cod_categoria' => 1,
            'nombre_subcategoria' => 'Granos y abarrotes',
            'slug' => 'granos-y-abarrotes',
            'estado' => 1
        ]);

        Subcategoria::create([
            'id' => 4,
            'cod_categoria' => 1,
            'nombre_subcategoria' => 'Bebidas y licores',
            'slug' => 'bebidas-y-licores',
            'estado' => 1
        ]);

        Subcategoria::create([
            'id' => 5,
            'cod_categoria' => 1,
            'nombre_subcategoria' => 'Frutas y verduras',
            'slug' => 'frutas-y-verduras',
            'estado' => 1
        ]);

        Subcategoria::create([
            'id' => 6,
            'cod_categoria' => 1,
            'nombre_subcategoria' => 'Celulares y electrónica',
            'slug' => 'celulares-y-electronica',
            'estado' => 1
        ]);

        Subcategoria::create([
            'id' => 7,
            'cod_categoria' => 2,
            'nombre_subcategoria' => 'Limpieza',
            'slug' => 'limpieza-y-aseo',
            'estado' => 1
        ]);

        Subcategoria::create([
            'id' => 8,
            'cod_categoria' => 2,
            'nombre_subcategoria' => 'Accesorios bioseguridad',
            'slug' => 'accesorios-bioseguridad',
            'estado' => 1
        ]);

        Subcategoria::create([
            'id' => 9,
            'cod_categoria' => 2,
            'nombre_subcategoria' => 'Artefactos y alimentos de animales',
            'slug' => 'artefactos-y-alimentos-animales',
            'estado' => 1
        ]);

        Subcategoria::create([
            'id' => 10,
            'cod_categoria' => 2,
            'nombre_subcategoria' => 'Ferretería',
            'slug' => 'ferreteria',
            'estado' => 1
        ]);

        Subcategoria::create([
            'id' => 11,
            'cod_categoria' => 2,
            'nombre_subcategoria' => 'Medicina veterinaria',
            'slug' => 'medicina-veterinaria',
            'estado' => 1
        ]);

        Subcategoria::create([
            'id' => 12,
            'cod_categoria' => 2,
            'nombre_subcategoria' => 'Agroquímicos y semillas',
            'slug' => 'agroquimicos-y-semillas',
            'estado' => 1
        ]);

        Subcategoria::create([
            'id' => 13,
            'cod_categoria' => 2,
            'nombre_subcategoria' => 'Cósmeticos e higiene',
            'slug' => 'cosmeticos-e-higiene',
            'estado' => 1
        ]);

        Subcategoria::create([
            'id' => 14,
            'cod_categoria' => 2,
            'nombre_subcategoria' => 'Niños y bebes',
            'slug' => 'ninos-y-bebes',
            'estado' => 1
        ]);

        Subcategoria::create([
            'id' => 15,
            'cod_categoria' => 2,
            'nombre_subcategoria' => 'Medicamentos y salud',
            'slug' => 'medicina-y-salud',
            'estado' => 1
        ]);

        Subcategoria::create([
            'id' => 16,
            'cod_categoria' => 3,
            'nombre_subcategoria' => 'Cómida rápida',
            'slug' => 'comida-rapida',
            'estado' => 1
        ]);

        Subcategoria::create([
            'id' => 17,
            'cod_categoria' => 3,
            'nombre_subcategoria' => 'Jugos naturales',
            'slug' => 'jugos-naturales',
            'estado' => 1
        ]);

        Subcategoria::create([
            'id' => 18,
            'cod_categoria' => 3,
            'nombre_subcategoria' => 'Tortas y postres',
            'slug' => 'postres-y-tortas',
            'estado' => 1
        ]);

        Subcategoria::create([
            'id' => 19,
            'cod_categoria' => 3,
            'nombre_subcategoria' => 'Panadería',
            'slug' => 'panaderia',
            'estado' => 1
        ]);

        Subcategoria::create([
            'id' => 20,
            'cod_categoria' => 3,
            'nombre_subcategoria' => 'Cómida saludable',
            'slug' => 'comida-saludable',
            'estado' => 1
        ]);

        Subcategoria::create([
            'id' => 21,
            'cod_categoria' => 3,
            'nombre_subcategoria' => 'Alimentos preparados',
            'slug' => 'alimentos-preparados',
            'estado' => 1
        ]);
        
        Subcategoria::create([
            'id' => 22,
            'cod_categoria' => 3,
            'nombre_subcategoria' => 'Mecatos y golosinas',
            'slug' => 'mecatos-y-golosinas',
            'estado' => 1
        ]);

    }
}
