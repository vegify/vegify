<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $tag
 * @property IngredientTag[] $ingredientTags
 * @property ProductTag[] $productTags
 * @property RecipeTag[] $recipeTags
 * @property ImgTag[] $imgTags
 */
class Tag extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'tag';

    /**
     * @var array
     */
    protected $fillable = ['tag'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ingredientTags()
    {
        return $this->hasMany('App\Models\IngredientTag');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productTags()
    {
        return $this->hasMany('App\Models\ProductTag');
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
    public function imgTags()
    {
        return $this->hasMany('App\Models\ImgTag');
    }
}
