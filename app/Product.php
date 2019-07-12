<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // protected $fillable = ['name', 'email', 'active'];
    protected $guarded = [];

    public function scopeActive($query) {
        return $query->where('active', 1);
    }

    public function scopeInactive($query) {
        return $query->where('active', 0);
    }

    public function brand() {
        return $this->belongsTo(Brand::class);
    }
}
