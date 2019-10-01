<?php

namespace App\Http\Controllers\Web;

use App\Services\HomeService;
use App\Services\GeneralService;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    protected $general;

    protected $home;

    public function __construct(GeneralService $general, HomeService $home)
    {
        $this->general = $general;
        $this->home = $home;
    }

    public function index()
    {
        $this->general->generateData();
        $this->general->generateTag();
        //$this->home->getWorks();
        //$this->home->getBlog();
        $this->general->showView('web.home');
    }
}
