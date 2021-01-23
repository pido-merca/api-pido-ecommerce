<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MarcaSeeder extends Seeder
{
   
    public function run(){
        
        DB::table('marca')->insert([
            'id' => 1,
            'nombre' => 'Golosinas'

        ]);

        DB::table('marca')->insert([
            'id' => 2,
            'nombre' => 'Bimbo'

        ]);

        DB::table('marca')->insert([
            'id' => 3,
            'nombre' => 'Jumbo'

        ]);

        DB::table('marca')->insert([
            'id' => 4,
            'nombre' => 'Pantene'

        ]);

        DB::table('marca')->insert([
            'id' => 5,
            'nombre' => 'Arroa'

        ]);

        DB::table('marca')->insert([
            'id' => 6,
            'nombre' => 'Sin Marca'

        ]);

    }
}
