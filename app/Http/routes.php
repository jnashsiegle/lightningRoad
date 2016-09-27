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
/*Route::group(['middleware' => 'web'], function() {*/

Route::get('/', 'PagesController@home');  //home.blade.php
Route::get('contact', 'PagesController@contact');  //contact.blade.php into home.blade.php
Route::get('auth/lrfptech2016', 'PagesController@lrfptech2016');  // login page for admin area
Route::get('auth/login', 'Auth\AuthController@getLogin'); 
Route::post('auth/login', 'Auth\AuthController@postLogin');

// Contact Form
// 
/*$router->get('contact', 'ContactController@showForm');*/
/*$router->get('contact', 'ContactController@contact');
Route::post('store', 'ContactController@store');*/
Route::get('contact', 
  ['as' => 'contact', 'uses' => 'ContactController@create']);
Route::post('contact', 
  ['as' => 'contact_store', 'uses' => 'ContactController@store']);

/*Route::resource('/users', 'UsersController'); 	//This goes to the User List
	    */
/*});*/ //End of Web Middleware Group Route


//must be ADMIN to access
/*Route::get('protected', ['middleware' => ['auth', 'admin'], function() {
		Route::resource('/users', 'UsersController'); 	//This goes to the User List
		//User Routes
		Route::get('auth/register', 'UsersController@create'); //add a new user
		Route::post('/auth/register', 'UsersController@store');  //save user
		Route::get('users/index', 'UsersController@index'); //loads data into User List
		Route::get('/user/{id}/edit', 'UsersController@edit'); //let's be able to edit our users
		Route::post('/users{id?}/edit','UsersController@update'); //update user data
		Route::post('/users/{id?}/delete', 'UsersController@destroy');  //delete user*/

		//Password Reset Routing
		/*Route::get('password/reset/{token?}', 'Auth\PasswordController@showResetForm');
		Route::post('password/email', 'Auth\PasswordController@sendResetLinkEmail');
		Route::post('password/reset', 'Auth\PasswordController@reset');*/

	/* return redirect('adminP');   
}]);*/

$router->group(['middleware' => ['auth', 'admin']], function($router)
{
    Route::resource('/users', 'UsersController'); 	//This goes to the User List
		//User Routes
		Route::get('auth/register', 'UsersController@create'); //add a new user
		Route::post('/auth/register', 'UsersController@store');  //save user
		Route::get('users/index', 'UsersController@index'); //loads data into User List
		Route::get('/user/{id}/edit', 'UsersController@edit'); //let's be able to edit our users
		Route::post('/users{id?}/edit','UsersController@update'); //update user data
		Route::post('/users/{id?}/delete', 'UsersController@destroy');  //delete user*/

		return redirect('adminP');
});

// all these need protected by auth middleware only allowing authorized people access to Admin Panel and images  NO GUESTS
	Route::group(['middleware' => 'auth'], function () {

		//Authentication Routing
		Route::get('auth/logout', 'Auth\AuthController@getLogout');

		//Admin Area only accessible by authorized people GUEST KEEP OUT
			
		Route::get('adminP', 'PagesController@adminP');
		Route::get('pages/imageP', 'PagesController@imageP');

			return redirect('lrfptech2016');
});
//EMAIL
/*Route:: get(' sendemail', function () { 
	$ data = array( 'name' = > "Learning Laravel", 
		); 
	Mail:: send(' emails.welcome', $ data, function ($ message) { 
		$ message-> from(' yourEmail@ domain.com', 'Learning Laravel'); 
		$ message-> to(' yourEmail@ domain.com')-> subject(' Learning Laravel test ema\ il'); 
	}); 
	return "Your email has been sent successfully"; });*/


/*Route::get('sendemail', function () {

    $data = array(
        'name' => "Lightning Road",
    );

    Mail::send('partials.contact', $data, function ($message) {

        $message->from('jlousiegle@gmail.com', 'Lightning Road');

        $message->to('jlousiegle@gmail.com')->subject('An email from your contact form');

    });*/

   /* return "Your email has been sent successfully";*/

/*});*/



/*Route:: group([' middleware' = > [' web']], function () { 

});*/  //should not need to use this as I updated the kernel.php