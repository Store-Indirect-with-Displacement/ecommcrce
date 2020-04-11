<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;
use App\Blog;
use App\SubCategory;
use App\SubSubCategory;

class BlogPostions extends Model {

    public $fillable = ['postion', 'blog_id'];

    /**
     * 
     * @return type
     */
    public function category() {
        return $this->hasMany(Category::class);
    }

    public function blog() {
        return $this->belongsTo(Blog::class, 'blog_id');
    }

}
