<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Blog;

class Comment extends Model {

    public $fillable = ['comment', 'blog_id', 'user_id', 'name', 'email', 'image'];

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function Blog() {
        return $this->belongsTo(Blog::class, 'blog_id');
    }

}
