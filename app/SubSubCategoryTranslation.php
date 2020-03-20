<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
 * @mixin \Eloquent
 */
class SubSubCategoryTranslation extends Model {

    public $timestamps = false;
    public $fillable = ['name','sub_sub_category_id'];

}
