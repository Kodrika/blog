<?php

namespace App\Services;

use App\Models\Blog;
use App\Models\Work;

class HomeService
{
    public function getWorks()
    {
        $works = Work::home()->orderBy('order', 'asc')->take(8)->get();

        view()->share('works', $works);

        return $works;
    }

    public function getBlog()
    {
        $blog = Blog::orderBy('id', 'desc')->take(3)->get();

        view()->share('blog', $blog);

        return $blog;
    }
}
