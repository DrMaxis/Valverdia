<?php

use Illuminate\Database\Seeder;
use App\Category;
use App\Color;
use App\Product;
use App\Coupon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    { 
        
        $this->call(CategoryTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(CouponTableSeeder::class);
        $this->call(ColorsTableSeeder::class);

    }
}
