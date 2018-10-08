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




/* Styles and Animations */
mix
.sass('resources/sass/animate.scss', 'public/css')
.sass('resources/sass/base.scss', 'public/css')
.sass('resources/sass/bootstrap.min.scss', 'public/css')
.sass('resources/sass/default.scss', 'public/css')
.sass('resources/sass/fa.scss', 'public/css')
.sass('resources/sass/meanmenu.min.scss', 'public/css')
.sass('resources/sass/nivo-slider.scss', 'public/css')
.sass('resources/sass/owl.carousel.min.scss', 'public/css')
.sass('resources/sass/p7icon.scss', 'public/css')
.sass('resources/sass/jqui.scss', 'public/css')
.sass('resources/sass/style.scss', 'public/css')
.sass('resources/sass/responsive.scss', 'public/css');




/* Javascript and Ajax */
mix
.js('resources/js/jquery.js', 'public/js/vendor')
.js('resources/js/jquery-1.12.4.min.js', 'public/js/vendor')
.js('resources/js/modernizr-custom.js', 'public/js/vendor')
.js('resources/js/jquery-ui.js', 'public/js')
.js('resources/js/bootstrap.min.js', 'public/js')
.js('resources/js/jquery.elevateZoom-3.0.8.min.js', 'public/js')
.js('resources/js/jquery.meanmenu.min.js', 'public/js')
.js('resources/js/jquery.nivo.slider.js', 'public/js')
.js('resources/js/jquery.scrollUp.js', 'public/js')
.js('resources/js/main.js', 'public/js')
.js('resources/js/owl.carousel.min.js', 'public/js')
.js('resources/js/plugins.js', 'public/js')
.js('resources/js/wow.min.js', 'public/js')
.js('resources/js/wave.js', 'public/js');















