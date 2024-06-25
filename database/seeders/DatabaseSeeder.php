<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call([
            GezinssamenstellingSeeder::class,
            KlantenSeeder::class,
            ProductSeeder::class,
            CategorieSeeder::class,
            MagazijnSeeder::class,
            ProductcategorieenSeeder::class,
            LeverancierSeeder::class,
            Allergieen::class,
            ProductAllergieen::class,
        ]);
    }
}
