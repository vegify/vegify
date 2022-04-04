<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $review_id
 * @property integer $recipe_id
 * @property integer $user_id
 * @property Recipe $recipe
 * @property Review $review
 * @property AppUser $appUser
 */
class RecipeReview extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'recipe_review';

    /**
     * @var array
     */
    protected $fillable = ['review_id', 'recipe_id', 'user_id'];

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
    public function review()
    {
        return $this->belongsTo('App\Models\Review');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function appUser()
    {
        return $this->belongsTo('App\Models\AppUser', 'user_id');
    }
}
