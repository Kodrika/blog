<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('partials.navbars.app', 'App\Http\View\Composers\NavbarComposer');
        View::composer('partials.navbars.content', 'App\Http\View\Composers\NavbarComposer');
        View::composer('partials.meta', 'App\Http\View\Composers\MetaComposer');
    }
}
