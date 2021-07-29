<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mobile extends Model
{
    protected $fillable=[
        'name', 'description', 'price'
    ];

    public function brand(){
        return $this->hasMany(Brand::class);
    }
}
