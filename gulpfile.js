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


elixir(function(mix) {
    mix.sass(['app.scss'],
        'public/css/app.min.css/app.min.css');
});
/*elixir(function(mix) {
    mix.scripts(['arrow.js'],
        'public/js/arrow.js');
});*/
elixir(function(mix) {
    mix.scripts(['lightbox.js'],
        'public/js/lightbox.min.js');
});
elixir(function(mix) {
    mix.scripts([
        'defer.js',        
        'smoothscroll.js',
        'arrow.js'
    ],
    'public/js/all.min.js');
});


/*UNCSS GULP and Sourcemap and Minify*/

/*var gulp = require('gulp');
var uncss = require('gulp-uncss');
var sass = require('gulp-sass');
var sourcemaps = require('gulp-sourcemaps');
var autoprefixer = require('gulp-autoprefixer');
var concat = require('gulp-concat');
var nano = require('gulp-cssnano');

gulp.task('default', function () {
    return gulp.src('resources/assets/sass/app.scss')
        .pipe(sourcemaps.init())
        .pipe(autoprefixer())
        .pipe(sass())
        .pipe(concat('app.min.css'))
        .pipe(uncss({                  
            html: ['index.html', 'http://lightningroadfp.tech'],
            ignore:[            
            ".alert-success",
            ".alert-danger",           
            ".form-group",
            ".close",
            /\.has-error/,
            /\.alert/,
            /\.close/,
            /\.modal/            
            ]
        }))
        .pipe(nano())
        .pipe(sourcemaps.write('.'))
        .pipe(gulp.dest('public/css/app.min.css'));
});*/

