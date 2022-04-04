<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $url
 * @property integer $desc
 * @property Recipe[] $recipes
 * @property RecipeStep[] $recipeSteps
 */
class Video extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'video';

    /**
     * @var array
     */
    protected $fillable = ['url', 'desc'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function recipes()
    {
        return $this->hasMany('App\Models\Recipe');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function recipeSteps()
    {
        return $this->hasMany('App\Models\RecipeStep');
    }
}
