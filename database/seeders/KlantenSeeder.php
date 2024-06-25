<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KlantenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('klanten')->insert([
            'naam' => 'Klant',
            'aantalvolwassenen' => 3,
            'aantalkinderen' => 2,
            'aantalbabies' => 1,
            'huisnummer' => '21',
            'postcode' => '3998kx',
            'plaats' => 'Schalkwijk',
            'straat' => 'Wierslaan',
            'voornaam' => 'Jan',
            'tussenvoegsel' => '',
            'achternaam' => 'Boom',
            'email' => 'janboom@hotmail.com',
            'telefoon' => '+31 6 20398564',
        ]);

        DB::table('klanten')->insert([
            'naam' => 'Klant',
            'aantalvolwassenen' => 2,
            'aantalkinderen' => 1,
            'aantalbabies' => 0,
            'huisnummer' => '15',
            'postcode' => '3204RF',
            'plaats' => 'Utrecht',
            'straat' => 'spronklaan',
            'voornaam' => 'Piet',
            'tussenvoegsel' => 'de',
            'achternaam' => 'Haan',
            'email' => 'piethaan@outlook.com',
            'telefoon' => '+31 6 20394857',
        ]);

        DB::table('klanten')->insert([
            'naam' => 'Klant',
            'aantalvolwassenen' => 5,
            'aantalkinderen' => 7,
            'aantalbabies' => 3,
            'huisnummer' => '5',
            'postcode' => '2958QL',
            'plaats' => 'Amsterdam',
            'straat' => 'marinelaan',
            'voornaam' => 'Klaas',
            'tussenvoegsel' => 'de',
            'achternaam' => 'Boer',
            'email' => 'klaasboer@gmail.com',
            'telefoon' => '+31 6 30495872',
        ]);

        DB::table('klanten')->insert([
            'naam' => 'Klant',
            'aantalvolwassenen' => 4,
            'aantalkinderen' => 2,
            'aantalbabies' => 1,
            'huisnummer' => '9',
            'postcode' => '9685ED',
            'plaats' => 'Groningen',
            'straat' => 'sprookjeslaan',
            'voornaam' => 'angela',
            'tussenvoegsel' => '',
            'achternaam' => 'stelt',
            'email' => 'steltangela@gmail.com',
            'telefoon' => '+31 6 49723946',
        ]);

        DB::table('klanten')->insert([
            'naam' => 'Klant',
            'aantalvolwassenen' => 1,
            'aantalkinderen' => 5,
            'aantalbabies' => 3,
            'huisnummer' => '28',
            'postcode' => '5847GH',
            'plaats' => 'Den Haag',
            'straat' => 'kaasstraat',
            'voornaam' => 'Ruben',
            'tussenvoegsel' => 'de',
            'achternaam' => 'monster',
            'email' => 'rubenmonster@outlook.com',
            'telefoon' => '+31 6 67394856',
        ]);
    }
}
