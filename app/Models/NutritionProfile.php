<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $name
 * @property string $img_url
 * @property string $originator_name
 * @property string $originator_url
 * @property string $desc
 * @property NutritionProfileImg[] $nutritionProfileImgs
 * @property UserNutritionProfile[] $userNutritionProfiles
 * @property NutritionProfileTrackedNutrient[] $nutritionProfileTrackedNutrients
 */
class NutritionProfile extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'nutrition_profile';

    /**
     * @var array
     */
    protected $fillable = ['name', 'img_url', 'originator_name', 'originator_url', 'desc'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function nutritionProfileImgs()
    {
        return $this->hasMany('App\Models\NutritionProfileImg');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function userNutritionProfiles()
    {
        return $this->hasMany('App\Models\UserNutritionProfile');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function nutritionProfileTrackedNutrients()
    {
        return $this->hasMany('App\Models\NutritionProfileTrackedNutrient');
    }
}
