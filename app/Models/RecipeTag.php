<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $recipe_id
 * @property integer $tag_id
 * @property Recipe $recipe
 * @property Tag $tag
 */
class RecipeTag extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'recipe_tag';

    /**
     * @var array
     */
    protected $fillable = ['recipe_id', 'tag_id'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function recipe()
    {
        return $this->belongsTo('App\Models\Recipe');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tag()
    {
        return $this->belongsTo('App\Models\Tag');
    }
}
