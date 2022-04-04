<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $img_id
 * @property integer $recipe_step_id
 * @property Img $img
 * @property RecipeStep $recipeStep
 */
class RecipeStepImg extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'recipe_step_img';

    /**
     * @var array
     */
    protected $fillable = ['img_id', 'recipe_step_id'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function img()
    {
        return $this->belongsTo('App\Models\Img');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function recipeStep()
    {
        return $this->belongsTo('App\Models\RecipeStep');
    }
}
