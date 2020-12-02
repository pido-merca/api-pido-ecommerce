<?php

use Illuminate\Database\Seeder;
use App\Models\AliadoSubcategoria;

class AliadoSubcategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         AliadoSubcategoria::create([
            'id' => '1',
            'cod_subcategoria' => '1',
            'cod_aliado' => '1',
            'estado' => '1',
        ]);

         AliadoSubcategoria::create([
            'id' => '2',
            'cod_subcategoria' => '2',
            'cod_aliado' => '2',
            'estado' => '1',
        ]);

         AliadoSubcategoria::create([
            'id' => '3',
            'cod_subcategoria' => '3',
            'cod_aliado' => '3',
            'estado' => '1',
        ]);
        
         AliadoSubcategoria::create([
            'id' => '4',
            'cod_subcategoria' => '4',
            'cod_aliado' => '4',
            'estado' => '1',
        ]);

         AliadoSubcategoria::create([
            'id' => '5',
            'cod_subcategoria' => '5',
            'cod_aliado' => '5',
            'estado' => '1',
        ]);
    }
}

