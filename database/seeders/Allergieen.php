<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Allergieen extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $allergieen = [
            'Gluten',
            'Lactose',
            'Noten',
            'Pinda',
            'Soja',
            'Schaaldieren',
            'Vis',
            'Ei',
            'Selderij',
            'Mosterd',
            'Sesamzaad',
            'Zwaveldioxide en sulfieten',
            'Lupine',
            'Weekdieren',
        ];

        DB::table('allergieen')->insert(
            array_map(
                fn ($allergie) => ['naam' => $allergie],
                $allergieen
            )
        );
    }
}
