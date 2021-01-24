<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MedidaSeeder extends Seeder
{
   
    public function run()
    {
        DB::table('medida')->insert([
            'id' => 1,
            'nom_medida' => 'Unidad'

        ]);

        DB::table('medida')->insert([
            'id' => 2,
            'nom_medida' => 'Peso'

        ]);

        DB::table('medida')->insert([
            'id' => 3,
            'nom_medida' => 'Volumen'

        ]);

        DB::table('medida')->insert([
            'id' => 4,
            'nom_medida' => 'Longitud'

        ]);
    }
}
