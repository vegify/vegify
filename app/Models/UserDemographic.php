<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $user_id
 * @property string $gender
 * @property string $birthdate
 * @property string $location
 * @property AppUser $appUser
 */
class UserDemographic extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['user_id', 'gender', 'birthdate', 'location'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function appUser()
    {
        return $this->belongsTo('App\Models\AppUser', 'user_id');
    }
}
