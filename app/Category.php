<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use App\SubCategory;

class Category extends Model implements TranslatableContract {

    use Translatable;

    public $translatedAttributes = ['name'];

    public function subCategories() {
        return $this->hasMany(SubCategory::class);
    }

}
