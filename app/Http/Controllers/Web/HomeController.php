<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Services\GeneralService;
use App\Services\HomeService;

class HomeController extends Controller
{
    protected $general;

    protected $home;

    public function __construct(GeneralService $general, HomeService $home)
    {
        $this->general = $general;
        $this->home = $home;
        if (request()->search) {
            $this->middleware('throttle:30,1');
        }
    }

    public function index()
    {
        $this->general->generateData();
        $this->general->generateTag();
        $this->home->checkSearch();
        $this->home->getFeatured();
        $this->home->getArticles();
        $this->general->showView('web.home');
    }
}
