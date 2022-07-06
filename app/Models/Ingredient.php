<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    use HasFactory;

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
}
