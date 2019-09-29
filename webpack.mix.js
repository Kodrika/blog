const mix = require('laravel-mix');

require('laravel-mix-purgecss');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.styles([
    'resources/css/animate.min.css',
    'resources/css/prism.css',
    'resources/css/tailwind.css',
], 'public/css/blog.min.css').purgeCss();

mix.scripts([
    'resources/js/prism.js',
    'resources/js/app.js'
], 'public/js/blog.min.js');

mix.copyDirectory('resources/images', 'public/images');
