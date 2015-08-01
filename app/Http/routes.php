<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
get('/', function()
{
	echo "hello";
});

Route::group(['prefix' => 'control-panel'], function()
{
	Route::group(['middleware' => 'guest'], function()
	{
		get('login', [
			'as'		=> 'admin.get.login', 
			'uses'	=> 'Admin\UserController@getLogin'
		]);

		post('login', [
			'as'		=> 'admin.post.login',
			'uses'	=> 'Admin\UserController@postLogin'
		]);
	});

	Route::group(['middleware' => 'admin.auth'], function()
	{
		get('/', [
			'as' 		=> 'admin.index', 
			'uses'	=> 'Admin\MainController@index'
		]);
		get('/logout', [
			'as'		=> 'admin.logout', 
			'uses'	=> 'Admin\UserController@logout'
		]);
		get('/setting', [
			'as'		=> 'admin.setting',
			'uses'	=> 'Admin\MainController@setting'
		]);
		put('/setting', [
			'as'		=> 'admin.update_me',  
			'uses'	=> 'Admin\MainController@updateMe'
		]);
	});
});
