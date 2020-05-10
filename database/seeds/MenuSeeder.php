<?php

use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //MENU

        DB::table('menu')->insert([
            'menu_number' => 1,
            'item_name' => 'Soep Ling Fa',
            'price' => 3.8,
            'item_category' => 'Soep'
        ]);
        DB::table('menu')->insert([
            'menu_number' => 2,
            'item_name' => 'Kippensoep',
            'price' => 2.9,
            'item_category' => 'Soep'
        ]);
        DB::table('menu')->insert([
            'menu_number' => 3,
            'item_name' => 'Tomatensoep',
            'price' => 2.9,
            'item_category' => 'Soep'
        ]);
        DB::table('menu')->insert([
            'menu_number' => 4,
            'item_name' => 'Haaienvinnensoep',
            'price' => 3.1,
            'item_category' => 'Soep'
        ]);
        DB::table('menu')->insert([
            'menu_number' => 5,
            'item_name' => 'Champignonsoep',
            'price' => 3.3,
            'item_category' => 'Soep'
        ]);
        DB::table('menu')->insert([
            'menu_number' => 6,
            'item_name' => 'Pekingsoep',
            'price' => 3.8,
            'item_category' => 'Soep'
        ]);
        DB::table('menu')->insert([
            'menu_number' => 7,
            'item_name' => 'Wan Tan Soep',
            'price' => 4.3,
            'item_category' => 'Soep'
        ]);
        DB::table('menu')->insert([
            'menu_number' => 8,
            'item_name' => 'Chinese Champignonsoep',
            'price' => 4.1,
            'item_category' => 'Soep'
        ]);

        //VOORGERECHTEN

        DB::table('menu')->insert([
            'menu_number' => 10,
            'item_name' => 'Loempia Ling Fa',
            'description' => 'met atjar ananas en pindasaus',
            'price' => 6.2,
            'item_category' => 'Voorgerechten'
        ]);
        DB::table('menu')->insert([
            'menu_number' => 11,
            'item_name' => 'Loempia Compleet',
            'description' => 'met gesmoord rundvlees en pikante saus',
            'price' => 6.2,
            'item_category' => 'Voorgerechten'
        ]);
        DB::table('menu')->insert([
            'menu_number' => 12,
            'item_name' => 'Loempia met kip',
            'price' => 3.9,
            'item_category' => 'Voorgerechten'
        ]);
        DB::table('menu')->insert([
            'menu_number' => 13,
            'item_name' => 'Loempia',
            'price' => 3.8,
            'item_category' => 'Voorgerechten'
        ]);
        DB::table('menu')->insert([
            'menu_number' => 14,
            'item_name' => 'Chinese mini loempia',
            'description' => '4st.',
            'price' => 4.9,
            'item_category' => 'Voorgerechten'
        ]);
        DB::table('menu')->insert([
            'menu_number' => 14,
            'item_suffix' => 'A',
            'item_name' => 'Vegetarisch mini loempia',
            'description' => '12st.',
            'price' => 4.9,
            'item_category' => 'Voorgerechten'
        ]);
        DB::table('menu')->insert([
            'menu_number' => 15,
            'item_name' => 'Kroepoek',
            'price' => 2.5,
            'item_category' => 'Voorgerechten'
        ]);
        DB::table('menu')->insert([
            'menu_number' => 15,
            'item_suffix' => 'A',
            'item_name' => 'Casave Kroepoek',
            'price' => 2.7,
            'item_category' => 'Voorgerechten'
        ]);
        DB::table('menu')->insert([
            'menu_number' => 16,
            'item_name' => 'Pangsit Goreng',
            'description' => '7st.',
            'price' => 3.9,
            'item_category' => 'Voorgerechten'
        ]);
        DB::table('menu')->insert([
            'menu_number' => 17,
            'item_name' => 'Pisang Goreng',
            'description' => '5st.',
            'price' => 3.4,
            'item_category' => 'Voorgerechten'
        ]);
        DB::table('menu')->insert([
            'menu_number' => 18,
            'item_name' => 'Chinese Dim Sum',
            'description' => 'mini loempia, kerry ko, pangsit goreng, garnalenpasteitje',
            'price' => 5.4,
            'item_category' => 'Voorgerechten'
        ]);
        DB::table('menu')->insert([
            'menu_number' => 19,
            'item_name' => 'Saté Babi',
            'description' => '4st.',
            'price' => 5.4,
            'item_category' => 'Voorgerechten'
        ]);
        DB::table('menu')->insert([
            'menu_number' => 20,
            'item_name' => 'Saté Ajam',
            'description' => '4st.',
            'price' => 5.4,
            'item_category' => 'Voorgerechten'
        ]);
        DB::table('menu')->insert([
            'menu_number' => 21,
            'item_name' => 'Fong Mei Ha',
            'description' => 'gebakken vleespasteitje, 4st.',
            'price' => 5.4,
            'item_category' => 'Voorgerechten'
        ]);
        DB::table('menu')->insert([
            'menu_number' => 22,
            'item_name' => 'Patat',
            'price' => 2.3,
            'item_category' => 'Voorgerechten'
        ]);
        DB::table('menu')->insert([
            'menu_number' => 23,
            'item_name' => 'Tsa Siu Mai',
            'description' => 'gebakken vleespasteitje, 4st.',
            'price' => 3.5,
            'item_category' => 'Voorgerechten'
        ]);
        DB::table('menu')->insert([
            'menu_number' => 24,
            'item_name' => 'Atjar',
            'price' => 3,
            'item_category' => 'Voorgerechten'
        ]);
        DB::table('menu')->insert([
            'menu_number' => 25,
            'item_name' => 'Witte rijst',
            'price' => 3,
            'item_category' => 'Voorgerechten'
        ]);
        DB::table('menu')->insert([
            'menu_number' => 26,
            'item_name' => 'Grote pindasaus',
            'price' => 3.9,
            'item_category' => 'Voorgerechten'
        ]);
        DB::table('menu')->insert([
            'menu_number' => 27,
            'item_name' => 'Kleine pindasaus',
            'price' => 2.3,
            'item_category' => 'Voorgerechten'
        ]);
        DB::table('menu')->insert([
            'menu_number' => 28,
            'item_name' => 'Kippenpootje',
            'price' => 2.3,
            'item_category' => 'Voorgerechten'
        ]);
        DB::table('menu')->insert([
            'menu_number' => 29,
            'item_name' => 'Halve Kip',
            'price' => 6,
            'item_category' => 'Voorgerechten'
        ]);
        DB::table('menu')->insert([
            'menu_number' => 29,
            'menu_suffix' => 'H',
            'item_name' => 'Kroket',
            'price' => 1.4,
            'item_category' => 'Voorgerechten'
        ]);
        DB::table('menu')->insert([
            'menu_number' => 29,
            'menu_suffix' => 'G',
            'item_name' => 'Frikandel',
            'price' => 1.4,
            'item_category' => 'Voorgerechten'
        ]);
        DB::table('menu')->insert([
            'menu_number' => 180,
            'menu_suffix' => 'H',
            'item_name' => 'Kleine Sambal',
            'price' => 2.5,
            'item_category' => 'Voorgerechten'
        ]);

        //BAMI EN NASI GERECHTEN

        DB::table('menu')->insert([
            'menu_number' => 30,
            'item_name' => 'Bami of Nasi Goreng Ling Fa',
            'description' => 'Foe Yong Hai, Babi Pangang, saté en kippenpootje',
            'price' => 14.3,
            'item_category' => 'Bami en nasi gerechten'
        ]);
        DB::table('menu')->insert([
            'menu_number' => 31,
            'item_name' => 'Bami of Nasi Goreng met ei',
            'price' => 5,
            'item_category' => 'Bami en nasi gerechten'
        ]);
        DB::table('menu')->insert([
            'menu_number' => 32,
            'item_name' => 'Bami of Nasi Goreng speciaal',
            'price' => 8.5,
            'item_category' => 'Bami en nasi gerechten'
        ]);
        DB::table('menu')->insert([
            'menu_number' => 33,
            'item_name' => 'Bami of Nasi Goreng speciaal',
            'price' => 8.5,
            'item_category' => 'Bami en nasi gerechten'
        ]);
        DB::table('menu')->insert([
            'menu_number' => 34,
            'item_name' => 'Nasi ',
            'price' => 10.9,
            'item_category' => 'Bami en nasi gerechten'
        ]);

        
    }
}
