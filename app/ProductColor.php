<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;
/**
 * App\ProductColor
 *
 * @property-read \App\Product $Product
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ProductColor newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ProductColor newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ProductColor query()
 * @mixin \Eloquent
 */
class ProductColor extends Model
{
    public $fillable = ['color','product_id'];
    public function Product() {
        return $this->belongsTo(Product::class , 'product_id');
    }
}
