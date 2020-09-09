const mix = require('laravel-mix');

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

mix
    .scripts([
        'resources/js/core/jquery.min.js',
        'resources/js/core/popper.min.js',
        'resources/js/core/bootstrap.min.js',
        'resources/js/plugins/chartjs.min.js',
        'resources/js/plugins/perfect-scrollbar.jquery.min.js',
        'resources/js/now-ui-dashboard.js',
        'resources/js/utils.js',
    ], 'public/js/app.js')
    .version();


mix
    .styles([
        'resources/css/bootstrap.min.css',
        'resources/css/now-ui-dashboard.css'
    ], 'public/css/app.css')
    .version();

mix.copyDirectory('resources/fonts', 'public/fonts');
