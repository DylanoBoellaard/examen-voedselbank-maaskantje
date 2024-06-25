<?php

namespace Database\Seeders;

use App\Models\Leverancier;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LeverancierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->command->info('Updating new seed ...');

        Leverancier::create([
            'id' => 1,
            'bedrijfsnaam' => 'Water',
            'huisnummer' => 10,
            'postcode' => '1234AB',
            'plaats' => 'Amsterdam',
            'telefoon' => '0612345678',
            'voornaam' => 'Jan',
            'tussenvoegsel' => 'van',
            'achternaam' => 'Veen',
            'email' => 'jan@gmail.com',
            'straat' => 'kerkerhout',
        ]);
        Leverancier::create([
            'id' => 2,
            'bedrijfsnaam' => 'Lucht',
            'huisnummer' => 20,
            'postcode' => '1277BB',
            'plaats' => 'Utrecht',
            'telefoon' => '061565247878',
            'voornaam' => 'Henk',
            'tussenvoegsel' => ' ',
            'achternaam' => 'Boom',
            'email' => 'henk@gmail.com',
            'straat' => 'plassenstraat',
        ]);
        Leverancier::create([
            'id' => 3,
            'bedrijfsnaam' => 'Steen',
            'huisnummer' => 1,
            'postcode' => '1281HB',
            'plaats' => 'Wassenaar',
            'telefoon' => '061654987578',
            'voornaam' => 'Peter',
            'tussenvoegsel' => 'van der',
            'achternaam' => 'Plas',
            'email' => 'peter@gmail.com',
            'straat' => 'vanderlaan',
        ]);
        Leverancier::create([
            'id' => 4,
            'bedrijfsnaam' => 'Vuur',
            'huisnummer' => 5,
            'postcode' => '1264ZB',
            'plaats' => 'Loosden',
            'telefoon' => '061665565678',
            'voornaam' => 'Popo',
            'tussenvoegsel' => ' ',
            'achternaam' => 'Denker',
            'email' => 'popo@gmail.com',
            'straat' => 'visstraat',
        ]);
        Leverancier::create([
            'id' => 5,
            'bedrijfsnaam' => 'Elementen',
            'huisnummer' => 17,
            'postcode' => '1271RB',
            'plaats' => 'Kerkenhout',
            'telefoon' => '06166955678',
            'voornaam' => 'Gijs',
            'tussenvoegsel' => 'den',
            'achternaam' => 'Deef',
            'email' => 'gijs@gmail.com',
            'straat' => 'henkstraat',
        ]);

        $this->command->info('Drinks completed');
    }
}
