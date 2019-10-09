<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Services\OpenSearchService;

class OpenSearchController extends Controller
{

    protected $search;

    public function __construct(OpenSearchService $search)
    {
        $this->search = $search;
    }

    public function index()
    {
        $this->search->renderXml();
    }
}
