<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    public function descriptions(){
      // Description shares namespace and is converted to a string to help solidify the relationship
      //this is eloquent mapping up the class
      return $this->hasMany(Description::class);
    }
}
