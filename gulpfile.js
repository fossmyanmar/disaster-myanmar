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
 elixir.config.sourcemaps = false;
 elixir(function(mix) {
 	//css
 	mix.copy(
 		'vendor/bower_components/toastr/toastr.css', 
 		'public/assets/css/vendor/toastr.css'
 		);

 	//Js
 	//Jquery
 	mix.copy(
 		'vendor/bower_components/jquery/jquery.min.js', 
 		'public/assets/js/vendor/jquery.js'
 		);

 	mix.copy(
 		'vendor/bower_components/toastr/toastr.js', 
 		'public/assets/js/vendor/toastr.js'
 		);
 });
