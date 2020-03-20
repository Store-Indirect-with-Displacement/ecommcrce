<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App{
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
 */
	class Category extends \Eloquent {}
}

namespace App{
/**
 * App\CategoryTranslation
 *
 * @property int $id
 * @property int|null $category_id
 * @property string $locale
 * @property string $name
 * @property string|null $created_at
 * @property string|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CategoryTranslation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CategoryTranslation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CategoryTranslation query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CategoryTranslation whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CategoryTranslation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CategoryTranslation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CategoryTranslation whereLocale($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CategoryTranslation whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CategoryTranslation whereUpdatedAt($value)
 */
	class CategoryTranslation extends \Eloquent {}
}

namespace App{
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
 */
	class Product extends \Eloquent {}
}

namespace App{
/**
 * App\ProductImage
 *
 * @property int $id
 * @property string $image
 * @property int|null $is_main
 * @property int|null $product_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Product|null $product
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ProductImage newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ProductImage newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ProductImage query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ProductImage whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ProductImage whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ProductImage whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ProductImage whereIsMain($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ProductImage whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ProductImage whereUpdatedAt($value)
 */
	class ProductImage extends \Eloquent {}
}

namespace App{
/**
 * App\ProductTranslation
 *
 * @property int $id
 * @property string $name
 * @property string|null $orderStatus
 * @property int|null $product_id
 * @property string $locale
 * @property string|null $created_at
 * @property string|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ProductTranslation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ProductTranslation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ProductTranslation query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ProductTranslation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ProductTranslation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ProductTranslation whereLocale($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ProductTranslation whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ProductTranslation whereOrderStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ProductTranslation whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ProductTranslation whereUpdatedAt($value)
 */
	class ProductTranslation extends \Eloquent {}
}

namespace App{
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
 */
	class SubCategory extends \Eloquent {}
}

namespace App{
/**
 * App\SubCategoryTranslation
 *
 * @property int $id
 * @property string $name
 * @property int|null $sub_category_id
 * @property string $locale
 * @property string|null $created_at
 * @property string|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SubCategoryTranslation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SubCategoryTranslation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SubCategoryTranslation query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SubCategoryTranslation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SubCategoryTranslation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SubCategoryTranslation whereLocale($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SubCategoryTranslation whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SubCategoryTranslation whereSubCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SubCategoryTranslation whereUpdatedAt($value)
 */
	class SubCategoryTranslation extends \Eloquent {}
}

namespace App{
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
 */
	class SubSubCategory extends \Eloquent {}
}

namespace App{
/**
 * App\SubSubCategoryTranslation
 *
 * @property int $id
 * @property string $name
 * @property string $locale
 * @property int $sub_sub_category_id
 * @property string|null $created_at
 * @property string|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SubSubCategoryTranslation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SubSubCategoryTranslation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SubSubCategoryTranslation query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SubSubCategoryTranslation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SubSubCategoryTranslation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SubSubCategoryTranslation whereLocale($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SubSubCategoryTranslation whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SubSubCategoryTranslation whereSubSubCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SubSubCategoryTranslation whereUpdatedAt($value)
 */
	class SubSubCategoryTranslation extends \Eloquent {}
}

namespace App{
/**
 * App\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property int|null $isAdmin
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereIsAdmin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

