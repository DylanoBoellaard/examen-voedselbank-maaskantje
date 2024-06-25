<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VoedselPakketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\VoedselPakket::create([
            'datum_uitgifte' => '2024-01-07',
            'datum_samenstelling' => '2024-01-02',
            'klant_id' => 1,
        ]);

        \App\Models\VoedselPakket::create([
            'datum_uitgifte' => '2024-03-30',
            'datum_samenstelling' => '2024-03-15',
            'klant_id' => 2,
        ]);

        \App\Models\VoedselPakket::create([
            'datum_uitgifte' => '2024-04-10',
            'datum_samenstelling' => '2024-04-03',
            'klant_id' => 3,
        ]);

        \App\Models\VoedselPakket::create([
            'datum_uitgifte' => '2024-04-27',
            'datum_samenstelling' => '2024-04-20',
            'klant_id' => 4,
        ]);

        \App\Models\VoedselPakket::create([
            'datum_uitgifte' => '2024-05-24',
            'datum_samenstelling' => '2024-05-13',
            'klant_id' => 5,
        ]);
    }
}
