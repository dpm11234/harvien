<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $hidden = ['updated_at'];
    protected $guarded  = [];
    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function imageDetails()
    {
        return $this->hasMany('App\ImageDetail', 'product_id', 'id');
    }

    public function orderDetails()
    {
        return $this->hasMany(OrderDetail::class);
    }

    public function getSlugAttribute() : string
    {
        return str_slug($this->name);
    }

    public function getUrlAttribute()
    {
        return action('ProductController@show', [$this->id]);
    }
}
