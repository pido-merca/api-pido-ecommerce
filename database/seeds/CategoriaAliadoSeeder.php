<?php

use Illuminate\Database\Seeder;
use App\Models\CategoriaAliado;

class CategoriaAliadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CategoriaAliado::create([
            'id' => '1',
            'nombre' => 'Mercados',
        ]);

        CategoriaAliado::create([
            'id' => '2',
            'nombre' => 'Droguerias y veterinarias',
        ]);

        CategoriaAliado::create([
            'id' => '3',
            'nombre' => 'Alimentos preparados',
        ]);

    }
}

