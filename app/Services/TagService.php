<?php

namespace App\Services;

use App\Models\Article;
use Spatie\Tags\Tag;

class TagService
{
    public function getArticlesWithTag($tag, $service)
    {
        $tag = clean($tag);

        $articles = Article::withAnyTags([$tag])->with('category')->paginate(config('project.perPage'));

        view()->share('articles', $articles);

        $tag = Tag::findFromString($tag);

        if ($tag) {
            $service->generateTag($tag->name.' '.__('Tag'));
        }

        view()->share('tag', $tag);

        return $articles;
    }
}
