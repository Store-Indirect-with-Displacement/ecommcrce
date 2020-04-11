<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogTranslation extends Model {

    public $timestamps = false;
    public $fillable = ['title', 'body', 'more_read'];

}
