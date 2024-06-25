<?php

namespace Database\Seeders;

use App\Models\Productcategorieen;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductcategorieenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'product_Id' => 1,
                'categorie_Id' => 8,
                'isActief' => true,
                'opmerkingen' => null,
                'created_at' => now()->micro(6),
                'updated_at' => now()->micro(6),
            ],
            [
                'product_Id' => 2,
                'categorie_Id' => 9,
                'isActief' => true,
                'opmerkingen' => null,
                'created_at' => now()->micro(6),
                'updated_at' => now()->micro(6),
            ],
            [
                'product_Id' => 3,
                'categorie_Id' => 1,
                'isActief' => true,
                'opmerkingen' => null,
                'created_at' => now()->micro(6),
                'updated_at' => now()->micro(6),
            ],
            [
                'product_Id' => 4,
                'categorie_Id' => 3,
                'isActief' => true,
                'opmerkingen' => null,
                'created_at' => now()->micro(6),
                'updated_at' => now()->micro(6),
            ],
            [
                'product_Id' => 5,
                'categorie_Id' => 4,
                'isActief' => true,
                'opmerkingen' => null,
                'created_at' => now()->micro(6),
                'updated_at' => now()->micro(6),
            ],
            [
                'product_Id' => 6,
                'categorie_Id' => 5,
                'isActief' => true,
                'opmerkingen' => null,
                'created_at' => now()->micro(6),
                'updated_at' => now()->micro(6),
            ],
            [
                'product_Id' => 7,
                'categorie_Id' => 6,
                'isActief' => true,
                'opmerkingen' => null,
                'created_at' => now()->micro(6),
                'updated_at' => now()->micro(6),
            ],
            [
                'product_Id' => 8,
                'categorie_Id' => 7,
                'isActief' => true,
                'opmerkingen' => null,
                'created_at' => now()->micro(6),
                'updated_at' => now()->micro(6),
            ],
            [
                'product_Id' => 9,
                'categorie_Id' => 8,
                'isActief' => true,
                'opmerkingen' => null,
                'created_at' => now()->micro(6),
                'updated_at' => now()->micro(6),
            ],
        ];

        foreach ($data as $item) {
            Productcategorieen::create($item);
        }
    }
}
