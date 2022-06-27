const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

 mix.styles('resources/css/reset.css', 'public/css/reset.css');
 mix.styles('resources/css/main.css', 'public/css/main.css');
 mix.styles('resources/css/about.css', 'public/css/about.css');
 mix.styles('resources/css/portfolio.css', 'public/css/portfolio.css');

 mix.copyDirectory('resources/img', 'public/img');
