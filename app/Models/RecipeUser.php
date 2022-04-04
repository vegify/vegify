<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $recipe_id
 * @property integer $user_id
 * @property Recipe $recipe
 * @property AppUser $appUser
 */
class RecipeUser extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'recipe_user';

    /**
     * @var array
     */
    protected $fillable = ['recipe_id', 'user_id'];

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
    public function appUser()
    {
        return $this->belongsTo('App\Models\AppUser', 'user_id');
    }
}
