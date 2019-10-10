<?php

namespace App\Services;

use App\Models\Article;

class TagService
{
    public function getArticlesWithTag($tag)
    {
        $tag = clean($tag);

        $articles = Article::withAnyTags([$tag])->with('category')->paginate(config('project.perPage'));

        view()->share('articles', $articles);

        view()->share('tag', $tag);

        return $articles;
    }
}
