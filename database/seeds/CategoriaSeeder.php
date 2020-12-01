<?php

use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categoria')->insert([
            'id' => 1,
            'nombre' => 'categoria 1'

        ]);

        DB::table('categoria')->insert([
            'id' => 2,
            'nombre' => 'categoria 2'

        ]);

        DB::table('categoria')->insert([
            'id' => 3,
            'nombre' => 'categoria 3'

        ]);

        DB::table('categoria')->insert([
            'id' => 4,
            'nombre' => 'categoria 4'

        ]);

        DB::table('categoria')->insert([
            'id' => 5,
            'nombre' => 'categoria 5'

        ]);

    }
}
