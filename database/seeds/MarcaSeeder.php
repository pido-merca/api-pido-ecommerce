<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MarcaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        
        DB::table('marca')->insert([
            'id' => 1,
            'nombre' => 'marca 1'

        ]);

        DB::table('marca')->insert([
            'id' => 2,
            'nombre' => 'marca 2'

        ]);

        DB::table('marca')->insert([
            'id' => 3,
            'nombre' => 'marca 3'

        ]);

        DB::table('marca')->insert([
            'id' => 4,
            'nombre' => 'marca 4'

        ]);

        DB::table('marca')->insert([
            'id' => 5,
            'nombre' => 'marca 5'

        ]);

    }
}
