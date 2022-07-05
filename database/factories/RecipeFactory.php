<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Recipe>
 */
class RecipeFactory extends Factory
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
            'as_ingredient_id' => fake()->numberBetween(1, 5),
            'creator_id' => fake()->numberBetween(1, 5),
            'subtitle' =>
                'with ' . fake()->fruitName() . ' ' . fake()->sauceName(),
            'prep_minutes' => fake()->numberBetween(0, 45),
            'cook_minutes' => fake()->numberBetween(0, 30),
            'total_time' => fake()->numberBetween(35, 75),
            'video_id' => fake()->numberBetween(0, 25),
        ];
    }
}
