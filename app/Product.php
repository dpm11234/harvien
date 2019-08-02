<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $hidden   = ['updated_at'];
    protected $guarded  = ['images'];
    protected $casts    = [
        'user_id'   => 'integer',
        'brand_id'  => 'integer',
        'status'    => 'integer',
        'discount'  => 'float',
        'price'     => 'float',
        'created_at' => 'datetime:Y-m-d',
        'thumbnail' => 'nullable',
    ];

    protected $appends = [
        'images',
    ];

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function imageDetails()
    {
        return $this->hasMany(ImageDetail::class, 'product_id', 'id');
    }

    public function orderDetails()
    {
        return $this->hasMany(OrderDetail::class);
    }

    public function getSlugAttribute(): string
    {
        return str_slug($this->name);
    }

    public function getDiscPriceAttribute(): float
    {
        return (round($this->price * (100 - $this->discount) / 100));
    }

    public function getUrlAttribute()
    {
        return action('ProductController@show', [$this->id]);
    }

    public function getThumbnailAttribute($value)
    {
        return '/storage/uploads/images/' . $value;
    }

    public function getImagesAttribute()
    {
        return $this->imageDetails()->get()->map(function ($image) {
            return $image->image_url;
        });
    }

    public function setImagesAttribute($images)
    {
        foreach ($images as $image) {
            $imageModel = new ImageDetail;
            $imageModel->product_id = $this->id;
            $imageModel->image_url = $image['id'];
            $imageModel->save();
        }
    }

    public function ram()
    {
        return $this->hasOne(Ram::class);
    }

    public function drive()
    {
        return $this->hasOne(Drive::class);
    }

    public function cpu()
    {
        return $this->hasOne(CPU::class);
    }

    public function scopeProductDetails($query)
    {
        return $query
            ->when($this->category_id === 1, function ($q) {
                return $q->with('cpu');
            })
            ->when($this->category_id === 2, function ($q) {
                return $q->with('ram');
            })
            ->when($this->category_id === 3, function ($q) {
                return $q->with('disk');
            });
    }
}
