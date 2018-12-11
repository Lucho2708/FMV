let mix = require('laravel-mix');

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

mix.js('resources/assets/js/app.js', 'public/js')
    .sass('resources/assets/sass/app.scss', 'public/css')
    .js(['resources/assets/js/javascripts/bootstrap.min.js',
    'resources/assets/js/javascripts/jquery-1.11.1.min.js',
    'resources/assets/js/javascripts/jquery.ba-cond.min.js',
    'resources/assets/js/javascripts/jquery.easing.min.js',
    'resources/assets/js/javascripts/jquery.singlePageNav.min.js',
    'resources/assets/js/javascripts/modernizr-2.6.2.min.js',
    'resources/assets/js/javascripts/owl.carousel.min.js',
    'resources/assets/js/javascripts/wow.min.js',
    'resources/assets/js/javascripts/jquery.fancybox.pack.js',
    'resources/assets/js/javascripts/jquery.slitslider.js',
    'resources/assets/js/javascripts/main.js'
    ], 'public/js/all.js')
    .styles([ 'resources/assets/sass/styles/bootstrap.min.css',
        'resources/assets/sass/styles/font-awesome.min.css',
        'resources/assets/sass/styles/jquery.fs.boxer.min.css',
        'resources/assets/sass/styles/style.min.css',
        'resources/assets/sass/styles/jquery.fancybox.css',
        'resources/assets/sass/styles/main.css',
        'resources/assets/sass/styles/animate.css',
        'resources/assets/sass/styles/owl.carousel.css',
        'resources/assets/sass/styles/slit-slider.css',
        'resources/assets/sass/styles/style.css'
    ], 'public/css/all.css');

