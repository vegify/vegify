<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property boolean $calorie_tracking
 * @property string $weight_goal
 * @property float $weight_in_kg
 * @property float $height_in_cm
 * @property float $sex_multiplier
 * @property AppUser $appUser
 */
class UserBiometric extends Model
{
    /**
     * Indicates if the IDs are auto-incrementing.
     * 
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = ['calorie_tracking', 'weight_goal', 'weight_in_kg', 'height_in_cm', 'sex_multiplier'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function appUser()
    {
        return $this->belongsTo('App\Models\AppUser', 'id');
    }
}
