<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\SubSubCategory;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Product extends Model implements TranslatableContract {

    use Translatable;

    public $translatedAttributes = ['name', 'orderStatus'];
    public $fillable = ['name', 'image', 'popularity', 'sub_subcategory_id'];
    public $table = "products";

    public function SubSubCategory() {
        return $this->belongsTo(SubSubCategory::class, 'sub_subcategory_id');
    }

}
