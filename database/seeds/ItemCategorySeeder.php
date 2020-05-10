<?php

use Illuminate\Database\Seeder;

class ItemCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('item_categories')->insert([
            'category_name' => 'Soep'
        ]);
        DB::table('item_categories')->insert([
            'category_name' => 'Voorgerechten'
        ]);
        DB::table('item_categories')->insert([
            'category_name' => 'Bami en nasi gerechten'
        ]);
        DB::table('item_categories')->insert([
            'category_name' => 'Combinatie gerechten'
        ]);
        DB::table('item_categories')->insert([
            'category_name' => 'Mihoen gerechten'
        ]);
        DB::table('item_categories')->insert([
            'category_name' => 'Chinese bami gerechten'
        ]);
        DB::table('item_categories')->insert([
            'category_name' => 'Indische gerechten'
        ]);
        DB::table('item_categories')->insert([
            'category_name' => 'Eiergerechten'
        ]);
        DB::table('item_categories')->insert([
            'category_name' => 'Groenten gerechten'
        ]);
        DB::table('item_categories')->insert([
            'category_name' => 'Vlees gerechten'
        ]);
        DB::table('item_categories')->insert([
            'category_name' => 'Kip gerechten'
        ]);
        DB::table('item_categories')->insert([
            'category_name' => 'Garnalen gerechten'
        ]);
        DB::table('item_categories')->insert([
            'category_name' => 'Ossenhaas gerechten'
        ]);
        DB::table('item_categories')->insert([
            'category_name' => 'Vissen gerechten'
        ]);
        DB::table('item_categories')->insert([
            'category_name' => 'Peking eend gerechten'
        ]);
        DB::table('item_categories')->insert([
            'category_name' => 'Tiepan specialiteiten'
        ]);
        DB::table('item_categories')->insert([
            'category_name' => 'Vegetarische gerechten'
        ]);
        DB::table('item_categories')->insert([
            'category_name' => 'Rijsttafels'
        ]);
    }
}
