<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Description extends Model
{
    //
    public function product(){
      //second side of the relationship
      $this->belongsTo(Product::class);

      //scope is a query modifier
    }
    //'scope' is the prefix and dropped when calling it
    public function scopeOfProduct($query,$productId){

      return $query->where('product_id',$productId);
    }
}
