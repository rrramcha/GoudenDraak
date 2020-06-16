<?php

use Illuminate\Database\Seeder;

class AllergySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('allergies')->insert([
            'name' => 'varkensvlees'
        ]);
        DB::table('allergies')->insert([
            'name' => 'gluten'
        ]);
        DB::table('allergies')->insert([
            'name' => 'soja'
        ]);
        DB::table('allergies')->insert([
            'name' => 'lactose'
        ]);

        DB::table('item_has_allergy')->insert([
            'allergy_name' => 'lactose',
            'item_id' => 1
        ]);
    }
}
