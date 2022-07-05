<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ingredient>
 */
class IngredientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        fake()->addProvider(
            new \FakerRestaurant\Provider\en_US\Restaurant(fake()),
        );
        return [
            'name' => fake()->vegetableName(),
            'description' => fake()->emoji(),
            'is_vegan' => fake()->boolean(),
            'serving_size' => fake()->numberBetween(1, 5),
            'batch_size' => fake()->numberBetween(1, 5),
        ];
    }
}
