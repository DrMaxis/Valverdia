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
           'coupon_code' => 'TEST123',
           'type' => 'fixed',
           'value' => 30,

       ]);

       Coupon::create([
        'coupon_code' => 'TEST321',
        'type' => 'percent',
        'percent_off' => 50,

    ]);
    }
}
