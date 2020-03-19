<?php

namespace App;
use App\Product;
use App\SubCategory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
class SubSubCategory extends Model
{
      use Translatable;

    public $translatedAttributes = ['name'];
    public $fillable = ['sub_category_id'];
    public $table = "sub_sub_categories";
    public function products(){
        return $this->hasMany(Product::class);
    }
    public function subCategory(){
        return $this->belongsTo(SubCategory::class , 'sub_category_id');
    }
}
