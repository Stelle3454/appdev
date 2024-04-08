const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css');

   mix.styles([
    'resources/css/app.css','AVCM-MAIN/doctors.css',
], 'public/css/app.css');
