<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $unit
 * @property float $amount
 * @property float $grams
 * @property Ingredient[] $ingredients
 * @property Ingredient[] $ingredients
 * @property IngredientInRecipe[] $ingredientInRecipes
 */
class Amount extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'amount';

    /**
     * @var array
     */
    protected $fillable = ['unit', 'amount', 'grams'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ingredients()
    {
        return $this->hasMany('App\Models\Ingredient', 'batch_size');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ingredients()
    {
        return $this->hasMany('App\Models\Ingredient', 'serving_size');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ingredientInRecipes()
    {
        return $this->hasMany('App\Models\IngredientInRecipe');
    }
}
