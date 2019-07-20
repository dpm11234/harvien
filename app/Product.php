<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $hidden = ['updated_at'];
    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function imageDetails()
    {
        return $this->hasMany('App\ImageDetail', 'product_id', 'id');
    }

    public function getImagesAttribute()
    {
        return $this->imageDetails();
    }

    public function orderDetails()
    {
        return $this->hasMany(OrderDetail::class);
    }
}
