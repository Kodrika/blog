<?php

namespace App\Http\View\Composers;

use App\Services\GeneralService;
use Illuminate\View\View;

class NavbarComposer
{
    protected $navbar;

    public function __construct(GeneralService $navbar)
    {
        $this->navbar = $navbar;
    }

    public function compose(View $view)
    {
        $view->with('navbar', $this->navbar->returnNavbar());
    }
}
