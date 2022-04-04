<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $img_id
 * @property integer $ingredient_id
 * @property Img $img
 * @property Ingredient $ingredient
 */
class IngredientImg extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ingredient_img';

    /**
     * @var array
     */
    protected $fillable = ['img_id', 'ingredient_id'];

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
    public function ingredient()
    {
        return $this->belongsTo('App\Models\Ingredient');
    }
}
