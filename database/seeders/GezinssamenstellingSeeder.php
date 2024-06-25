<?php

namespace Database\Seeders;

use App\Models\Gezinssamenstelling;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GezinssamenstellingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'aantalvolwassenen' => 2,
                'aantalkinderen' => 1,
                'aantalbabies' => 0,
            ],
            [
                'aantalvolwassenen' => 3,
                'aantalkinderen' => 1,
                'aantalbabies' => 0,
            ],
            [
                'aantalvolwassenen' => 2,
                'aantalkinderen' => 1,
                'aantalbabies' => 1,
            ],
            [
                'aantalvolwassenen' => 1,
                'aantalkinderen' => 0,
                'aantalbabies' => 0,
            ],
        ];
        foreach ($data as $item) {
            Gezinssamenstelling::create($item);
        }
    }
}
