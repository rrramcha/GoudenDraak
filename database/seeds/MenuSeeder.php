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
        DB::table('menu')->insert([
            'menu_number' => 34,
            'item_name' => 'Bami Yeung Chow',
            'menu_suffix' => 'A',
            'price' => 13,
            'item_category' => 'Bami en nasi gerechten',
            'description' => 'met garnaaltjes en Cha Sieuw-vlees'
        ]);
        DB::table('menu')->insert([
            'menu_number' => 35,
            'item_name' => 'Bami of Nasi Malay',
            'price' => 9.3,
            'item_category' => 'Bami en nasi gerechten'
        ]);
        DB::table('menu')->insert([
            'menu_number' => 36,
            'item_name' => 'Bami of Nasi met kipfilet',
            'price' => 9.3,
            'item_category' => 'Bami en nasi gerechten'
        ]);
        DB::table('menu')->insert([
            'menu_number' => 37,
            'item_name' => 'Bami of Nasi met varkensvlees',
            'price' => 9.3,
            'item_category' => 'Bami en nasi gerechten'
        ]);
        DB::table('menu')->insert([
            'menu_number' => 38,
            'item_name' => 'Bami of Nasi met garnalen',
            'price' => 14.3,
            'item_category' => 'Bami en nasi gerechten'
        ]);
        DB::table('menu')->insert([
            'menu_number' => 39,
            'item_name' => 'Bami of Nasi met ossenhaas',
            'price' => 15.3,
            'item_category' => 'Bami en nasi gerechten'
        ]);

        //Combinatie gerechten

        DB::table('menu')->insert([
            'menu_number' => 40,
            'item_name' => 'Babi Pangang,Foe Yong Hai en saté',
            'price' => 15.8,
            'item_category' => 'Combinatie gerechten'
        ]);
        DB::table('menu')->insert([
            'menu_number' => 41,
            'item_name' => 'Babi Pangang, Tjap Tjoy en saté',
            'price' => 15.8,
            'item_category' => 'Combinatie gerechten'
        ]);
        DB::table('menu')->insert([
            'menu_number' => 42,
            'item_name' => 'Babi Pangang, Koe Loe Yuk en saté',
            'price' => 15.8,
            'item_category' => 'Combinatie gerechten'
        ]);
        DB::table('menu')->insert([
            'menu_number' => 43,
            'item_name' => 'Babi Pangang, Tau Sie Kai en saté',
            'price' => 16.5,
            'item_category' => 'Combinatie gerechten'
        ]);
        DB::table('menu')->insert([
            'menu_number' => 44,
            'item_name' => 'Koe Loe Yuk, Foe Yong Hai en saté',
            'price' => 15.8,
            'item_category' => 'Combinatie gerechten'
        ]);
        DB::table('menu')->insert([
            'menu_number' => 45,
            'item_name' => 'Koe Loe Yuk, Tjap Tjoy en saté',
            'price' => 15.8,
            'item_category' => 'Combinatie gerechten'
        ]);
        DB::table('menu')->insert([
            'menu_number' => 46,
            'item_name' => 'Foe Yong Hai, Tjap Tjoy en saté',
            'price' => 15.8,
            'item_category' => 'Combinatie gerechten'
        ]);
        DB::table('menu')->insert([
            'menu_number' => 47,
            'item_name' => 'Foe Yong Hai, Kip Kerrie en saté',
            'price' => 16.5,
            'item_category' => 'Combinatie gerechten'
        ]);

        //Combinatie gerechten

        DB::table('menu')->insert([
            'menu_number' => 50,
            'item_name' => 'Mihoen Ling Fa',
            'price' => 16.4,
            'item_category' => 'Mihoen gerechten',
            'description' => 'Foe Yong Hai, Babi Pangang, saté en kippenpootje'
        ]);
        DB::table('menu')->insert([
            'menu_number' => 51,
            'item_name' => 'Mihoen met varkensvlees',
            'price' => 9.3,
            'item_category' => 'Mihoen gerechten',
        ]);
        DB::table('menu')->insert([
            'menu_number' => 52,
            'item_name' => 'Mihoen met kipfilet',
            'price' => 10.4,
            'item_category' => 'Mihoen gerechten',
        ]);
        DB::table('menu')->insert([
            'menu_number' => 53,
            'item_name' => 'Mihoen met ossenhaas',
            'price' => 16.4,
            'item_category' => 'Mihoen gerechten',
        ]);
        DB::table('menu')->insert([
            'menu_number' => 54,
            'item_name' => 'Mihoen met garnalen',
            'price' => 15.3,
            'item_category' => 'Mihoen gerechten',
        ]);
        DB::table('menu')->insert([
            'menu_number' => 55,
            'item_name' => 'Mihoen Singapore-style',
            'price' => 11.9,
            'item_category' => 'Mihoen gerechten',
        ]);
        DB::table('menu')->insert([
            'menu_number' => 56,
            'item_name' => 'Mihoen met Cha Sieuw vlees',
            'price' => 11.2,
            'item_category' => 'Mihoen gerechten',
        ]);

        //Combinatie gerechten

        DB::table('menu')->insert([
            'menu_number' => 57,
            'item_name' => 'Chinese Bami Ling Fa',
            'price' => 16.9,
            'item_category' => 'Chinese bami gerechten',
            'description' => 'Foe Yong Hai, Babi Pangang, saté en Kippootje'
        ]);
        DB::table('menu')->insert([
            'menu_number' => 58,
            'item_name' => 'Chinese Bami met varkensvlees',
            'price' => 10.1,
            'item_category' => 'Chinese bami gerechten',
        ]);
        DB::table('menu')->insert([
            'menu_number' => 58,
            'item_suffix' => 'A',
            'item_name' => 'Chinese Bami met kipfilet',
            'price' => 11.1,
            'item_category' => 'Chinese bami gerechten',
        ]);
        DB::table('menu')->insert([
            'menu_number' => 58,
            'item_suffix' => 'B',
            'item_name' => 'Chinese Bami met cha Sieuw-Vlees',
            'price' => 12.2,
            'item_category' => 'Chinese bami gerechten',
        ]);
        DB::table('menu')->insert([
            'menu_number' => 58,
            'item_suffix' => 'C',
            'item_name' => 'Chinese Bami met garnalen',
            'price' => 15.8,
            'item_category' => 'Chinese bami gerechten',
        ]);
        DB::table('menu')->insert([
            'menu_number' => 58,
            'item_suffix' => 'D',
            'item_name' => 'Chinese Bami met ossenhaas',
            'price' => 17.4,
            'item_category' => 'Chinese bami gerechten',
        ]);

        //Indische gerechten

        DB::table('menu')->insert([
            'item_prefix' => 'M',
            'menu_number' => 1,
            'item_name' => 'Bami of Nasi Rames Ling Fa',
            'price' => 15.3,
            'item_category' => 'Indische gerechten',
            'description' => 'Babi Pangang, Foe Yong Hai, Daging Roedjak, Atjar, saté en Kippootje'
        ]);
        DB::table('menu')->insert([
            'item_prefix' => 'M',
            'menu_number' => 2,
            'item_name' => 'Bami of Nasi Rames',
            'price' => 8.8,
            'item_category' => 'Indische gerechten',
        ]);
        DB::table('menu')->insert([
            'item_prefix' => 'M',
            'menu_number' => 3,
            'item_name' => 'Bami of Nasi Rames speciaal',
            'price' => 10.8,
            'item_category' => 'Indische gerechten',
        ]);
        DB::table('menu')->insert([
            'item_prefix' => 'M',
            'menu_number' => 4,
            'item_name' => 'Gado Gado',
            'price' => 7.6,
            'item_category' => 'Indische gerechten',
            'description' => 'met witte rijst'
        ]);
        DB::table('menu')->insert([
            'item_prefix' => 'M',
            'menu_number' => 5,
            'item_name' => 'Daging Smoor',
            'price' => 13.3,
            'item_category' => 'Indische gerechten',
            'description' => 'met witte rijst'
        ]);
        DB::table('menu')->insert([
            'item_prefix' => 'M',
            'menu_number' => 5,
            'item_name' => 'Daging Roedjak',
            'price' => 13.3,
            'item_category' => 'Indische gerechten',
            'description' => 'met witte rijst'
        ]);

        //Eiergerechten

        DB::table('menu')->insert([
            'menu_number' => 59,
            'item_name' => 'Foe Yong Hai Ling Fa',
            'price' => 16.4,
            'item_category' => 'Eiergerechten',
            'description' => 'ossenhaas, garnalen en kipfilet'
        ]);
        DB::table('menu')->insert([
            'menu_number' => 60,
            'item_name' => 'Foe Yong Hai met varkensvlees',
            'price' => 8.8,
            'item_category' => 'Eiergerechten'
        ]);
        DB::table('menu')->insert([
            'menu_number' => 61,
            'item_name' => 'Foe Yong Hai met kipfilet',
            'price' => 9.2,
            'item_category' => 'Eiergerechten'
        ]);
        DB::table('menu')->insert([
            'menu_number' => 62,
            'item_name' => 'Foe Yong Hai met garnalen',
            'price' => 15.3,
            'item_category' => 'Eiergerechten'
        ]);
        DB::table('menu')->insert([
            'menu_number' => 63,
            'item_name' => 'Foe Yong Hai met krab',
            'price' => 15.3,
            'item_category' => 'Eiergerechten'
        ]);
        DB::table('menu')->insert([
            'menu_number' => 63,
            'item_name' => 'Foe Yong Hai met Chai Sieuw Vlees',
            'item_suffix' => 'A',
            'price' => 11.2,
            'item_category' => 'Eiergerechten'
        ]);
        DB::table('menu')->insert([
            'menu_number' => 63,
            'item_name' => 'Foe Yong Hai met ossenhaas',
            'item_suffix' => 'B',
            'price' => 16.4,
            'item_category' => 'Eiergerechten'
        ]);

        //Groenten gerechten

        DB::table('menu')->insert([
            'menu_number' => 64,
            'item_name' => 'Tjap Tjoy Ling Fa',
            'price' => 16.4,
            'item_category' => 'Groenten gerechten',
            'description' => 'ossenhaas, garnalen en kipfilet'
        ]);
        DB::table('menu')->insert([
            'menu_number' => 65,
            'item_name' => 'Tjap Tjoy met varkensvlees',
            'price' => 8.8,
            'item_category' => 'Groenten gerechten',
        ]);
        DB::table('menu')->insert([
            'menu_number' => 66,
            'item_name' => 'Tjap Tjoy met kipfilet',
            'price' => 9.2,
            'item_category' => 'Groenten gerechten',
        ]);
        DB::table('menu')->insert([
            'menu_number' => 67,
            'item_name' => 'Tjap Tjoy met ossenhaas',
            'price' => 16.4,
            'item_category' => 'Groenten gerechten',
        ]);
        DB::table('menu')->insert([
            'menu_number' => 68,
            'item_name' => 'Tjap Tjoy met garnalen',
            'price' => 15.3,
            'item_category' => 'Groenten gerechten',
        ]);
    }
}
