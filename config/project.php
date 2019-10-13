<?php

return [

    'demo' => env('BLOG_DEMO', 'true'),

    'name' => env('BLOG_NAME', 'Laravel'),

    'author' => env('BLOG_AUTHOR', 'Kodrika'),

    'twitter' => env('BLOG_TWITTER', 'kodrika_yazilim'),

    'copyright' => env('BLOG_COPYRIGHT', '<i class="fas fa-heart text-red-400"></i> Opensource'),

    'logo' => env('BLOG_LOGO', 'true'),

    'social' => [

        'gitlab' => env('BLOG_SOCIAL_GITLAB', '#'),

        'github' => env('BLOG_SOCIAL_GITHUB', '#'),

        'facebook' => env('BLOG_SOCIAL_FACEBOOK', '#'),

        'twitter' => env('BLOG_SOCIAL_TWITTER', '#'),

        'linkedin' => env('BLOG_SOCIAL_LINKEDIN', '#'),

    ],

    'rss' => env('BLOG_RSS', 'true'),

    'perPage' => env('BLOG_PER_PAGE', '9'),

    'seo' => [

        'title' => env('BLOG_TITLE', 'Kodrika Blog'),

        'description' => env('BLOG_DESCRIPTION', 'Kodrika Blog'),

        'keywords' => env('BLOG_KEYWORDS', 'Kodrika Blog'),

    ],

];
