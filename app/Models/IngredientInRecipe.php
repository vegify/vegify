<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;
use Laravel\Scout\Searchable;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\IngredientInRecipe>
 */
class IngredientInRecipe extends Pivot
{
    use HasFactory, Searchable;

    protected $with = ['ingredient', 'amount'];

    public function recipe()
    {
        return $this->belongsTo(Recipe::class);
    }
    public function ingredient()
    {
        return $this->belongsTo(Ingredient::class);
    }
    public function amount()
    {
        return $this->belongsTo(Amount::class);
    }
}
