<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Iznajmljivanje>
 */
class IznajmljivanjeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'gost_id' => random_int(1, Gost::count()),
            'soba_id' => random_int(1, Soba::count()),
            'datum_od' => fake()->date($format = 'Y-m-d', $max = 'now'),
            'datum_do' => fake()->date($format = 'Y-m-d', $max = 'now'),
        ];
    }
}
