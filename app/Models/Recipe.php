<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Recipe extends Model
{
    use HasFactory, Searchable;

    /**
     * The relationships that should always be loaded.
     *
     * @var array
     */
    protected $with = ['as_ingredient'];

    public function as_ingredient()
    {
        return $this->belongsTo(Ingredient::class, 'as_ingredient_id');
    }

    public function creator()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function ingredients()
    {
        return $this->hasMany(IngredientInRecipe::class, 'recipe_id', 'id');
    }

    public function searchable(): bool
    {
        return true;
    }
}
