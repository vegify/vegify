<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $amazon_link
 * @property integer $store_locator_link
 * @property string $name
 * @property integer $upc
 * @property float $price
 * @property boolean $is_vegan
 * @property string $desc
 * @property ProductImg[] $productImgs
 * @property Href $href
 * @property Href $href
 * @property ProductIngredientLabel[] $productIngredientLabels
 * @property ProductTag[] $productTags
 * @property IngredientProduct[] $ingredientProducts
 */
class Product extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'product';

    /**
     * @var array
     */
    protected $fillable = ['amazon_link', 'store_locator_link', 'name', 'upc', 'price', 'is_vegan', 'desc'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productImgs()
    {
        return $this->hasMany('App\Models\ProductImg');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function href()
    {
        return $this->belongsTo('App\Models\Href', 'amazon_link');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function href()
    {
        return $this->belongsTo('App\Models\Href', 'store_locator_link');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productIngredientLabels()
    {
        return $this->hasMany('App\Models\ProductIngredientLabel');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productTags()
    {
        return $this->hasMany('App\Models\ProductTag');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ingredientProducts()
    {
        return $this->hasMany('App\Models\IngredientProduct');
    }
}
