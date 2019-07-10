<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    // fillable
    // protected $fillable = ['name', 'email', 'active'];

    protected $guarded = [];

    public function scopeActive($query)
    {
        return $query->where('active', 1);
    }

    public function scopeInactive($query)
    {
        return $query->where('active', 2);
    }


    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
