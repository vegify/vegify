<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $nutrition_profile_id
 * @property integer $img_id
 * @property Img $img
 * @property NutritionProfile $nutritionProfile
 */
class NutritionProfileImg extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'nutrition_profile_img';

    /**
     * @var array
     */
    protected $fillable = ['nutrition_profile_id', 'img_id'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function img()
    {
        return $this->belongsTo('App\Models\Img');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function nutritionProfile()
    {
        return $this->belongsTo('App\Models\NutritionProfile');
    }
}
