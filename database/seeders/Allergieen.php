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
        $allergie = [
            ['naam' => 'Gluten'],
            ['naam' => 'Lactose'],
            ['naam' => 'Noten'],
            ['naam' => 'Pinda'],
            ['naam' => 'Soja'],
            ['naam' => 'Schaaldieren'],
            ['naam' => 'Vis'],
            ['naam' => 'Ei'],
            ['naam' => 'Selderij'],
            ['naam' => 'Mosterd'],
            ['naam' => 'Sesamzaad'],
            ['naam' => 'Zwaveldioxide en sulfieten'],
            ['naam' => 'Lupine'],
            ['naam' => 'Weekdieren'],
            ['naam' => 'Geen allergie'],
        ];
        DB::table('allergie')->insert($allergie);
    }
}
