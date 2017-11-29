<?php

namespace Ski360;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable=['name'];

    public function products()
    {
//        return $this->hasMany('Ski360\Product');
        return $this->hasMany(Product::class);
    }
}
