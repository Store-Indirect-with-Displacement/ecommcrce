<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Sub_SubCategory;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Product extends Model implements TranslatableContract {

    use Translatable;

    public $translatedAttributes = ['name', 'orderStatus'];
    public $fillable = ['name', 'image', 'popularity', 'sub_subcategory_id'];

    public function Sub_SubCategory() {
        return $this->belongsTo(Sub_SubCategory::class, 'sub_subcategory_id');
    }

}
