<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $desc
 * @property string $url
 * @property AppUser[] $appUsers
 * @property IngredientImg[] $ingredientImgs
 * @property NutrientImg[] $nutrientImgs
 * @property ProductImg[] $productImgs
 * @property NutritionProfileImg[] $nutritionProfileImgs
 * @property RecipeStepImg[] $recipeStepImgs
 * @property ReviewImg[] $reviewImgs
 * @property ImgTag[] $imgTags
 */
class Img extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'img';

    /**
     * @var array
     */
    protected $fillable = ['desc', 'url'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function appUsers()
    {
        return $this->hasMany('App\Models\AppUser');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ingredientImgs()
    {
        return $this->hasMany('App\Models\IngredientImg');
    }

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
    public function productImgs()
    {
        return $this->hasMany('App\Models\ProductImg');
    }

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
    public function recipeStepImgs()
    {
        return $this->hasMany('App\Models\RecipeStepImg');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function reviewImgs()
    {
        return $this->hasMany('App\Models\ReviewImg');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function imgTags()
    {
        return $this->hasMany('App\Models\ImgTag');
    }
}
