<?php

namespace App\Services;

use App\Models\Article;
use App\Models\Category;

class CategoryService
{

    public function getCategoryArticles($category)
    {
        $category = Category::where('slug', $category)->firstOrFail();

        $articles = Article::where('category_id', $category->id)->paginate(config('project.perPage'));

        view()->share('articles', $articles);

        view()->share('category', $category);

        return $articles;
    }
}
