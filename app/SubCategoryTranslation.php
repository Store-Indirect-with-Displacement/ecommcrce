<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
 * @mixin \Eloquent
 */
class SubCategoryTranslation extends Model {

    public $timestamps = false;
    public $fillable = ['name'];

}
