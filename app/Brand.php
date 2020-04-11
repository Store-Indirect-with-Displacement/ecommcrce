<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Brand extends Model {

    use Translatable;

    public $fillable = ['logo'];
    public $translatedAttributes = ['name'];

}
