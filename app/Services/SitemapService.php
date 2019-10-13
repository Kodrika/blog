<?php

namespace App\Services;

use App\Models\Article;
use App\Models\Category;
use App\Models\Page;
use Spatie\Tags\Tag;

class SitemapService
{
    public function generateMap()
    {
        $sitemap = app()->make('sitemap');
        if (!$sitemap->isCached()) {
            $sitemap->add(route('web.home'), date('c'), '1.0', 'daily');
            //Pages
            $items = Page::all();
            foreach ($items as $v){
                $sitemap->add(route('web.category', $v->slug), date('c', $v->created_at->timestamp), '1.0', 'weekly');
            }
            //Categories
            $items = Category::all();
            foreach ($items as $v){
                $sitemap->add(route('web.category', $v->slug), date('c', $v->created_at->timestamp), '1.0', 'daily');
            }
            //Tags
            $items = Tag::all();
            foreach ($items as $v){
                $sitemap->add(route('web.tag', $v->slug), date('c', $v->created_at->timestamp), '1.0', 'daily');
            }
            //Articles
            $items = Article::with('category')->get();
            foreach ($items as $v){
                $sitemap->add(route('web.category.article', [
                    'category' => $v->category->slug,
                    'article' => $v->slug,
                ]), date('c', $v->created_at->timestamp), '1.0', 'daily');
            }
        }
        return $sitemap->render('xml')->throwResponse();
    }

}
