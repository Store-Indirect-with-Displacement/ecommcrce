<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
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
 * @mixin \Eloquent
 */
class CategoryTranslation extends Model {
    public $timestamps = false;
    public $fillable = ['name'];
}
