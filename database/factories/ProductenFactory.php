<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Producten>
 */
class ProductenFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'productnaam' => $this->faker->word,
            'streepjescode' => $this->faker->unique()->ean13,
            'isActief' => $this->faker->boolean,
            'opmerkingen' => $this->faker->optional()->sentence,
            'created_at' => now()->micro(6),
            'updated_at' => now()->micro(6),
        ];
    }
}
