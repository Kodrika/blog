<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Services\GeneralService;
use App\Services\TagService;

class TagController extends Controller
{
    protected $general;

    protected $tag;

    public function __construct(GeneralService $general, TagService $tag)
    {
        $this->general = $general;
        $this->tag = $tag;
    }

    public function index($tag)
    {
        $this->general->generateData();
        $this->general->generateTag();
        $this->tag->getArticlesWithTag($tag, $this->general);
        $this->general->showView('web.tag');
    }
}
