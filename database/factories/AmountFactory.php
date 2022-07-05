<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Amount>
 */
class AmountFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'unit' => fake()->word(),
            'amount' => fake()->randomFloat(6, 9999999999990, 9999999999999),
            'grams' => fake()->randomFloat(6, 0.000001, 0.000009),
        ];
    }
}
