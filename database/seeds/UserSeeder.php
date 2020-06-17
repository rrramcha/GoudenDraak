<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Xi Jing Draak',
            'email' => 'admin@goudendraak.nl',
            'password'=> Hash::make('draak')
        ]);
    }
}
