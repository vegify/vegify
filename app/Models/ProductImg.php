<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $img_id
 * @property integer $product_id
 * @property boolean $label
 * @property boolean $nutrition_label
 * @property boolean $ingredient_label
 * @property Img $img
 * @property Product $product
 */
class ProductImg extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'product_img';

    /**
     * @var array
     */
    protected $fillable = ['img_id', 'product_id', 'label', 'nutrition_label', 'ingredient_label'];

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
    public function product()
    {
        return $this->belongsTo('App\Models\Product');
    }
}
