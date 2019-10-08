<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Services\CategoryService;
use App\Services\GeneralService;

class CategoryController extends Controller
{
    protected $general;

    protected $category;

    public function __construct(GeneralService $general, CategoryService $category)
    {
        $this->general = $general;
        $this->category = $category;
    }

    public function index($category)
    {
        $this->general->generateData();
        $this->general->generateTag();
        $this->category->getCategoryArticles($category);
        $this->general->showView('web.category');
    }
}
