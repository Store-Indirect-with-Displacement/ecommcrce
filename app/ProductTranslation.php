<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductTranslation extends Model
{
     public $timestamps = false;
     public $fillable = ['name' , 'orderStatus'];
}
