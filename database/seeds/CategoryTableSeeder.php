<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Category;
class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now()->toDateTimeString();

        Category::insert([
            ['name' => 'LED Tube', 'slug' => 'rgb-tube', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Flex LED', 'slug' => 'flex-led', 'created_at' => $now, 'updated_at' => $now]
        ]);
    }
}
