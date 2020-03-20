<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\ProductTranslation
 *
 * @property int $id
 * @property string $name
 * @property string|null $orderStatus
 * @property int|null $product_id
 * @property string $locale
 * @property string|null $created_at
 * @property string|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ProductTranslation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ProductTranslation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ProductTranslation query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ProductTranslation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ProductTranslation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ProductTranslation whereLocale($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ProductTranslation whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ProductTranslation whereOrderStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ProductTranslation whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ProductTranslation whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class ProductTranslation extends Model
{
     public $timestamps = false;
     public $fillable = ['name' , 'orderStatus'];
}
