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
get('/', [
	'as' => 'frontend.index',
	'uses' => 'Frontend\MainController@index'
]);

get('/donation-groups', [
	'as' => 'frontend.donation.group',
	'uses' => 'Frontend\MainController@donationGroup'
]);

get('/news', [
	'as' => 'frontend.news',
	'uses' => 'Frontend\MainController@news'
]);

get('/add-information', [
	'as' => 'frontend.addinfo',
	'uses' => 'Frontend\MainController@addInfo'
]);

get('map', [
	'as'	=> 'frontend.map',
	'uses' => 'Frontend\MainController@map'
]);

get('/submit/information', [
	'as'	=> 'frontend.submit.information',
	'uses' 	=> 'Frontend\SubmitController@information'
]);

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

		//Helpers
		get('/cities/json', [
			'as'		=> 'admin.cities.json',
			'uses' 	=> 'Admin\HelperController@getCitiesByState'
		]);

		Route::resource('states', 'Admin\StateController', ['names' => set_route_name('states')]);
		Route::resource('cities', 'Admin\CityController', ['names' => set_route_name('cities')]);
		Route::resource('villages', 'Admin\VillageController', ['names' => set_route_name('villages')]);
		Route::resource('ngos', 'Admin\NgoController', ['names' => set_route_name('ngos')]);
	});
});
