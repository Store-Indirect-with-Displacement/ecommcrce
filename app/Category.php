<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use App\SubCategory;
use App\Product;
use App\BlogPostions;

/**
 * App\Category
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\SubCategory[] $subCategories
 * @property-read int|null $sub_categories_count
 * @property-read \App\CategoryTranslation $translation
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\CategoryTranslation[] $translations
 * @property-read int|null $translations_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Category listsTranslations($translationField)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Category newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Category newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Category notTranslatedIn($locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Category orWhereTranslation($translationField, $value, $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Category orWhereTranslationLike($translationField, $value, $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Category orderByTranslation($translationField, $sortMethod = 'asc')
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Category query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Category translated()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Category translatedIn($locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Category whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Category whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Category whereTranslation($translationField, $value, $locale = null, $method = 'whereHas', $operator = '=')
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Category whereTranslationLike($translationField, $value, $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Category whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Category withTranslation()
 * @mixin \Eloquent
 * @property int|null $is_navbar
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Category whereIsNavbar($value)
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Product[] $products
 * @property-read int|null $products_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\BlogPostions[] $positions
 * @property-read int|null $positions_count
 */
class Category extends Model implements TranslatableContract {

    public $table = "categories";

    use Translatable;

    public $translatedAttributes = ['name'];

    public function subCategories() {
        return $this->hasMany(SubCategory::class);
    }

    public function products() {
        return $this->hasMany(Product::class);
    }
    public function positions() {
        return $this->hasMany(BlogPostions::class);
    }

}
