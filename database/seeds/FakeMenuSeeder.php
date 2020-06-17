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
    }

}
