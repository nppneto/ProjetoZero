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

mix.js('resources/js/app.js', 'public/js');
mix.js('resources/js/admin.js', 'public/js/admin');

mix.scripts(['public/js/contato.js'], 'public/js/all.js');

mix.sass('resources/sass/app.scss', 'public/css');
mix.sass('resources/sass/admin.scss', 'public/css/admin');

mix.copyDirectory('resources/images', 'public/images'); // Copia imagens

mix.copy('node_modules/ionicons/dist/fonts/*.*', 'public/css/admin/fonts');
mix.copy('node_modules/font-awesome/fonts/*.*', 'public/css/admin/fonts');

if(mix.inProduction()) {
   mix.version();
}