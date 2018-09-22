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



/*   LAYOUT DEPENDANTS */
mix.sass('resources/sass/layouts/ui.scss', 'public/layouts/css');


mix.js('resources/js/layouts/ui-main.js', 'public/layouts/js');






/* CORE STYLES */
mix.sass('resources/sass/pages/landing.scss', 'public/pages/css');














/* CORE SCRIPTS */




/*  INCLUDES  */
mix.js('resources/js/inc/jquery333.js', 'public/js/inc/js');
mix.js('resources/js/inc/jquery.min.js', 'public/js/inc/js');
mix.js('resources/js/inc/jquery.waypoints.min.js', 'public/js/inc/js');
mix.js('resources/js/inc/flexslider/flexslider.min.js', 'public/js/inc/flexslider/');


