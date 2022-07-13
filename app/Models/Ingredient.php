<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Ingredient extends Model
{
    use HasFactory, Searchable;

    /**
     * The relationships that should always be loaded.
     *
     * @var array
     */
    protected $with = ['serving_size', 'batch_size'];

    /**
     * Get the serving size associated with the ingredient.
     */
    public function serving_size()
    {
        return $this->hasOne(Amount::class, 'id', 'serving_size');
    }

    /**
     * Get the batch size associated with the ingredient.
     */
    public function batch_size()
    {
        return $this->hasOne(Amount::class, 'id', 'batch_size');
    }

    /**
     * Every recipe in the database is an ingredient, but not every ingredient is a recipe.
     */
    public function recipe()
    {
        return $this->hasOne(Recipe::class, 'as_ingredient_id', 'id');
    }

    /**
     * Get the recipes which use the ingredient.
     */
    public function recipes()
    {
        return $this->belongsToMany(
            Recipe::class,
            'ingredient_in_recipe',
            'ingredient_id',
            'recipe_id',
        );
    }
}
