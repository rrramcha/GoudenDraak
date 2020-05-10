<?php

use Illuminate\Database\Seeder;

class FakeMenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menu')->insert([
            'menu_number' => 111,
            'item_name' => 'Ossenhaas met ',
            'price' => 16.90,
            'item_category' =>

        ]);
    }
}
