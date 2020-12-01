<?php

use Illuminate\Database\Seeder;

class SubmedidaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('submedida')->insert([
            'id' => 1,
            'cod_medida' => 3,
            'nom_submedida' => 'submedida 1'

        ]);

        DB::table('submedida')->insert([
            'id' => 2,
            'cod_medida' => 4,
            'nom_submedida' => 'submedida 2'

        ]);

        DB::table('submedida')->insert([
            'id' => 3,
            'cod_medida' => 5,
            'nom_submedida' => 'submedida 3'

        ]);

        DB::table('submedida')->insert([
            'id' => 4,
            'cod_medida' => 1,
            'nom_submedida' => 'submedida 4'

        ]);

        DB::table('submedida')->insert([
            'id' => 5,
            'cod_medida' => 2,
            'nom_submedida' => 'submedida 5'

        ]);
    }
}
