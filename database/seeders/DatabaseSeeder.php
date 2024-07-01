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
            Product::class,
            ProductSeeder::class,
            VoedselPakketSeeder::class,
            GezinssamenstellingSeeder::class,
            KlantenSeeder::class,
            CategorieSeeder::class,
            LeverancierSeeder::class,
            Allergieen::class,
            ProductAllergieen::class,
            ProductcategorieenSeeder::class,
            MagazijnSeeder::class,
            ProductAllergieenSeeder::class,
        ]);
    }
}
