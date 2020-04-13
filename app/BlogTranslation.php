<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\BlogTranslation
 *
 * @property int $id
 * @property string $title
 * @property string $body
 * @property string $more_read
 * @property int|null $blog_id
 * @property string $locale
 * @property string|null $created_at
 * @property string|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BlogTranslation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BlogTranslation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BlogTranslation query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BlogTranslation whereBlogId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BlogTranslation whereBody($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BlogTranslation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BlogTranslation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BlogTranslation whereLocale($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BlogTranslation whereMoreRead($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BlogTranslation whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BlogTranslation whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property string $content
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BlogTranslation whereContent($value)
 */
class BlogTranslation extends Model {

    public $timestamps = false;
    public $fillable = ['title', 'body', 'content'];

}
