<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $user_id
 * @property integer $nutrition_profile_id
 * @property NutritionProfile $nutritionProfile
 * @property AppUser $appUser
 */
class UserNutritionProfile extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'user_nutrition_profile';

    /**
     * @var array
     */
    protected $fillable = ['user_id', 'nutrition_profile_id'];

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
    public function appUser()
    {
        return $this->belongsTo('App\Models\AppUser', 'user_id');
    }
}
