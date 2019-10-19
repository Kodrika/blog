const mix = require('laravel-mix');

require('laravel-mix-purgecss');

/*
    WEB
 */

mix.styles([
    'resources/css/animate.min.css',
    'resources/css/fontawesome.min.css',
    'resources/css/prism.css',
    'resources/css/tailwind.css',
], 'public/css/blog.min.css').purgeCss();

mix.scripts([
    'resources/js/prism.js',
    'resources/js/app.js',
    'resources/js/lazyload.js',
], 'public/js/blog.min.js');

mix.copyDirectory('resources/images', 'public/images');

mix.copyDirectory('resources/fonts', 'public/fonts');

/*
    ADMIN
 */

mix.scripts([
    'resources/js/admin/apoc-sidebar.js',
    'resources/js/admin/app.js',
], 'public/js/admin.min.js');
