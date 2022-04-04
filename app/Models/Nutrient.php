<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $name
 * @property string $desc
 * @property NutrientImg[] $nutrientImgs
 * @property NutritionProfileTrackedNutrient[] $nutritionProfileTrackedNutrients
 * @property NutrientAmount[] $nutrientAmounts
 * @property IngredientInRecipeNutrientAmount[] $ingredientInRecipeNutrientAmounts
 * @property IngredientServingNutrientAmount[] $ingredientServingNutrientAmounts
 */
class Nutrient extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'nutrient';

    /**
     * @var array
     */
    protected $fillable = ['name', 'desc'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function nutrientImgs()
    {
        return $this->hasMany('App\Models\NutrientImg');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function nutritionProfileTrackedNutrients()
    {
        return $this->hasMany('App\Models\NutritionProfileTrackedNutrient');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function nutrientAmounts()
    {
        return $this->hasMany('App\Models\NutrientAmount');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ingredientInRecipeNutrientAmounts()
    {
        return $this->hasMany('App\Models\IngredientInRecipeNutrientAmount');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ingredientServingNutrientAmounts()
    {
        return $this->hasMany('App\Models\IngredientServingNutrientAmount');
    }
}
