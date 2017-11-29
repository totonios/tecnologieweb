<?php

namespace Ski360;

use Illuminate\Database\Eloquent\Model;

class Categorya extends Model
{

    protected $fillable = ['name'];

    public function products(){
      //return $this->hasMany('Ski360\Product'); fa la stessa cosa di quello sotto, solo che quello sotto è più bello
      return $this->hasMany(Product::class);

    }
}
