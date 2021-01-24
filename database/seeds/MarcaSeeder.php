<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MarcaSeeder extends Seeder
{
   
    public function run(){
        
        DB::table('marca')->insert([
            'id' => 1,
            'nombre' => 'Sin Marca'
        ]);

    }
}
