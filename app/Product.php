<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\SubSubCategory;
use App\Category;
use App\SubCategory;
use App\ProductImage;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Product extends Model implements TranslatableContract {

    use Translatable;

    public $translatedAttributes = ['name', 'orderStatus'];
    public $fillable = ['name', 'image', 'popularity', 'sub_subcategory_id', 'category_id', 'sub_category_id'];
    public $table = "products";

    public function Category() {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function SubCategory() {
        return $this->belongsTo(SubCategory::class, 'sub_category_id');
    }

    public function SubSubCategory() {
        return $this->belongsTo(SubSubCategory::class, 'sub_subcategory_id');
    }
    public function Images(){
        return $this->hasMany(ProductImage::class);
    }

}
