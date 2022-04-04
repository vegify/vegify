<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $nutrient_id
 * @property integer $ingredient_id
 * @property string $unit
 * @property float $amount
 * @property float $grams
 * @property Ingredient $ingredient
 * @property Nutrient $nutrient
 */
class IngredientServingNutrientAmount extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ingredient_serving_nutrient_amount';

    /**
     * @var array
     */
    protected $fillable = ['nutrient_id', 'ingredient_id', 'unit', 'amount', 'grams'];

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
    public function nutrient()
    {
        return $this->belongsTo('App\Models\Nutrient');
    }
}
