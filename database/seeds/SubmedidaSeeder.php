<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            'cod_medida' => 2,
            'nom_submedida' => 'Gramo'

        ]);

        DB::table('submedida')->insert([
            'id' => 2,
            'cod_medida' => 2,
            'nom_submedida' => 'Kilogramo'

        ]);

        DB::table('submedida')->insert([
            'id' => 3,
            'cod_medida' => 2,
            'nom_submedida' => 'Arroba'

        ]);

        DB::table('submedida')->insert([
            'id' => 4,
            'cod_medida' => 3,
            'nom_submedida' => 'Mililitro'

        ]);

        DB::table('submedida')->insert([
            'id' => 5,
            'cod_medida' => 3,
            'nom_submedida' => 'Centimetro cúbico'

        ]);

        DB::table('submedida')->insert([
            'id' => 6,
            'cod_medida' => 3,
            'nom_submedida' => 'Metro cúbico'

        ]);

        DB::table('submedida')->insert([
            'id' => 7,
            'cod_medida' => 4,
            'nom_submedida' => 'Milimetro'

        ]);

        DB::table('submedida')->insert([
            'id' => 8,
            'cod_medida' => 4,
            'nom_submedida' => 'Centímetro'

        ]);

        DB::table('submedida')->insert([
            'id' => 9,
            'cod_medida' => 4,
            'nom_submedida' => 'Metro'

        ]);

        DB::table('submedida')->insert([
            'id' => 10,
            'cod_medida' => 4,
            'nom_submedida' => 'Kilometro'

        ]);

        DB::table('submedida')->insert([
            'id' => 11,
            'cod_medida' => 1,
            'nom_submedida' => 'Unidad'

        ]);
    }
}
