<?php

use Illuminate\Database\Seeder;
use App\Models\Plan;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Plan::create([
            'id' => '1',
            'nombre' => 'Inicial',
        ]);

        Plan::create([
            'id' => '2',
            'nombre' => 'Intermedio',
        ]);

        Plan::create([
            'id' => '3',
            'nombre' => 'Premium',
        ]);
    }
}
