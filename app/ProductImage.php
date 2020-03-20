<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;
class ProductImage extends Model
{
      public $fillable = ['image', 'is_main' ,'product_id'];
      public function product(){
          return $this->belongsTo(Product::class ,'product_id');
      }
}
