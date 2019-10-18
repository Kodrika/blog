<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Services\GeneralService;
use App\Services\TwoFactorService;

class RegisterController extends Controller
{
    protected $general;

    protected $twofa;

    public function __construct(GeneralService $general, TwoFactorService $twofa)
    {
        $this->general = $general;
        $this->twofa = $twofa;
    }

    public function index()
    {
        $this->general->generateData();
        $this->general->generateTag();
        $this->twofa->generateQRCode();
        $this->general->showView('auth.2fa');
    }
}
