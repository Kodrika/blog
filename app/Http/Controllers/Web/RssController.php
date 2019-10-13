<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Services\SitemapService;

class RssController extends Controller
{
    protected $sitemap;

    public function __construct(SitemapService $sitemap)
    {
        $this->sitemap = $sitemap;
    }

    public function index()
    {
        $this->sitemap->generateMap('ror-rss', true);
    }
}
