<?php

namespace App\Services;

use App\Models\Article;
use Illuminate\Database\Eloquent\Builder;

class ArticleService
{
    public function getArticle($category, $slug, $service)
    {
        $article = Article::whereHas('category', function (Builder $query) use ($category) {
            $query->where('slug', $category);
        })->where('slug', $slug)->with('category', 'tags')->firstOrFail();

        $related = Article::where('category_id', $article->category->id)->where('id', '<>', $article->id)->with('category')->take(3)->get();

        view()->share('article', $article);

        view()->share('related', $related);

        $service->generateTag($article->name.' - '.$article->category->name);

        return $article;
    }

    public function showView()
    {
        if(isset(request()->amp) && (bool)request()->amp === true)
            response()->view('web.article_amp')->throwResponse();
        response()->view('web.article')->throwResponse();
    }
}
