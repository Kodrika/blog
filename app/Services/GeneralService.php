<?php

namespace App\Services;

use Illuminate\Support\Facades\Cache;

class GeneralService
{
    public function generateData($menu = 0)
    {
        //Menu
        $data['menu'] = $menu;

        //Navbar
        $data['navbar'] = Cache::rememberForever('navbar', function () {
            $return = [];
            $navbar = \App\Models\Navigation::sort()->get();
            foreach ($navbar as $v) {
                $return[$v->id] = [
                    'name' => $v->name,
                    'url' => $v->url,
                ];
            }

            return $return;
        });

        view()->share('menu', $data['menu']);

        view()->share('navbar', $data['navbar']);

        return $data;
    }

    public function generateTag($titleAppend = null, $descriptionAppend = null, $keywordsAppend = null, $ogType = 'website', $twitterCard = 'summary', $newOgImage = null, $newTwitterImage = null)
    {
        $seo = config('project.seo');

        $locale = app()->getLocale();

        if (! isset($seo[$locale])) {
            $seo = $seo['tr'];
        } else {
            $seo = $seo[$locale];
        }

        $title = $seo['title'];
        if ($titleAppend != null) {
            $title = strip_tags($titleAppend).' - '.$seo['title'];
        }

        $description = $seo['description'];
        if ($descriptionAppend != null) {
            $description = $descriptionAppend.' - '.$seo['description'];
        }

        $keywords = $seo['keywords'];
        if ($keywordsAppend != null) {
            $keywords = $keywordsAppend.' - '.$seo['keywords'];
        }

        $ogImage = asset('images/social/'.config('project.ogImage'));
        if ($newOgImage != null) {
            $ogImage = $newOgImage;
        }

        $twitterImage = asset('images/social/'.config('project.twitterImage'));
        if ($newTwitterImage != null) {
            $twitterImage = $newTwitterImage;
        }

        $meta = [
            'title' => $title,
            'description' => $description,
            'keywords' => $keywords,
            'ogType' => $ogType,
            'twitterCard' => $twitterCard,
            'ogImage' => $ogImage,
            'twitterImage' => $twitterImage,
        ];

        view()->share('meta', $meta);

        return $meta;
    }

    public function showView($view, $data = null)
    {
        if ($data == null) {
            $data = [];
        }

        response()->view($view, $data)->throwResponse();
    }

    public function shareVariable($key, $data)
    {
        view()->share($key, $data);
    }
}
