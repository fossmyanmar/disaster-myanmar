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
 		'vendor/bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css', 
 		'public/assets/css/vendor/bootstrap-datetimepicker.min.css'
 		);
 	mix.copy(
 		'vendor/bower_components/toastr/toastr.css', 
 		'public/assets/css/vendor/toastr.css'
 		);

 	mix.copy(
 		'vendor/bower_components/bootstrap/dist/css/bootstrap.min.css', 
 		'public/assets/css/vendor/bootstrap.css'
 		);

 	mix.copy(
 		'vendor/bower_components/font-awesome/css/font-awesome.min.css', 
 		'public/assets/css/vendor/font-awesome/font-awesome.css'
 		);

 	mix.copy(
 		'vendor/bower_components/font-awesome/fonts', 
 		'public/assets/css/vendor/font-awesome/fonts'
 		);

 	//Js
 	mix.copy(
 		'vendor/bower_components/jquery/dist/jquery.min.js', 
 		'public/assets/js/vendor/jquery.js'
 		);

 	mix.copy(
 		'vendor/bower_components/bootstrap/dist/js/bootstrap.min.js', 
 		'public/assets/js/vendor/bootstrap.js'
 		);

 	mix.copy(
 		'vendor/bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js', 
 		'public/assets/js/vendor/bootstrap-datetimepicker.js'
 		);

 	mix.copy(
 		'vendor/bower_components/toastr/toastr.js', 
 		'public/assets/js/vendor/toastr.js'
 		);

 	mix.copy(
 		'vendor/bower_components/moment/src', 
 		'public/assets/js/vendor/moment'
 		);
 });
