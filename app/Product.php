<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\SubSubCategory;
use App\Category;
use App\SubCategory;
use App\ProductImage;
use App\ProductSize;
use App\ProductColor;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Heesapp\Productcart\Traits\Cartable;


/**
 * App\Product
 *
 * @property int $id
 * @property string|null $image
 * @property string|null $popularity
 * @property int|null $price
 * @property int $subsubcategory_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $category_id
 * @property int $sub_category_id
 * @property-read \App\Category $Category
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\ProductImage[] $Images
 * @property-read int|null $images_count
 * @property-read \App\SubCategory $SubCategory
 * @property-read \App\SubSubCategory $SubSubCategory
 * @property-read \App\ProductTranslation $translation
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\ProductTranslation[] $translations
 * @property-read int|null $translations_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product listsTranslations($translationField)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product notTranslatedIn($locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product orWhereTranslation($translationField, $value, $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product orWhereTranslationLike($translationField, $value, $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product orderByTranslation($translationField, $sortMethod = 'asc')
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product translated()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product translatedIn($locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product wherePopularity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product whereSubCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product whereSubsubcategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product whereTranslation($translationField, $value, $locale = null, $method = 'whereHas', $operator = '=')
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product whereTranslationLike($translationField, $value, $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product withTranslation()
 * @mixin \Eloquent
 * @property string|null $order_status
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product whereOrderStatus($value)
 * @property int|null $sub_subcategory_id
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product whereSubSubcategoryId($value)
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\ProductColor[] $colors
 * @property-read int|null $colors_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\ProductSize[] $sizes
 * @property-read int|null $sizes_count
 * @property int|null $ratings
 * @property int|null $is_New
 * @property int|null $is_Discount
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product whereIsDiscount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product whereIsNew($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product whereRatings($value)
 * @property int|null $Discount
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product whereDiscount($value)
 */
class Product extends Model implements TranslatableContract {

    use Translatable , Cartable;
    public $translatedAttributes = ['name', 'orderStatus','Details'];
    public $fillable = ['name', 'image', 'popularity', 'order_status', 'sub_subcategory_id', 'category_id', 'sub_category_id', 'is_New', 'is_Discount', 'Discount'];
    public $table = "products";

    public function Category() {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function SubCategory() {
        return $this->belongsTo(SubCategory::class, 'sub_category_id');
    }

    public function SubSubCategory() {
        return $this->belongsTo(SubSubCategory::class, 'sub_subcategory_id');
    }

    public function Images() {
        return $this->hasMany(ProductImage::class);
    }

    public function colors() {
        return $this->hasMany(ProductColor::class);
    }

    public function sizes() {
        return $this->hasMany(ProductSize::class);
    }

}
