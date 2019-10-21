<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\Admin\ProfileService;
use App\Services\GeneralService;

class ProfileController extends Controller
{
    protected $general;

    protected $profile;

    public function __construct(GeneralService $general, ProfileService $profile)
    {
        $this->general = $general;
        $this->profile = $profile;
    }

    public function index()
    {
        $this->general->shareUser();
        $this->general->showView('admin.profile');
    }

    public function update()
    {
        $this->profile->validateUpdateData();
        $this->profile->updateData();
    }
}
