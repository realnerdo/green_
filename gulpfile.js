const elixir = require('laravel-elixir');

require('laravel-elixir-vue');
require('laravel-elixir-livereload');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir.config.sourcemaps = false;

elixir(mix => {
    mix.sass([
        './node_modules/minireset.css/minireset.sass',
        '../bower/glidejs/dist/css/glide.core.min.css',
        '../bower/glidejs/dist/css/glide.theme.css',
        'master.sass',
    ], 'public/css/master.css');

    mix.scripts([
        '../bower/jquery/dist/jquery.js',
        '../bower/glidejs/dist/glide.min.js',
        'scripts.js'
    ], 'public/js/scripts.js');

    mix.livereload();
});
