<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        $this->call(DepartamentoSeeder::class);
        $this->call(MunicipioSeeder::class);
        $this->call(CategoriaAliadoSeeder::class);
        $this->call(PlanSeeder::class);
        $this->call(SubcategoriaSeeder::class);
        $this->call(AliadoSeeder::class);
        $this->call(AliadoSubcategoriaSeeder::class);
        $this->call(MarcaSeeder::class);
        $this->call(CategoriaSeeder::class);
        $this->call(MedidaSeeder::class);
        $this->call(SubmedidaSeeder::class);
        $this->call(ProductoAdmonSeeder::class);
    }
}
