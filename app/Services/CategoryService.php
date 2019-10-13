<?php

namespace App\Services;

use App\Models\Article;
use App\Models\Category;
use App\Models\Page;

class CategoryService
{
    public function checkPage($category, $service)
    {
        $page = Page::where('slug', $category)->first();

        if (! $page) {
            return;
        }

        view()->share('page', $page);

        $service->generateTag($page->name);

        response()->view('web.page')->throwResponse();
    }

    public function getCategoryArticles($category, $service)
    {
        $category = Category::where('slug', $category)->firstOrFail();

        $articles = Article::where('category_id', $category->id)->paginate(config('project.perPage'));

        view()->share('articles', $articles);

        view()->share('category', $category);

        $service->generateTag($category->name, $category->description);

        return $articles;
    }
}
