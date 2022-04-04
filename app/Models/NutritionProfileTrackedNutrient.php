<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $nutrient_id
 * @property integer $nutrition_profile_id
 * @property string $unit
 * @property float $amount
 * @property float $grams
 * @property NutritionProfile $nutritionProfile
 * @property Nutrient $nutrient
 */
class NutritionProfileTrackedNutrient extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'nutrition_profile_tracked_nutrient';

    /**
     * @var array
     */
    protected $fillable = ['nutrient_id', 'nutrition_profile_id', 'unit', 'amount', 'grams'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function nutritionProfile()
    {
        return $this->belongsTo('App\Models\NutritionProfile');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function nutrient()
    {
        return $this->belongsTo('App\Models\Nutrient');
    }
}
