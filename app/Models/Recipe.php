<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $as_ingredient_id
 * @property integer $creator_id
 * @property integer $video_id
 * @property string $subtitle
 * @property integer $prep_minutes
 * @property integer $cook_minutes
 * @property integer $total_time
 * @property integer $steps
 * @property IngredientInRecipe[] $ingredientInRecipes
 * @property AppUser $appUser
 * @property Ingredient $ingredient
 * @property Video $video
 * @property RecipeTag[] $recipeTags
 * @property RecipeStep[] $recipeSteps
 * @property RecipeUser[] $recipeUsers
 * @property RecipeReview[] $recipeReviews
 */
class Recipe extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'recipe';

    /**
     * @var array
     */
    protected $fillable = ['as_ingredient_id', 'creator_id', 'video_id', 'subtitle', 'prep_minutes', 'cook_minutes', 'total_time', 'steps'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ingredientInRecipes()
    {
        return $this->hasMany('App\Models\IngredientInRecipe');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function appUser()
    {
        return $this->belongsTo('App\Models\AppUser', 'creator_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function ingredient()
    {
        return $this->belongsTo('App\Models\Ingredient', 'as_ingredient_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function video()
    {
        return $this->belongsTo('App\Models\Video');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function recipeTags()
    {
        return $this->hasMany('App\Models\RecipeTag');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function recipeSteps()
    {
        return $this->hasMany('App\Models\RecipeStep');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function recipeUsers()
    {
        return $this->hasMany('App\Models\RecipeUser');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function recipeReviews()
    {
        return $this->hasMany('App\Models\RecipeReview');
    }
}
