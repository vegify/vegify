<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $img_tag_id
 * @property integer $img_id
 * @property integer $tag_id
 * @property Img $img
 * @property Tag $tag
 */
class ImgTag extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'img_tag';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'img_tag_id';

    /**
     * @var array
     */
    protected $fillable = ['img_id', 'tag_id'];

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
    public function tag()
    {
        return $this->belongsTo('App\Models\Tag');
    }
}
