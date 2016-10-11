var elixir = require('laravel-elixir');

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

/*elixir(function(mix) {
    mix.sass('beApp.scss');
});
elixir(function(mix) {
    mix.sass('app.scss');
});*/
/*elixir(function(mix) {
    mix.scripts(['myOther.js'],
    	'public/js/myOther.min.js');
});*/
elixir(function(mix) {
    mix.scripts(['mLightbox.js'],
    	'public/js/mLightbox.min.js');
});