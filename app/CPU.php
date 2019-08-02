<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CPU extends Model
{
    public function products()
    {
        $this->hasMany(Product::class);
    }
    public function category()
    {
        return $this->belongsTo(App\Cate);
    }
}
