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


//These routes can be access by anyone 

Route::get('/', 'PagesController@home');  //home.blade.php
Route::get('contact', 'PagesController@contact');  //contact.blade.php into home.blade.php
Route::get('auth/lrfptech2016', 'PagesController@lrfptech2016');  // login page for admin area
Route::get('auth/login', 'Auth\AuthController@getLogin'); 
Route::post('auth/login', 'Auth\AuthController@postLogin');
// Password reset link request routes...
Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');

// Password reset routes...
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');


// Contact Form
Route::get('contact', 
  ['as' => 'contact', 'uses' => 'ContactController@create']);
Route::post('contact', 
  ['as' => 'contact_store', 'uses' => 'ContactController@store']);

//ADMIN ONLY

$router->group(['middleware' => ['auth', 'admin']], function($router)
{
    Route::resource('/users', 'UsersController'); 	//This goes to the User List
		//User Routes
		Route::get('auth/register', 'UsersController@create'); //add a new user
		Route::post('/auth/register', 'UsersController@store');  //save user
		Route::get('/users/index', 'UsersController@index'); //loads data into User List
		Route::get('/user/{id}/edit', 'UsersController@edit'); //let's be able to edit our users
		Route::patch('/user/{id?}/edit','UsersController@update'); //update user data
		Route::get('/user/{id?}/edit', 'UsersController@destroy');  //delete user*/
		
});

// all these need protected by auth middleware only allowing authorized people access to Admin Panel and images  NO GUESTS || ADMIN AND user only
	Route::group(['middleware' => 'auth'], function () {

		//Authentication Routing
		Route::get('auth/logout', 'Auth\AuthController@getLogout');

		//Admin Area only accessible by authorized people GUEST KEEP OUT
	
		Route::get('/image', function(){ return redirect('/image'); });
		Route::resource('/image', 'ImageController'); 

			
		Route::get('adminP', 'PagesController@adminP');
		Route::get('imageP', 'PagesController@imageP');

			return redirect('auth/lrfptech2016');
});
