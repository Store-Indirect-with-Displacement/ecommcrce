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
 * @property int $id
 * @property string $color
 * @property int $product_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ProductColor whereColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ProductColor whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ProductColor whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ProductColor whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ProductColor whereUpdatedAt($value)
 */
class ProductColor extends Model
{
    public $fillable = ['color','product_id'];
    public function Product() {
        return $this->belongsTo(Product::class , 'product_id');
    }
}
