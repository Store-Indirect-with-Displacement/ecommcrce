<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use App\User;
use App\BlogPostions;

/**
 * App\Blog
 *
 * @property int $id
 * @property int $blogger_id
 * @property string|null $image
 * @property string $date
 * @property int|null $is_archive
 * @property int|null $is_resent
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\BlogTranslation $translation
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\BlogTranslation[] $translations
 * @property-read int|null $translations_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Blog listsTranslations($translationField)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Blog newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Blog newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Blog notTranslatedIn($locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Blog orWhereTranslation($translationField, $value, $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Blog orWhereTranslationLike($translationField, $value, $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Blog orderByTranslation($translationField, $sortMethod = 'asc')
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Blog query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Blog translated()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Blog translatedIn($locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Blog whereBloggerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Blog whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Blog whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Blog whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Blog whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Blog whereIsArchive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Blog whereIsResent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Blog whereTranslation($translationField, $value, $locale = null, $method = 'whereHas', $operator = '=')
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Blog whereTranslationLike($translationField, $value, $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Blog whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Blog withTranslation()
 * @mixin \Eloquent
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\BlogPostions[] $positions
 * @property-read int|null $positions_count
 * @property-read \App\User $user
 */
class Blog extends Model {

    use Translatable;

    public $fillable = ['blogger_id', 'date', 'is_archive', 'is_resnt', 'image'];
    public $translatedAttributes = ['title', 'body', 'content'];

    /**
     * 
     * @return type
     */
    public function user() {
        return $this->belongsTo(User::class, 'blogger_id');
    }

    public function positions() {
        return $this->hasMany(BlogPostions::class);
    }

}
