<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //Fillable example
    // protected $fillabel = ['name', 'email', 'active'];

    //guarded example
    protected $guarded = [];

    public function scopeActive($query)
    {
        return $query->where('active', 1);
    }

    public function scopeInactive($query)
    {
        return $query->where('active', 0);
    }

}
