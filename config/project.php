<?php

return [

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

];
