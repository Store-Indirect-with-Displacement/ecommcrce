<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;

/**
 * App\ProductImage
 *
 * @property int $id
 * @property string $image
 * @property int|null $is_main
 * @property int|null $product_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Product|null $product
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ProductImage newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ProductImage newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ProductImage query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ProductImage whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ProductImage whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ProductImage whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ProductImage whereIsMain($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ProductImage whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ProductImage whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property string $path
 * @property string $name
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ProductImage whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ProductImage wherePath($value)
 */
class ProductImage extends Model {

    public $fillable = ['image','name', 'is_main', 'product_id'];
    public function product() {
        return $this->belongsTo(Product::class, 'product_id');
    }

}
