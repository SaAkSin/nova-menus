let mix = require('laravel-mix');

mix.setPublicPath('dist')
    .js('resources/js/nova-menus.js', 'js')
    .sass('resources/sass/nova-menus.scss', 'css');
