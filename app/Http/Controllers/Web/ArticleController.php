<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Services\ArticleService;
use App\Services\GeneralService;

class ArticleController extends Controller
{
    protected $general;

    protected $article;

    public function __construct(GeneralService $general, ArticleService $article)
    {
        $this->general = $general;
        $this->article = $article;
    }

    public function show($category, $article)
    {
        $this->general->generateData();
        $this->general->generateTag();
        $this->article->getArticle($category, $article, $this->general);
        $this->general->showView('web.article');
    }
}
