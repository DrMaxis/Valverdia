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






mix.js('resources/js/layouts/ui-landing.js', 'public/layouts/js');
mix.js('resources/js/layouts/ui-main.js', 'public/layouts/js');









/* CORE STYLES */


// landing
mix.sass('resources/sass/pages/landing.scss', 'public/css/pages/landing/landing.css');








                    /*  INCLUDES  */




/* Bootstrap */

mix.sass('resources/sass/inc/bootstrap/bootstrap-grid.min.scss', 'public/css/inc/bootstrap')
.sass('resources/sass/inc/bootstrap/bootstrap-grid.scss', 'public/css/inc/bootstrap')
.sass('resources/sass/inc/bootstrap/bootstrap-reboot.min.scss', 'public/css/inc/bootstrap')
.sass('resources/sass/inc/bootstrap/bootstrap-reboot.scss', 'public/css/inc/bootstrap')
.sass('resources/sass/inc/bootstrap/bootstrap.min.scss', 'public/css/inc/bootstrap')
.sass('resources/sass/inc/bootstrap/bootstrap.scss', 'public/css/inc/bootstrap')
.sourceMaps();





/* HERO  CSS */
mix.sass('resources/sass/inc/hero/discover.scss', 'public/css/inc/hero');

/* Animations */
mix.sass('resources/sass/inc/animation/animate.scss', 'public/css/inc/animation');














/* CORE SCRIPTS */



                        /*  INCLUDES  */



/* Bootstrap */
mix.js('resources/js/inc/bootstrap/bootstrap.bundle.js', 'public/js/inc/bootstrap')
.js('resources/js/inc/bootstrap/bootstrap.bundle.min.js', 'public/js/inc/bootstrap')
.js('resources/js/inc/bootstrap/bootstrap.js', 'public/js/inc/bootstrap')
.js('resources/js/inc/bootstrap/bootstrap.min.js', 'public/js/inc/bootstrap')
.sourceMaps();







/* JQuery */
mix.js('resources/js/inc/jquery/jquery333.js', 'public/js/inc/jquery');
mix.js('resources/js/inc/jquery/jquery.min.js', 'public/js/inc/jquery');
mix.js('resources/js/inc/jquery/jquery.waypoints.min.js', 'public/js/inc/jquery');
mix.js('resources/js/inc/jquery/modernizr.js', 'public/js/inc/jquery');
mix.js('resources/js/inc/jquery/pace.min.js', 'public/js/inc/jquery');





/* FlexSlider */
mix.js('resources/js/inc/flexslider/flexslider.min.js', 'public/js/inc/flexslider/');
mix.sass('resources/sass/inc/flexslider/flexslider.scss', 'public/css/inc/flexslider');
mix.sass('resources/sass/inc/flexslider/font.scss', 'public/css/inc/flexslider');


/* Animations */
mix.js('resources/js/inc/animation/aos.js', 'public/js/inc/animation');

/* END CORE SCRIPTS */




/* START CUSTOM JAVASCRIPT */







/* END CUSTOM JAVASCRIPT */






/* START CUSTOM STYLES */






/* END CUSTOM STYLES */















