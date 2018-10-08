<?php

use Illuminate\Database\Seeder;
use App\Product;
use App\Color;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ProductsTableSeeder::class);
        $this->call(ColorsTableSeeder::class);
    }
}
