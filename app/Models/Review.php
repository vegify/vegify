<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $stars
 * @property string $title
 * @property string $text
 * @property ReviewImg[] $reviewImgs
 * @property RecipeReview[] $recipeReviews
 */
class Review extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'review';

    /**
     * @var array
     */
    protected $fillable = ['stars', 'title', 'text'];

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
    public function recipeReviews()
    {
        return $this->hasMany('App\Models\RecipeReview');
    }
}
