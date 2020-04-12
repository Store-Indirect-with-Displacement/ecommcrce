<?php

namespace App;

use App\Product;
use App\SubCategory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use App\BlogPostions;

/**
 * App\SubSubCategory
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $sub_category_id
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Product[] $products
 * @property-read int|null $products_count
 * @property-read \App\SubCategory $subCategory
 * @property-read \App\SubSubCategoryTranslation $translation
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\SubSubCategoryTranslation[] $translations
 * @property-read int|null $translations_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SubSubCategory listsTranslations($translationField)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SubSubCategory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SubSubCategory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SubSubCategory notTranslatedIn($locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SubSubCategory orWhereTranslation($translationField, $value, $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SubSubCategory orWhereTranslationLike($translationField, $value, $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SubSubCategory orderByTranslation($translationField, $sortMethod = 'asc')
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SubSubCategory query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SubSubCategory translated()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SubSubCategory translatedIn($locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SubSubCategory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SubSubCategory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SubSubCategory whereSubCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SubSubCategory whereTranslation($translationField, $value, $locale = null, $method = 'whereHas', $operator = '=')
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SubSubCategory whereTranslationLike($translationField, $value, $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SubSubCategory whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SubSubCategory withTranslation()
 * @mixin \Eloquent
 */
class SubSubCategory extends Model {

    use Translatable;

    public $translatedAttributes = ['name'];
    public $fillable = ['sub_category_id'];
    public $table = "sub_sub_categories";

    public function products() {
        return $this->hasMany(Product::class);
    }

    public function subCategory() {
        return $this->belongsTo(SubCategory::class, 'sub_category_id');
    }

    public function positions() {
        return $this->hasMany(BlogPostions::class);
    }

}
