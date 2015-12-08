var elixir = require('laravel-elixir');
require('laravel-elixir-imagemin');


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

 elixir.config.css.autoprefix = {
    enabled: true, //default, this is only here so you know how to disable
    options: {
        cascade: true,
        browsers: ['last 3 versions', '> 1%']
    }
};


elixir(function(mix) {
    mix.sass('app.scss', 'public/css/app.css');
    mix.scripts(['vendor/jquery/jquery.js', 'vendor/jquery/plugins/jquery.browser.js', 'main.js'], 'public/js/app.js');
    mix.imagemin();
    mix.copy('resources/assets/fonts', 'public/fonts');
});
