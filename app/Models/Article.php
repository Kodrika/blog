<?php

namespace App\Models;

use App\Models\Traits\FullTextSearch;
use DateTime;
use Illuminate\Database\Eloquent\Model;
use Spatie\Tags\HasTags;

class Article extends Model
{
    use FullTextSearch;

    use HasTags;

    public const DRAFT = 0;

    public const ACTIVE = 1;

    public const FEATURED = 2;

    protected $searchable = [
        'name',
        'summary',
    ];

    /*
     * SCOPES
     */

    public function scopeActive($query)
    {
        return $query->where('status', self::ACTIVE);
    }

    public function scopeDraft($query)
    {
        return $query->where('status', self::DRAFT);
    }

    public function scopeFeatured($query)
    {
        return $query->where('status', self::FEATURED);
    }

    /*
     * ATTRIBUTES
     */

    public function getTimeAgoAttribute()
    {
        $date = new DateTime();
        $date->setTimestamp($this->created_at->timestamp);
        $interval = $date->diff(new DateTime('now'));
        $check = (int) $interval->format('%y');
        if ($check > 0) {
            return $check.' '.__('years').' '.__('ago');
        }
        $check = (int) $interval->format('%m');
        if ($check > 0) {
            return $check.' '.__('months').' '.__('ago');
        }
        $check = (int) $interval->format('%d');
        if ($check > 0) {
            return $check.' '.__('days').' '.__('ago');
        }
        $check = (int) $interval->format('%h');
        if ($check > 0) {
            return $check.' '.__('hours').' '.__('ago');
        }

        return (int) $interval->format('%i').' '.__('minutes').' '.__('ago');
    }

    public function getImageUrlAttribute()
    {
        return asset('files/articles/'.$this->image);
    }

    public function getArticleUrlAttribute()
    {
        return route('web.category.article', [
            'category' => $this->category->slug,
            'article' => $this->slug,
        ]);
    }

    public function getTrimmedSummaryAttribute()
    {
        $text = trim($this->summary);
        $text = strip_tags($text);
        $comma = false;
        if (strlen($text) >= 120) {
            $comma = true;
        }
        $text = mb_substr($text, 0, 120, 'UTF-8');
        if ($comma == true) {
            $text = $text.'...';
        }

        return $text;
    }

    public function getLocalizedDateAttribute()
    {
        setlocale(LC_TIME, 'tr_TR@TL', 'tr_TR', 'tr', 'Turkish');

        return $this->created_at->formatLocalized('%d %B %Y');
    }

    /*
     * RELATIONS
     */

    public function category()
    {
        return $this->hasOne('App\Models\Category', 'id', 'category_id');
    }
}
