<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $fillable =[
        'name', 'mobile_id'
    ];

    public function mobile()
    {
        return $this->belongsTo(Mobile::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
}
