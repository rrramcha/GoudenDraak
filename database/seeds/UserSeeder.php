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
            'name' => 'k',
            'email' => 'raj@live.nl',
            'password'=> Hash::make('vronk')
        ]);
    }
}
