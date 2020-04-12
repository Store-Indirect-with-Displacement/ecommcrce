<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;
use App\Blog;
use App\SubCategory;
use App\SubSubCategory;
/**
 * App\BlogPostions
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Blog $blog
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Category[] $category
 * @property-read int|null $category_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BlogPostions newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BlogPostions newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BlogPostions query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BlogPostions whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BlogPostions whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BlogPostions whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class BlogPostions extends Model {

    public $fillable = ['category_id', 'sub_category_id', 'sub_subcategory_id', 'blog_id'];

    public function blog() {
        return $this->belongsTo(Blog::class, 'blog_id');
    }

    public function Category() {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function SubCategory() {
        return $this->belongsTo(SubCategory::class, 'sub_category_id');
    }

    public function SubSubCategory() {
        return $this->belongsTo(SubSubCategory::class, 'sub_subcategory_id');
    }

}
