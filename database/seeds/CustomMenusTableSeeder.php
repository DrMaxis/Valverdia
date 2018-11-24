<?php

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\MenuItem;
use TCG\Voyager\Models\Menu;
use TCG\Voyager\Traits\Seedable;

class CustomMenusTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        Menu::firstOrCreate([
            'name' => 'mobile-main',
        ]);
        Menu::firstOrCreate([
            'name' => 'main',
        ]);
        Menu::firstOrCreate([
            'name' => 'foot-social',
        ]);
        Menu::firstOrCreate([
            'name' => 'foot-shipr',
        ]);
        Menu::firstOrCreate([
            'name' => 'foot-infop',
        ]);

    }
}
