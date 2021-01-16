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
            'cod_categoria' => 5,
            'cod_submedida' => 1,
            'nombre' => 'Manzanas',
            'descripcion' => 'descripción 5',
            'imagen' =>  'apple.jpg'
        ]);

    }
}