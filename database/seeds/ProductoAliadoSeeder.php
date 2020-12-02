<?php

use Illuminate\Database\Seeder;
use App\Models\ProductoAliado;

class ProductoAliadoSeeder extends Seeder
{

    public function run()
    {
        factory(ProductoAliado::class, 50)->create();
    }
}
