<?php

namespace App\Services;

use App\Models\Article;

class HomeService
{
    public function checkSearch()
    {
        $data['search'] = request()->search;

        if (! $data['search']) {
            return;
        }

        $data['articles'] = Article::search($data['search'])->with('category')->paginate(config('project.perPage'));

        response()->view('web.search', $data)->throwResponse();
    }

    public function getFeatured()
    {
        $featured = false;

        if ((! isset(request()->page) || request()->page == 1) && ! isset(request()->search)) {
            $featured = Article::featured()->with('category')->first();
        }

        view()->share('featured', $featured);

        return $featured;
    }

    public function getArticles()
    {
        $articles = Article::with('category')->paginate(config('project.perPage'));

        view()->share('articles', $articles);

        return $articles;
    }
}
