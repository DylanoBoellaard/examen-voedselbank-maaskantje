<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\Klanten;

class KlantenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'naam' => 'Familie Jansen',
                'aantalvolwassenen' => 2,
                'aantalkinderen' => 1,
                'aantalbabies' => 0,
                'huisnummer' => '12',
                'postcode' => '1234AB',
                'plaats' => 'Amsterdam',
                'straat' => 'Kerkstraat',
                'voornaam' => 'Jan',
                'tussenvoegsel' => '',
                'achternaam' => 'Jansen',
                'email' => '123@hotmail.com',
                'telefoon' => '0612345678',
            ],
            [
                'naam' => 'Familie de Vries',
                'aantalvolwassenen' => 3,
                'aantalkinderen' => 1,
                'aantalbabies' => 0,
                'huisnummer' => '34',
                'postcode' => '5678CD',
                'plaats' => 'Rotterdam',
                'straat' => 'Dorpsstraat',
                'voornaam' => 'Piet',
                'tussenvoegsel' => 'de',
                'achternaam' => 'Vries',
                'email' => 'devries@hotmail.com',
                'telefoon' => '0687654321',
            ],
            [
                'naam' => 'Familie Smit',
                'aantalvolwassenen' => 2,
                'aantalkinderen' => 1,
                'aantalbabies' => 1,
                'huisnummer' => '56',
                'postcode' => '9012EF',
                'plaats' => 'Utrecht',
                'straat' => 'Hoofdstraat',
                'voornaam' => 'Kees',
                'tussenvoegsel' => '',
                'achternaam' => 'Smit',
                'email' => 'KeesSmit@gmail.com',
                'telefoon' => '0698765432',
            ],
            [
                'naam' => 'Familie van Dijk',
                'aantalvolwassenen' => 2,
                'aantalkinderen' => 3,
                'aantalbabies' => 0,
                'huisnummer' => '78',
                'postcode' => '3456GH',
                'plaats' => 'Den Haag',
                'straat' => 'Kerkstraat',
                'voornaam' => 'Klaas',
                'tussenvoegsel' => 'van',
                'achternaam' => 'Dijk',
                'email' => 'VanDijk@live.nl',
                'telefoon' => '0612345678',
            ]
        ];
        foreach ($data as $item) {
            Klanten::create($item);
        }
    }
}
