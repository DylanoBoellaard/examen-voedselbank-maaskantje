<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class KlantenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::tabel('klanten')->insert([
            'naam' => 'Klant',
            'aantalvolwassenen' => 3,
            'aantalkinderen' => 2,
            'aantalbabies' => 0,
            'huisnummer' => '21',
            'postcode' => '3998kx',
            'plaats' => 'Schalkwijk',
            'straat' => 'Wierslaan',
            'voornaam' => 'Stefano',
            'tussenvoegsel' => 'S',
            'achternaam' => 'Schoonheim',
            'email' => '123@hotmail.com',
        ]);
    }
}
