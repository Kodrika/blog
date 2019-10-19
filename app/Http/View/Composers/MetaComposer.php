<?php

namespace App\Http\View\Composers;

use App\Services\GeneralService;
use Illuminate\View\View;

class MetaComposer
{
    protected $meta;

    public function __construct(GeneralService $meta)
    {
        $this->meta = $meta;
    }

    public function compose(View $view)
    {
        $this->meta->generateTag();
    }
}
