<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $hidden   = ['updated_at'];
    protected $guarded  = [];
    protected $casts    = [
        'user_id'   => 'integer', 
        'brand_id'  => 'integer',
        'status'    => 'integer',
        'discount'  => 'float', 
        'price'     => 'float',
        'created_at'=> 'datetime:Y-m-d',
    ];
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
