<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $nutrient_id
 * @property integer $ingredient_in_recipe_id
 * @property string $unit
 * @property float $amount
 * @property float $grams
 * @property IngredientInRecipe $ingredientInRecipe
 * @property Nutrient $nutrient
 */
class IngredientInRecipeNutrientAmount extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ingredient_in_recipe_nutrient_amount';

    /**
     * @var array
     */
    protected $fillable = ['nutrient_id', 'ingredient_in_recipe_id', 'unit', 'amount', 'grams'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function ingredientInRecipe()
    {
        return $this->belongsTo('App\Models\IngredientInRecipe');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function nutrient()
    {
        return $this->belongsTo('App\Models\Nutrient');
    }
}
