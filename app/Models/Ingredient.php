<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $serving_size
 * @property integer $batch_size
 * @property string $name
 * @property string $desc
 * @property boolean $is_vegan
 * @property Amount $amount
 * @property Amount $amount
 * @property IngredientImg[] $ingredientImgs
 * @property IngredientInRecipe[] $ingredientInRecipes
 * @property IngredientTag[] $ingredientTags
 * @property ProductIngredientLabel[] $productIngredientLabels
 * @property Recipe[] $recipes
 * @property IngredientProduct[] $ingredientProducts
 * @property IngredientServingNutrientAmount[] $ingredientServingNutrientAmounts
 */
class Ingredient extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ingredient';

    /**
     * @var array
     */
    protected $fillable = ['serving_size', 'batch_size', 'name', 'desc', 'is_vegan'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function amount()
    {
        return $this->belongsTo('App\Models\Amount', 'batch_size');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function amount()
    {
        return $this->belongsTo('App\Models\Amount', 'serving_size');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ingredientImgs()
    {
        return $this->hasMany('App\Models\IngredientImg');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ingredientInRecipes()
    {
        return $this->hasMany('App\Models\IngredientInRecipe');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ingredientTags()
    {
        return $this->hasMany('App\Models\IngredientTag');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productIngredientLabels()
    {
        return $this->hasMany('App\Models\ProductIngredientLabel');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function recipes()
    {
        return $this->hasMany('App\Models\Recipe', 'as_ingredient_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ingredientProducts()
    {
        return $this->hasMany('App\Models\IngredientProduct');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ingredientServingNutrientAmounts()
    {
        return $this->hasMany('App\Models\IngredientServingNutrientAmount');
    }
}
