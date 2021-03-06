<?php

return [
    'feeds' => [
        'main' => [
            /*
             * Here you can specify which class and method will return
             * the items that should appear in the feed. For example:
             * 'App\Model@getAllFeedItems'
             *
             * You can also pass an argument to that method:
             * ['App\Model@getAllFeedItems', 'argument']
             */
            'items' => 'App\Models\Article@getFeedItems',

            /*
             * The feed will be available on this url.
             */
            'url' => '/rss',

            'title' => env('BLOG_NAME'),
            'description' => env('BLOG_DESCRIPTION'),
            'language' => env('BLOG_FEED_LOCALE', 'en-US'),

            /*
             * The view that will render the feed.
             */
            'view' => 'feed::atom',

            /*
             * The type to be used in the <link> tag
             */
            'type' => 'application/atom+xml',
        ],
    ],
];
