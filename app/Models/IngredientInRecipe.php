<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $recipe_id
 * @property integer $ingredient_id
 * @property integer $amount_id
 * @property Amount $amount
 * @property Ingredient $ingredient
 * @property Recipe $recipe
 * @property IngredientInRecipeNutrientAmount[] $ingredientInRecipeNutrientAmounts
 */
class IngredientInRecipe extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ingredient_in_recipe';

    /**
     * @var array
     */
    protected $fillable = ['recipe_id', 'ingredient_id', 'amount_id'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function amount()
    {
        return $this->belongsTo('App\Models\Amount');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function ingredient()
    {
        return $this->belongsTo('App\Models\Ingredient');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function recipe()
    {
        return $this->belongsTo('App\Models\Recipe');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ingredientInRecipeNutrientAmounts()
    {
        return $this->hasMany('App\Models\IngredientInRecipeNutrientAmount');
    }
}
