<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $video_id
 * @property integer $recipe_id
 * @property string $header_text
 * @property string $main_text
 * @property RecipeStepImg[] $recipeStepImgs
 * @property Video $video
 * @property Recipe $recipe
 */
class RecipeStep extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'recipe_step';

    /**
     * @var array
     */
    protected $fillable = ['video_id', 'recipe_id', 'header_text', 'main_text'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function recipeStepImgs()
    {
        return $this->hasMany('App\Models\RecipeStepImg');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function video()
    {
        return $this->belongsTo('App\Models\Video');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function recipe()
    {
        return $this->belongsTo('App\Models\Recipe');
    }
}
