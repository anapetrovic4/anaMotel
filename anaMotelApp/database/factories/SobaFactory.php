<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Soba>
 */
class SobaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'kapacitet' => fake()->numberBetween($min = 1, $max = 10),
            'broj_sobe' => fake()->numberBetween($min = 100, $max = 600),
        ];
    }
}
