<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Producten;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'productnaam' => 'Pinda',
                'streepjescode' => '1234832910345',
                'isActief' => true,
                'opmerkingen' => null,
                'created_at' => now()->micro(6),
                'updated_at' => now()->micro(6),
            ],
            [
                'productnaam' => 'Babypoeder',
                'streepjescode' => '9234765012346',
                'isActief' => true,
                'opmerkingen' => null,
                'created_at' => now()->micro(6),
                'updated_at' => now()->micro(6),
            ],
            [
                'productnaam' => 'Appel',
                'streepjescode' => '0987654321098',
                'isActief' => true,
                'opmerkingen' => null,
                'created_at' => now()->micro(6),
                'updated_at' => now()->micro(6),
            ],
            [
                'productnaam' => 'Melk',
                'streepjescode' => '8763028462934',
                'isActief' => true,
                'opmerkingen' => null,
                'created_at' => now()->micro(6),
                'updated_at' => now()->micro(6),
            ],
            [
                'productnaam' => 'Brood',
                'streepjescode' => '1029384737321',
                'isActief' => true,
                'opmerkingen' => null,
                'created_at' => now()->micro(6),
                'updated_at' => now()->micro(6),
            ],
            [
                'productnaam' => 'Cola',
                'streepjescode' => '9283746501923',
                'isActief' => true,
                'opmerkingen' => null,
                'created_at' => now()->micro(6),
                'updated_at' => now()->micro(6),
            ],
            [
                'productnaam' => 'Spaghetti',
                'streepjescode' => '0192019264732',
                'isActief' => true,
                'opmerkingen' => null,
                'created_at' => now()->micro(6),
                'updated_at' => now()->micro(6),
            ],
            [
                'productnaam' => 'Tomatensoep',
                'streepjescode' => '5463728192034',
                'isActief' => true,
                'opmerkingen' => null,
                'created_at' => now()->micro(6),
                'updated_at' => now()->micro(6),
            ],
            [
                'productnaam' => 'Melk chocolade',
                'streepjescode' => '0912647328193',
                'isActief' => true,
                'opmerkingen' => null,
                'created_at' => now()->micro(6),
                'updated_at' => now()->micro(6),
            ],
        ];

        foreach ($data as $item) {
            Producten::create($item);
        }
    }
}
