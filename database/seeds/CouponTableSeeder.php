<?php

use Illuminate\Database\Seeder;
use App\Coupon;

class CouponTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Coupon::create([
           'coupon-code' => 'TEST123',
           'type' => 'fixed',
           'value' => '30',

       ]);

       Coupon::create([
        'coupon-code' => 'TEST321',
        'type' => 'percent_off',
        'value' => '50',

    ]);
    }
}
