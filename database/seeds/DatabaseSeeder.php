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
        // $this->call(MarcaSeeder::class);
        // $this->call(CategoriaSeeder::class);
        // $this->call(MedidaSeeder::class);
        // $this->call(SubmedidaSeeder::class);
        $this->call(ProductoAdmonSeeder::class);
    }
}
