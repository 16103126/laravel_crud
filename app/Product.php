<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable =[
        'product_name', 'description', 'price'
    ];

    // public $timestamps = false;


    // Mutataor

    // public function getDescriptionAttribute($value)
    // {
    //     return $value. ', sdakhsd';
    //     return ucFirst($value);
    // }

    // Mutataor

    // public function setDescriptionAttribute($value)
    // {
    //     $this->attributes['description'] = strtolower($value);
    // }

    // public function setPriceAttribute($value)
    // {
    //     $this->attributes['price'] = $value."tk";
    // }
}
