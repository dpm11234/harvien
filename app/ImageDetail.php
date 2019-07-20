<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImageDetail extends Model
{
    protected $visible = ['name'];
    public function product()
    {
        return $this->belongsTo('App\Product');
    }
}
