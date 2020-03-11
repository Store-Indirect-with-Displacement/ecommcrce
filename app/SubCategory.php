<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;
use App\Sub_SubCategory;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class SubCategory extends Model {

    use Translatable;

    public $translatedAttributes = ['name'];
    public $fillable = ['category_id'];
    public function sub_subCategories() {
        return $this->hasMany(Sub_SubCategory::class);
    }
    public function category() {
        return $this->belongsTo(Category::class , 'category_id');
    }
}
