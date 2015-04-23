var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.less('app.less');
});

elixir(function(mix) {
    mix.version("css/app.css");
});

elixir(function(mix) {
    //bootstrap
    mix.copy('resources/assets/bower/bootstrap/dist/js/bootstrap.min.js', 'public/js/bootstrap.min.js');
    mix.copy('resources/assets/bower/bootstrap/dist/css/bootstrap.min.css', 'public/css/bootstrap.min.css');
    //font-awesome
    mix.copy('resources/assets/bower/font-awesome/css/font-awesome.min.css', 'public/css/font-awesome.min.css');
    mix.copy('resources/assets/bower/font-awesome/fonts', 'public/fonts');
    //jquery
    mix.copy('resources/assets/bower/jquery/dist/jquery.min.js', 'public/js/jquery.min.js');
    //requirejs
    mix.copy('resources/assets/bower/requirejs/require.js', 'public/js/require.js');
});

//触发单元测试
elixir(function(mix) {
    mix.phpUnit();
});
