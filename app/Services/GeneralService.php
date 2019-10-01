<?php

namespace App\Services;

use Illuminate\Support\Facades\Cache;

class GeneralService
{
    public function generateData($menu = 0)
    {
        $data['menu'] = $menu;

        $data['user'] = auth()->user();

        $data['lang'] = app()->getLocale();

        view()->share('menu', $data['menu']);

        view()->share('user', $data['user']);

        view()->share('lang', $data['lang']);

        return $data;
    }

    public function generateTag($titleAppend = NULL, $descriptionAppend = NULL, $keywordsAppend = NULL, $ogType = 'website', $twitterCard = 'summary', $newOgImage = NULL, $newTwitterImage = NULL)
    {
        $seo = config('project.seo');

        $locale = app()->getLocale();

        if(!isset($seo[$locale])){
            $seo = $seo['tr'];
        }else{
            $seo = $seo[$locale];
        }

        $title = $seo['title'];
        if ($titleAppend != NULL) {
            $title = strip_tags($titleAppend).' - '.$seo['title'];
        }

        $description = $seo['description'];
        if ($descriptionAppend != NULL) {
            $description = $descriptionAppend.' - '.$seo['description'];
        }

        $keywords = $seo['keywords'];
        if ($keywordsAppend != NULL) {
            $keywords = $keywordsAppend.' - '.$seo['keywords'];
        }

        $ogImage = asset('images/social/'.config('project.ogImage'));
        if ($newOgImage != NULL) {
            $ogImage = $newOgImage;
        }

        $twitterImage = asset('images/social/'.config('project.twitterImage'));
        if ($newTwitterImage != NULL) {
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
