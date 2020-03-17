<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubSubCategoryTranslation extends Model {

    public $timestamps = false;
    public $fillable = ['name','sub_sub_category_id'];

}
