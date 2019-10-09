<?php

namespace App\Services;

use App\Models\Article;
use App\Models\Category;
use App\Models\Page;

class CategoryService
{
    public function checkPage($category)
    {
        $page = Page::where('slug', $category)->first();

        if(!$page)
            return NULL;

        view()->share('page', $page);

        response()->view('web.page')->throwResponse();
    }

    public function getCategoryArticles($category)
    {
        $category = Category::where('slug', $category)->firstOrFail();

        $articles = Article::where('category_id', $category->id)->paginate(config('project.perPage'));

        view()->share('articles', $articles);

        view()->share('category', $category);

        return $articles;
    }
}
