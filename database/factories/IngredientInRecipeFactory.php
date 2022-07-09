<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Recipe;
use App\Models\Ingredient;
use App\Models\Amount;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\IngredientInRecipe>
 */
class IngredientInRecipeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'recipe_id' => Recipe::factory(),
            'ingredient_id' => Ingredient::factory(),
            'amount_id' => Amount::factory(),
        ];
    }
}
