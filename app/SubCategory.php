<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;
use App\SubSubCategory;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

/**
 * App\SubCategory
 *
 * @property int $id
 * @property int $category_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Category $category
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\SubSubCategory[] $subsubCategories
 * @property-read int|null $subsub_categories_count
 * @property-read \App\SubCategoryTranslation $translation
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\SubCategoryTranslation[] $translations
 * @property-read int|null $translations_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SubCategory listsTranslations($translationField)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SubCategory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SubCategory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SubCategory notTranslatedIn($locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SubCategory orWhereTranslation($translationField, $value, $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SubCategory orWhereTranslationLike($translationField, $value, $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SubCategory orderByTranslation($translationField, $sortMethod = 'asc')
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SubCategory query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SubCategory translated()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SubCategory translatedIn($locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SubCategory whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SubCategory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SubCategory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SubCategory whereTranslation($translationField, $value, $locale = null, $method = 'whereHas', $operator = '=')
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SubCategory whereTranslationLike($translationField, $value, $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SubCategory whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SubCategory withTranslation()
 * @mixin \Eloquent
 */
class SubCategory extends Model {

    use Translatable;

    public $translatedAttributes = ['name'];
    public $fillable = ['category_id'];
    public $table = "sub_categories";
    public function subsubCategories() {
        return $this->hasMany(SubSubCategory::class);
    }
    public function category() {
        return $this->belongsTo(Category::class , 'category_id');
    }
}
