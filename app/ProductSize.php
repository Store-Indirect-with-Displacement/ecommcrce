<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;

/**
 * App\ProductSize
 *
 * @property-read \App\Product $Product
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ProductSize newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ProductSize newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ProductSize query()
 * @mixin \Eloquent
 */
class ProductSize extends Model {

    public $fillable = ['size', 'product_id'];

    public function Product() {
        return $this->belongsTo(Product::class, 'product_id');
    }

}
