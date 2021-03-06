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

mix.js('resources/js/site/app.js', 'public/js');
mix.js('resources/js/manager/admin.js', 'public/js/admin.js');

mix.sass('resources/sass/app.scss', 'public/css');
mix.sass('resources/sass/admin.scss', 'public/css/admin.css');

mix.copyDirectory('resources/images', 'public/images');
mix.copy('resources/js/contato.js', 'public/js/contato.js');

if(mix.inProduction()) {
   mix.version();
}