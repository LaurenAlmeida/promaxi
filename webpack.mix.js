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

mix.scripts(
    [
        'resources/js/bootstrap.js',
        'resources/js/boostrap.min.js',
        'resources/js/contact-form-script.js',
        'resources/js/form-validator.min.js',
        'resources/js/jquery.ajaxchimp.min.js',
        'resources/js/jquery.appear.js',
        'resources/js/jquery.magnific-popup.min.js',
        'resources/js/jquery.meanmenu.js',
        'resources/js/jquery.min.js',
        'resources/js/main.js',
        'resources/js/nice-select.min.js',
        'resources/js/odometer.min.js',
        'resources/js/owl.carousel.min.js',
        'resources/js/popper.min.js',
        'resources/js/wow.min.js',
    ],'public/site/js/tema.js')
    .styles([
        'resources/css/animate.min.css',
        'resources/css/app.css',
        'resources/css/bootstrap.min.css',
        'resources/css/boxicons.min.css',
        'resources/css/flaticon.css',
        'resources/css/magnific-popup.min.css',
        'resources/css/meanmenu.css',
        'resources/css/nice-select.min.css',
        'resources/css/odometer.min.css',
        'resources/css/owl.carousel.min.css',
        'resources/css/owl.theme.default.min.css',
        'resources/css/responsive.css',
        'resources/css/responsive.css.map',
        'resources/css/responsive.scss',
        'resources/css/style.css',
        'resources/css/style.css.map',
        'resources/css/style.scss',
    ],'public/site/css/tema.css');
