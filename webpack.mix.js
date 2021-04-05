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
const tailwindcss = require("tailwindcss");
mix.sass('resources/sass/app.scss', 'public/css')
    .options({
        processCssUrls:false,
        postCss:[ tailwindcss('tailwind.config.js')]
    })
//     .browserSync({
//         proxy: 'localhost/university/public/',
//         files: [
//             'app/js/*.js',
//             'app/css/*.css',
//             'app/**/*',
//             'public/**/*',
//             'resources/views/**/*',
//             'routes/**/*'
//         ]
//    })
   ;
