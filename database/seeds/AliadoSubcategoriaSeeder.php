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
    }
}

