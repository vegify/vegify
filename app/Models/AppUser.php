<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $img_id
 * @property string $username
 * @property string $bio
 * @property string $website
 * @property string $email
 * @property string $pwd
 * @property Img $img
 * @property Recipe[] $recipes
 * @property RecipeUser[] $recipeUsers
 * @property UserDemographic[] $userDemographics
 * @property UserNutritionProfile[] $userNutritionProfiles
 * @property UserBiometric $userBiometric
 * @property RecipeReview[] $recipeReviews
 */
class AppUser extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'app_user';

    /**
     * @var array
     */
    protected $fillable = ['img_id', 'username', 'bio', 'website', 'email', 'pwd'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function img()
    {
        return $this->belongsTo('App\Models\Img');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function recipes()
    {
        return $this->hasMany('App\Models\Recipe', 'creator_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function recipeUsers()
    {
        return $this->hasMany('App\Models\RecipeUser', 'user_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function userDemographics()
    {
        return $this->hasMany('App\Models\UserDemographic', 'user_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function userNutritionProfiles()
    {
        return $this->hasMany('App\Models\UserNutritionProfile', 'user_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function userBiometric()
    {
        return $this->hasOne('App\Models\UserBiometric', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function recipeReviews()
    {
        return $this->hasMany('App\Models\RecipeReview', 'user_id');
    }
}
