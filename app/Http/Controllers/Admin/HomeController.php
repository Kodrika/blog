<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\GeneralService;

class HomeController extends Controller
{
    protected $general;

    public function __construct(GeneralService $general)
    {
        $this->general = $general;
    }

    public function index()
    {
        $this->general->showView('admin.home');
    }
}
