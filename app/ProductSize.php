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
 * @property int $id
 * @property string $size
 * @property int $product_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ProductSize whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ProductSize whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ProductSize whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ProductSize whereSize($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ProductSize whereUpdatedAt($value)
 */
class ProductSize extends Model {

    public $fillable = ['size', 'product_id'];

    public function Product() {
        return $this->belongsTo(Product::class, 'product_id');
    }

}
