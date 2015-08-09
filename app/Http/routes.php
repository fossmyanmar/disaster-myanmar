<?php

/*
|--------------------------------------------------------------------------
| Frontend 
|--------------------------------------------------------------------------
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
	/*
	|--------------------------------------------------------------------------
	| Logout
	|--------------------------------------------------------------------------
	*/
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
		/*
		|--------------------------------------------------------------------------
		| User's Account
		|--------------------------------------------------------------------------
		*/
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

		/*
		|--------------------------------------------------------------------------
		| Helpers
		|--------------------------------------------------------------------------
		| Routes for support json and others
		|
		*/
		//Get Cities by State
		get('/cities/json', [
			'as'		=> 'admin.cities.json',
			'uses' 	=> 'Admin\HelperController@getCitiesByState'
		]);
		
		//Get Villages by City
		get('/villages/json', [
			'as'		=> 'admin.villages.json', 
			'uses'	=> 'Admin\HelperController@getVillagesByCity'
		]);

		//Get District City by State
		get('/cities/district/json', [
			'as'		=> 'admin.cities.distirct.json',
			'uses'	=> 'Admin\HelperController@getDistrictCitiesByState'
		]);

		/*
		|--------------------------------------------------------------------------
		| Disaster Application Logics
		|--------------------------------------------------------------------------
		| Routes for Disaster Logics
		|
		*/
		Route::resource('states', 'Admin\StateController', ['names' => set_route_name('states')]);
		Route::resource('cities', 'Admin\CityController', ['names' => set_route_name('cities')]);
		Route::resource('villages', 'Admin\VillageController', ['names' => set_route_name('villages')]);
		Route::resource('ngos', 'Admin\NgoController', ['names' => set_route_name('ngos')]);
		get('ngos/{id}/add-contacts', [
			'as'	=> 'ngos.contact.add',
			'uses' => 'Admin\NgoContactController@add'
		]);
		Route::resource('ngo-contacts', 'Admin\NgoContactController', ['names' => set_route_name('ngo-contacts')]);
	});
});
