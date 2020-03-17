<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;
use App\SubSubCategory;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class SubCategory extends Model {

    use Translatable;

    public $translatedAttributes = ['name'];
    public $fillable = ['category_id'];
    public $table = "sub_categories";
    public function subsubCategories() {
        return $this->hasMany(SubSubCategory::class);
    }
    public function category() {
        return $this->belongsTo(Category::class , 'category_id');
    }
}
