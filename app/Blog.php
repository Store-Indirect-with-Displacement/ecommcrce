<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Blog extends Model {

    use Translatable;

    public $fillable = ['blogger_id', 'date', 'is_archive', 'is_resnt', 'image'];
    public $translatedAttributes = ['title', 'body', 'more_read'];

}
