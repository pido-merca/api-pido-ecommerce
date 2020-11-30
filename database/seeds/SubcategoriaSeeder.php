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
            'cod_categoria' => 2,
            'nombre_subcategoria' => 'Congelados',
            'slug' => 'congelados',
            'estado' => 1
        ]);

        Subcategoria::create([
            'id' => 3,
            'cod_categoria' => 3,
            'nombre_subcategoria' => 'Granos y abarrotes',
            'slug' => 'granos-y-abarrotes',
            'estado' => 1
        ]);

        Subcategoria::create([
            'id' => 4,
            'cod_categoria' => 4,
            'nombre_subcategoria' => 'Bebidas y licores',
            'slug' => 'bebidas-y-licores',
            'estado' => 1
        ]);

        Subcategoria::create([
            'id' => 5,
            'cod_categoria' => 5,
            'nombre_subcategoria' => 'Frutas y verduras',
            'slug' => 'frutas-y-verduras',
            'estado' => 1
        ]);

    }
}
