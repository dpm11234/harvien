<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImageDetail extends Model
{
    protected $visible = ['image_url'];
    public function product()
    {
        return $this->belongsTo('App\Product', 'id', 'product_id');
    }

    public function getImageUrl()
    {
        return storage_path('public/uploads/images/').$this->imageUrl;
    }
}
