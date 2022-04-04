<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $url
 * @property string $desc
 * @property Product[] $products
 * @property Product[] $products
 */
class Href extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'href';

    /**
     * @var array
     */
    protected $fillable = ['url', 'desc'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function products()
    {
        return $this->hasMany('App\Models\Product', 'amazon_link');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function products()
    {
        return $this->hasMany('App\Models\Product', 'store_locator_link');
    }
}
