<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\BrandTranslation
 *
 * @property int $id
 * @property string $name
 * @property int|null $brand_id
 * @property string $locale
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BrandTranslation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BrandTranslation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BrandTranslation query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BrandTranslation whereBrandId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BrandTranslation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BrandTranslation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BrandTranslation whereLocale($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BrandTranslation whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BrandTranslation whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class BrandTranslation extends Model {

    public $fillable = ['name'];

}
