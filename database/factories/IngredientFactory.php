<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use FakerRestaurant\Provider\en_US\Restaurant;

use App\Models\Amount;

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
        fake()->addProvider(new Restaurant(fake()));
        return [
            'name' => fake()->vegetableName(),
            'description' => fake()->paragraph(),
            'is_vegan' => fake()->boolean(),
            'serving_size' => Amount::factory(),
            'batch_size' => Amount::factory(),
        ];
    }
}
