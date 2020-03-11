<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;
use App\SubCategory;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Sub_SubCategory extends Model {

    use Translatable;

    public $translatedAttributes = ['name'];
    public $fillable = ['subcategory_id'];

    public function products() {
        return $this->hasMany(Product::class);
    }

    public function subCategry() {
        return $this->belongsTo(SubCategory::class, 'subcategory_id');
    }

}
