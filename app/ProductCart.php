<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;
/**
 * App\ProductCart
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ProductCart newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ProductCart newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ProductCart query()
 * @mixin \Eloquent
 */
class ProductCart extends Model {
    public $fileable = ['weight'];
    
    
}
