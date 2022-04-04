<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $img_id
 * @property integer $nutrient_id
 * @property Img $img
 * @property Nutrient $nutrient
 */
class NutrientImg extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'nutrient_img';

    /**
     * @var array
     */
    protected $fillable = ['img_id', 'nutrient_id'];

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
    public function nutrient()
    {
        return $this->belongsTo('App\Models\Nutrient');
    }
}
