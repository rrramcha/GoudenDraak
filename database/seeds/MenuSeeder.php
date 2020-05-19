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
            'menu_suffix' => 'A',
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
            'menu_suffix' => 'A',
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
            'menu_suffix' => 'A',
            'item_name' => 'Chinese Bami met kipfilet',
            'price' => 11.1,
            'item_category' => 'Chinese bami gerechten',
        ]);
        DB::table('menu')->insert([
            'menu_number' => 58,
            'menu_suffix' => 'B',
            'item_name' => 'Chinese Bami met cha Sieuw-Vlees',
            'price' => 12.2,
            'item_category' => 'Chinese bami gerechten',
        ]);
        DB::table('menu')->insert([
            'menu_number' => 58,
            'menu_suffix' => 'C',
            'item_name' => 'Chinese Bami met garnalen',
            'price' => 15.8,
            'item_category' => 'Chinese bami gerechten',
        ]);
        DB::table('menu')->insert([
            'menu_number' => 58,
            'menu_suffix' => 'D',
            'item_name' => 'Chinese Bami met ossenhaas',
            'price' => 17.4,
            'item_category' => 'Chinese bami gerechten',
        ]);

        //Indische gerechten

        DB::table('menu')->insert([
            'menu_prefix' => 'M',
            'menu_number' => 1,
            'item_name' => 'Bami of Nasi Rames Ling Fa',
            'price' => 15.3,
            'item_category' => 'Indische gerechten',
            'description' => 'Babi Pangang, Foe Yong Hai, Daging Roedjak, Atjar, saté en Kippootje'
        ]);
        DB::table('menu')->insert([
            'menu_prefix' => 'M',
            'menu_number' => 2,
            'item_name' => 'Bami of Nasi Rames',
            'price' => 8.8,
            'item_category' => 'Indische gerechten',
        ]);
        DB::table('menu')->insert([
            'menu_prefix' => 'M',
            'menu_number' => 3,
            'item_name' => 'Bami of Nasi Rames speciaal',
            'price' => 10.8,
            'item_category' => 'Indische gerechten',
        ]);
        DB::table('menu')->insert([
            'menu_prefix' => 'M',
            'menu_number' => 4,
            'item_name' => 'Gado Gado',
            'price' => 7.6,
            'item_category' => 'Indische gerechten',
            'description' => 'met witte rijst'
        ]);
        DB::table('menu')->insert([
            'menu_prefix' => 'M',
            'menu_number' => 5,
            'item_name' => 'Daging Smoor',
            'price' => 13.3,
            'item_category' => 'Indische gerechten',
            'description' => 'met witte rijst'
        ]);
        DB::table('menu')->insert([
            'menu_prefix' => 'M',
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
            'menu_suffix' => 'A',
            'price' => 11.2,
            'item_category' => 'Eiergerechten'
        ]);
        DB::table('menu')->insert([
            'menu_number' => 63,
            'item_name' => 'Foe Yong Hai met ossenhaas',
            'menu_suffix' => 'B',
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

        //Vlees gerechten
        DB::table('menu')->insert([
            'menu_number' => 70,
            'item_name' => 'Babi Pangang',
            'price' => 12.2,
            'item_category' => 'Vlees gerechten',
        ]);
        DB::table('menu')->insert([
            'menu_number' => 71,
            'item_name' => 'Babi Pangang in ketjapsaus',
            'price' => 12.3,
            'item_category' => 'Vlees gerechten',
        ]);
        DB::table('menu')->insert([
            'menu_number' => 72,
            'item_name' => 'Cha Sieuw',
            'price' => 13.3,
            'item_category' => 'Vlees gerechten',
            'description' => 'rood geroosterd varkensvlees'
        ]);
        DB::table('menu')->insert([
            'menu_number' => 73,
            'item_name' => 'Cha Sieuw in pikante saus',
            'price' => 13.8,
            'item_category' => 'Vlees gerechten',
        ]);
        DB::table('menu')->insert([
            'menu_number' => 74,
            'item_name' => 'Geroosterde Speenvarken',
            'price' => 13.8,
            'item_category' => 'Vlees gerechten',
        ]);
        DB::table('menu')->insert([
            'menu_number' => 75,
            'item_name' => 'Koe Loe Yuk',
            'price' => 11.9,
            'item_category' => 'Vlees gerechten',
            'description' => 'bolletjes vlees met zoetzure saus'
        ]);
        DB::table('menu')->insert([
            'menu_number' => 76,
            'item_name' => 'Varkenshaas met kerriesaus',
            'price' => 11.9,
            'item_category' => 'Vlees gerechten',
        ]);
        DB::table('menu')->insert([
            'menu_number' => 77,
            'item_name' => 'Varkenshaas met ketjapsaus',
            'price' => 11.9,
            'item_category' => 'Vlees gerechten',
        ]);
        DB::table('menu')->insert([
            'menu_number' => 78,
            'item_name' => 'Varkenshaas met tomatensaus',
            'price' => 11.9,
            'item_category' => 'Vlees gerechten',
        ]);
        DB::table('menu')->insert([
            'menu_number' => 78,
            'menu_suffix' => 'A',
            'item_name' => 'Varkenshaas met champignons in knoflooksaus',
            'price' => 11.9,
            'item_category' => 'Vlees gerechten',
        ]);
        DB::table('menu')->insert([
            'menu_number' => 78,
            'menu_suffix' => 'B',
            'item_name' => 'Varkenshaas met champignons in knoflooksaus',
            'price' => 12.2,
            'item_category' => 'Vlees gerechten',
        ]);
        DB::table('menu')->insert([
            'menu_number' => 79,
            'item_name' => 'Varkenshaas met zwarte bonensaus',
            'price' => 12.2,
            'item_category' => 'Vlees gerechten',
        ]);
        DB::table('menu')->insert([
            'menu_number' => 79,
            'menu_suffix' => 'A',
            'item_name' => 'Varkenshaas met verse ananas in zoetzure saus',
            'price' => 13.3,
            'item_category' => 'Vlees gerechten',
        ]);
        DB::table('menu')->insert([
            'menu_number' => 79,
            'menu_suffix' => 'B',
            'item_name' => 'Yu Sian Yuk',
            'price' => 13.3,
            'item_category' => 'Vlees gerechten',
            'description' => 'varkenshaas met licht zoet pikante kruiden saus'
        ]);
        DB::table('menu')->insert([
            'menu_number' => 79,
            'menu_suffix' => 'C',
            'item_name' => 'SzeChuan Yuk',
            'price' => 13.3,
            'item_category' => 'Vlees gerechten',
            'description' => 'varkenshaas met pittige kruiden saus'
        ]);

        // Kip gerechten
        DB::table('menu')->insert([
            'menu_number' => 80,
            'item_name' => 'Ajam Pangang',
            'price' => 13,
            'item_category' => 'Kip gerechten'
        ]);
        DB::table('menu')->insert([
            'menu_number' => 81,
            'item_name' => 'Ajam Pangang in ketjapsaus',
            'price' => 13,
            'item_category' => 'Kip gerechten'
        ]);
        DB::table('menu')->insert([
            'menu_number' => 82,
            'item_name' => 'Koe Loe Kai',
            'price' => 13,
            'item_category' => 'Kip gerechten',
            'description' => 'bolletjes kip met zoetzure saus'
        ]);
        DB::table('menu')->insert([
            'menu_number' => 83,
            'item_name' => 'Kipfilet met kerriesaus',
            'price' => 13,
            'item_category' => 'Kip gerechten'
        ]);
        DB::table('menu')->insert([
            'menu_number' => 84,
            'item_name' => 'Kipfilet met champignons in knoflooksaus',
            'price' => 13,
            'item_category' => 'Kip gerechten'
        ]);
        DB::table('menu')->insert([
            'menu_number' => 85,
            'item_name' => 'Kipfilet met tomatensaus',
            'price' => 13,
            'item_category' => 'Kip gerechten'
        ]);
        DB::table('menu')->insert([
            'menu_number' => 86,
            'item_name' => 'Kipfilet met ketjapsaus',
            'price' => 13,
            'item_category' => 'Kip gerechten'
        ]);
        DB::table('menu')->insert([
            'menu_number' => 87,
            'item_name' => 'Kipfilet met broccoli in knoflooksaus',
            'price' => 13.3,
            'item_category' => 'Kip gerechten'
        ]);
        DB::table('menu')->insert([
            'menu_number' => 88,
            'item_name' => 'Kipfilet met Chinese champignons',
            'price' => 13.3,
            'item_category' => 'Kip gerechten'
        ]);
        DB::table('menu')->insert([
            'menu_number' => 89,
            'item_name' => 'Kipfilet met zwarte bonensaus',
            'price' => 13.3,
            'item_category' => 'Kip gerechten'
        ]);
        DB::table('menu')->insert([
            'menu_number' => 90,
            'item_name' => 'Kipfilet met verse ananas in zoetzure saus',
            'price' => 13.3,
            'item_category' => 'Kip gerechten'
        ]);
        DB::table('menu')->insert([
            'menu_number' => 91,
            'item_name' => 'Kipfilet met zwarte pepersaus',
            'price' => 13.3,
            'item_category' => 'Kip gerechten'
        ]);
        DB::table('menu')->insert([
            'menu_number' => 92,
            'item_name' => 'Tjieuw Yem Kai',
            'price' => 13.3,
            'item_category' => 'Kip gerechten',
            'description' => 'licht gebraden kipfilet met zout en peper'
        ]);
        DB::table('menu')->insert([
            'menu_number' => 93,
            'item_name' => 'Yao Koe Kai',
            'price' => 13.3,
            'item_category' => 'Kip gerechten',
            'description' => 'kipfilet met cashewnoten in licht pikante saus'
        ]);
        DB::table('menu')->insert([
            'menu_number' => 94,
            'item_name' => 'Lychee Kai',
            'price' => 13.8,
            'item_category' => 'Kip gerechten',
            'description' => 'licht gebraden kipfilet met lychee in zoetzure saus'
        ]);
        DB::table('menu')->insert([
            'menu_number' => 95,
            'item_name' => 'Yu Sian Kai',
            'price' => 13.3,
            'item_category' => 'Kip gerechten',
            'description' => 'kipfilet met licht zoet pikante kruidensaus'
        ]);
        DB::table('menu')->insert([
            'menu_number' => 96,
            'item_name' => 'Sze Chaun Kai',
            'price' => 13.8,
            'item_category' => 'Kip gerechten',
            'description' => 'kipfilet met pittige kruidensaus'
        ]);
        DB::table('menu')->insert([
            'menu_number' => 97,
            'item_name' => 'Kung Bao Kai',
            'price' => 13.8,
            'item_category' => 'Kip gerechten',
            'description' => 'kipfilet met cashewnoten in pittige saus'
        ]);


        //Garnalen gerechten

        DB::table('menu')->insert([
            'menu_number' => 98,
            'item_name' => 'Garnalen met champignons in knoflooksaus',
            'price' => 15.9,
            'item_category' => 'Garnalen gerechten'
        ]);
        DB::table('menu')->insert([
            'menu_number' => 99,
            'item_name' => 'Garnalen met tomatensaus',
            'price' => 15.9,
            'item_category' => 'Garnalen gerechten'
        ]);
        DB::table('menu')->insert([
            'menu_number' => 100,
            'item_name' => 'Garnalen met tomatensaus',
            'price' => 15.9,
            'item_category' => 'Garnalen gerechten'
        ]);
        DB::table('menu')->insert([
            'menu_number' => 101,
            'item_name' => 'Garnalen met broccoli',
            'price' => 16.1,
            'item_category' => 'Garnalen gerechten'
        ]);
        DB::table('menu')->insert([
            'menu_number' => 102,
            'item_name' => 'Garnalen met Chinese champignons',
            'price' => 16.1,
            'item_category' => 'Garnalen gerechten'
        ]);
        DB::table('menu')->insert([
            'menu_number' => 103,
            'item_name' => 'Garnalen met kerriesaus',
            'price' => 16.1,
            'item_category' => 'Garnalen gerechten'
        ]);
        DB::table('menu')->insert([
            'menu_number' => 104,
            'item_name' => 'Garnalen met zwarte bonensaus',
            'price' => 16.1,
            'item_category' => 'Garnalen gerechten'
        ]);
        DB::table('menu')->insert([
            'menu_number' => 105,
            'item_name' => 'Garnalen met zwarte pepersaus',
            'price' => 16.1,
            'item_category' => 'Garnalen gerechten'
        ]);
        DB::table('menu')->insert([
            'menu_number' => 106,
            'item_name' => 'Garnalen met chilisaus',
            'price' => 16.1,
            'item_category' => 'Garnalen gerechten'
        ]);
        DB::table('menu')->insert([
            'menu_number' => 107,
            'item_name' => 'Yu Sian Haa',
            'price' => 16.1,
            'item_category' => 'Garnalen gerechten',
            'description' => 'garnalen met licht zoet pikante kruidensaus'
        ]);
        DB::table('menu')->insert([
            'menu_number' => 108,
            'item_name' => 'Tjieuw Yem Haa',
            'price' => 16.1,
            'item_category' => 'Garnalen gerechten',
            'description' => 'licht gebraden garnalen met zout en peper'
        ]);
        DB::table('menu')->insert([
            'menu_number' => 109,
            'item_name' => 'Tja Tai Haa',
            'price' => 16.1,
            'item_category' => 'Garnalen gerechten',
            'description' => 'krokant gebakken garnalen'
        ]);
        DB::table('menu')->insert([
            'menu_number' => 110,
            'item_name' => 'Sze Chuan Haa',
            'price' => 16.4,
            'item_category' => 'Garnalen gerechten'
        ]);

        DB::table('menu')->insert([
            'menu_number' => 111,
            'item_name' => 'Ossenhaas met champignons in knoflooksaus',
            'price' => 16.90,
            'item_category' => 'Ossenhaas gerechten'
        ]);

        DB::table('menu')->insert([
            'menu_number' => 112,
            'item_name' => 'Ossenhaas met tomatensaus',
            'price' => 16.90,
            'item_category' => 'Ossenhaas gerechten'
        ]);

        DB::table('menu')->insert([
            'menu_number' => 113,
            'item_name' => 'Ossenhaas met ketjapsaus',
            'price' => 16.90,
            'item_category' => 'Ossenhaas gerechten'
        ]);

        DB::table('menu')->insert([
            'menu_number' => 114,
            'item_name' => 'Ossenhaas met broccoli',
            'price' => 17.10,
            'item_category' => 'Ossenhaas gerechten'
        ]);

        DB::table('menu')->insert([
            'menu_number' => 115,
            'item_name' => 'Ossenhaas met Chinese champignons',
            'price' => 17.10,
            'item_category' => 'Ossenhaas gerechten'
        ]);

        DB::table('menu')->insert([
            'menu_number' => 116,
            'item_name' => 'Ossenhaas met kerriesaus',
            'price' => 17.10,
            'item_category' => 'Ossenhaas gerechten'
        ]);

        DB::table('menu')->insert([
            'menu_number' => 117,
            'item_name' => 'Ossenhaas met zwarte bonensaus',
            'price' => 17.10,
            'item_category' => 'Ossenhaas gerechten'
        ]);

        DB::table('menu')->insert([
            'menu_number' => 118,
            'item_name' => 'Ossenhaas met zwarte pepersaus',
            'price' => 17.10,
            'item_category' => 'Ossenhaas gerechten'
        ]);

        DB::table('menu')->insert([
            'menu_number' => 119,
            'item_name' => 'Yu Sian Ngau Yuk',
            'price' => 17.10,
            'item_category' => 'Ossenhaas gerechten',
            'description' => 'Ossenhaas met licht zoet pikante kruidensaus'
        ]);

        DB::table('menu')->insert([
            'menu_number' => 120,
            'item_name' => 'Sze Chuan Ngau Yuk',
            'price' => 17.40,
            'item_category' => 'Ossenhaas gerechten',
            'description' => 'Ossenhaas met pittige kruidensaus'
        ]);

        DB::table('menu')->insert([
            'menu_number' => 121,
            'item_name' => 'Visfilet met kerriesaus',
            'price' => 14.50,
            'item_category' => 'Vissen gerechten'
        ]);

        DB::table('menu')->insert([
            'menu_number' => 122,
            'item_name' => 'Visfilet met oestersaus',
            'price' => 14.50,
            'item_category' => 'Vissen gerechten'
        ]);

        DB::table('menu')->insert([
            'menu_number' => 123,
            'item_name' => 'Visfilet met zoetzuresaus',
            'price' => 14.50,
            'item_category' => 'Vissen gerechten',
            'description' => 'Licht gebraden visfilet met verse ananas in zoetzure saus'
        ]);

        DB::table('menu')->insert([
            'menu_number' => 124,
            'item_name' => 'Hong Shau Yu',
            'price' => 14.50,
            'item_category' => 'Vissen gerechten',
            'description' => 'Licht gebraden visfilet in zoete pikante saus'
        ]);

        DB::table('menu')->insert([
            'menu_number' => 125,
            'item_name' => 'Tjieuw Yem Yu',
            'price' => 15,
            'item_category' => 'Vissen gerechten',
            'description' => 'Licht gebraden visfilet met zout en peper'
        ]);

        DB::table('menu')->insert([
            'menu_number' => 126,
            'item_name' => 'San Sching Po',
            'price' => 16.10,
            'item_category' => 'Vissen gerechten',
            'description' => 'Visfilet, garnalen, krab en groenten in knoflooksaus'
        ]);

        DB::table('menu')->insert([
            'menu_prefix' => 'P',
            'menu_number' => 1,
            'item_name' => 'Geroosterde Peking Eend',
            'price' => 16.60,
            'item_category' => 'Peking eend gerechten'
        ]);

        DB::table('menu')->insert([
            'menu_prefix' => 'P',
            'menu_number' => 2,
            'item_name' => 'Peking Eend met verse ananas in zoetzure saus',
            'price' => 17.10,
            'item_category' => 'Peking eend gerechten'
        ]);

        DB::table('menu')->insert([
            'menu_prefix' => 'P',
            'menu_number' => 3,
            'item_name' => 'Peking Eend met Chinese champignons in oestersaus',
            'price' => 17.10,
            'item_category' => 'Peking eend gerechten'
        ]);

        DB::table('menu')->insert([
            'menu_prefix' => 'P',
            'menu_number' => 4,
            'item_name' => 'Yu Sian Ya',
            'price' => 17.10,
            'item_category' => 'Peking eend gerechten',
            'description' => 'Peking eend met licht zoet pikante kruidensaus'
        ]);

        DB::table('menu')->insert([
            'menu_prefix' => 'T',
            'menu_number' => 1,
            'item_name' => 'Tiepan Ling Fa',
            'price' => 17.90,
            'item_category' => 'Tiepan specialiteiten',
            'description' => 'Garnalen, kipfilet, ossenhaas en groenten in zwarte pepersaus'
        ]);

        DB::table('menu')->insert([
            'menu_prefix' => 'T',
            'menu_number' => 2,
            'item_name' => 'Tiepan Kai',
            'price' => 15.30,
            'item_category' => 'Tiepan specialiteiten',
            'description' => 'Licht gebraden kipfilet en groenten met zoet pikante saus'
        ]);

        DB::table('menu')->insert([
            'menu_prefix' => 'T',
            'menu_number' => 3,
            'item_name' => 'Tiepan San Yuk',
            'price' => 17.10,
            'item_category' => 'Tiepan specialiteiten',
            'description' => 'Ossenhaas en groenten met zoet pikante saus'
        ]);

        DB::table('menu')->insert([
            'menu_prefix' => 'T',
            'menu_number' => 4,
            'item_name' => 'Tiepan Haa',
            'price' => 17.40,
            'item_category' => 'Tiepan specialiteiten',
            'description' => 'Garnalen en groenten met zoet pikante saus'
        ]);

        DB::table('menu')->insert([
            'menu_prefix' => 'T',
            'menu_number' => 5,
            'item_name' => 'Tiepan Ngau Yuk',
            'price' => 19.50,
            'item_category' => 'Tiepan specialiteiten',
            'description' => '5st. ossenhaas en groenten met zoet pikante saus'
        ]);

        DB::table('menu')->insert([
            'menu_prefix' => 'V',
            'menu_number' => 4,
            'item_name' => 'Tau Fu Po ',
            'price' => 15.30,
            'item_category' => 'Tiepan specialiteiten',
            'description' => 'Sojakaas, cha sieuw, garnalen en chinese paddenstoelen'
        ]);
        // Vegetarische gerechten
        DB::table('menu')->insert([
            'menu_prefix' => 'V',
            'menu_number' => 1,
            'item_name' => 'Vegetarisch Tjap Tjoy',
            'price' => 8.30,
            'item_category' => 'Vegetarische gerechten',
        ]);

        DB::table('menu')->insert([
            'menu_prefix' => 'V',
            'menu_number' => 2,
            'item_name' => 'Lo Han Zhai',
            'price' => 11.20,
            'item_category' => 'Vegetarische gerechten',
            'description' => 'Sojakaas, Chinese paddenstoelen en groenten in knoflooksaus'
        ]);

        DB::table('menu')->insert([
            'menu_prefix' => 'V',
            'menu_number' => 3,
            'item_name' => 'Vegetarisch Foe Yong Hai',
            'price' => 8.30,
            'item_category' => 'Vegetarische gerechten',
        ]);

        // Kindermenu's
        DB::table('menu')->insert([
            'menu_prefix' => 'K',
            'menu_number' => 1,
            'item_name' => 'Frites, saté (2st) en ei',
            'price' => 6.50,
            'item_category' => 'Kindermenu\'s',
        ]);

        DB::table('menu')->insert([
            'menu_prefix' => 'K',
            'menu_number' => 2,
            'item_name' => 'Frites, kippootje en ei',
            'price' => 6.50,
            'item_category' => 'Kindermenu\'s',
        ]);

        DB::table('menu')->insert([
            'menu_prefix' => 'K',
            'menu_number' => 3,
            'item_name' => 'Frites, mini loempia (2st) en ei',
            'price' => 6.50,
            'item_category' => 'Kindermenu\'s',
        ]);

        DB::table('menu')->insert([
            'menu_prefix' => 'K',
            'menu_number' => 4,
            'item_name' => 'Kinder Bami of Nasi met saté (2st) en ei',
            'price' => 6.50,
            'item_category' => 'Kindermenu\'s',
        ]);
        // Rijsttafles
        DB::table('menu')->insert([
            'menu_prefix' => 'R',
            'menu_number' => 1,
            'item_name' => 'Indische rijsttafel 1 Persoon',
            'price' => 16.40,
            'item_category' => 'Rijsttafels',
            'description' => 'Gado Gado, Foe Yong Hai, Saté, Daging Roedjak, Daging Smoor, Ajam Ketjap, Atjar, Pisang Goreng, Pinda en Cocos'
        ]);

        DB::table('menu')->insert([
            'menu_prefix' => 'R',
            'menu_number' => 2,
            'item_name' => 'Indische rijsttafel vanaf 2 personen',
            'price' => 15.00,
            'item_category' => 'Rijsttafels',
            'description' => 'Ajam Ketjap, Gado Gado, Foe Yong Hai, Saté, Daging Roedjak, Daging Smoor, Kroepoek, Sambal Goreng boontjes, Sambal Goreng Kering, Atjar, Pisang Goreng, Pinda en Cocos'
        ]);

        DB::table('menu')->insert([
            'menu_prefix' => 'R',
            'menu_number' => 3,
            'item_name' => 'Chinese Indische rijsttafel vanaf 4 personen',
            'price' => 16.50,
            'item_category' => 'Rijsttafels',
            'description' => 'Foe Yong Hai, Babi Pangang, Tjap Tjoy, Koe Loe Yuk, Ajam Ketjap, Daging Smoor, Daging Roedjak, Saté, Ei, Kroepoek, Sambal Goreng boontjes, Atajar, Pisang Goreng, Pinda en Cocos'
        ]);

        DB::table('menu')->insert([
            'menu_prefix' => 'R',
            'menu_number' => 4,
            'item_name' => 'Chinese rijsttafel vanaf 2 personen',
            'price' => 17,
            'item_category' => 'Rijsttafels',
            'description' => 'Kippen- of tomatensoep, Tjap Tjoy met kipfilet, Koe Loe Yuk, Gebakken garnalen, Babi Pangang, Foe Yong Hai, Saté en Kroepoek'
        ]);

        DB::table('menu')->insert([
            'menu_prefix' => 'R',
            'menu_number' => 5,
            'item_name' => 'Kantonese rijsttafel vanaf 2 personen',
            'price' => 23.00,
            'item_category' => 'Rijsttafels',
            'description' => 'Wan Tan Soep, Chinese Dim Sum (mini loempia, kerrie ko, pangsit goreng garnalen, pasteitje), Geroosterde Peking Eend, Lychee Kai (licht gebraden kipfilet met lychee in zoetzure saus), Tau Sie Haa (garnalen met zwarte bonensaus)'
        ]);

        DB::table('menu')->insert([
            'menu_prefix' => 'R',
            'menu_number' => 6,
            'item_name' => 'Sze Chaun rijsttafel vanaf 2 personen',
            'price' => 23.00,
            'item_category' => 'Rijsttafels',
            'description' => 'Peking Soep (pittige lichtzure soep), Chinese Dim Sum (mini loempia, kerrie ko, pangsit goreng garnalen, pasteitje), Tjieuw Yem Kai (licht gebraden kipfilet met zout en peper), Lychee Yuk (licht gebraden varkensvlees met lychee in zoetzure saus), Yu Sian Ngau Yuk (ossenhaas met licht zoet pikante kruiden saus)'
        ]);
    }
}
