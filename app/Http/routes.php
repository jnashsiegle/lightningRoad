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

/*Route::get('/', function () {
    return view('home');
});*/

Route::get('/', 'PagesController@home');

Route::get('contact', 'PagesController@contact');

Route::get('lrfptech2016', 'PagesController@lrfptech2016');

Route::get('adminP', 'PagesController@adminP');

Route::get('imageP', 'PagesController@imageP');


/*Route::get('contact' , function () {  //contact.php is injected into home.blade.php
	return View::make('contact');
});*/



