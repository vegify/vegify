<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $nutrient_id
 * @property string $unit
 * @property float $amount
 * @property float $grams
 * @property Nutrient $nutrient
 */
class NutrientAmount extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'nutrient_amount';

    /**
     * @var array
     */
    protected $fillable = ['nutrient_id', 'unit', 'amount', 'grams'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function nutrient()
    {
        return $this->belongsTo('App\Models\Nutrient');
    }
}
