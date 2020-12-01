<?php

use Illuminate\Database\Seeder;

class MedidaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('medida')->insert([
            'id' => 1,
            'nom_medida' => 100

        ]);

        DB::table('medida')->insert([
            'id' => 2,
            'nom_medida' => 150

        ]);

        DB::table('medida')->insert([
            'id' => 3,
            'nom_medida' => 200

        ]);

        DB::table('medida')->insert([
            'id' => 4,
            'nom_medida' => 250

        ]);

        DB::table('medida')->insert([
            'id' => 5,
            'nom_medida' => 300

        ]);
    }
}
