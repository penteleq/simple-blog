process.env.DISABLE_NOTIFIER = true;

var gulp    = require('gulp');
var watch   = require('gulp-watch');
var sftp    = require('gulp-sftp');
var elixir  = require('laravel-elixir');

/*
 |----------------------------------------------------------------
 | Have a Drink
 |----------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic
 | Gulp tasks for your Laravel application. Elixir supports
 | several common CSS, JavaScript and even testing tools!
 |
 */

elixir(function(mix)
{
    mix.styles([

        // '../../../node_modules/bootstrap/dist/css/bootstrap.min.css',
        '**/*.css',
        '**/*.scss',

    ], "./web/css/app.min.css", "./app/Resources/assets");

    mix.browserify([
        "libraries.js",
		"jquery.subscribe.js",
        "components.js"
    ], "./web/js/components.blog.js", "./app/Resources/assets/js");

    mix.scripts([

        // app
        "app.js",

        // pl
        // '../../../node_modules/fullcalendar/dist/lang/pl.js',
        // '../../../node_modules/bootstrap-select/dist/js/i18n/defaults-pl_PL.min.js',
        // '../../../node_modules/moment/min/moment-with-locales.min.js',

    ], './web/js/app.min.js', "./app/Resources/assets/js");

    //mix.phpUnit();
});
