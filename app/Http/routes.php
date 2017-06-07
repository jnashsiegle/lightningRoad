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
Route::get('colophon', 'PagesController@colophon'); // colophon.blade.php
Route::get('resume', 	'PagesController@landing'); //landing.blade.php into home.blade.php
Route::get('skills', 	'PagesController@about'); //about.blade.php into home.blade.php
Route::get('contact', 	'PagesController@what');  //what.blade.php into home.blade.php
Route::get('contact', 'PagesController@contact');  //contact.blade.php into home.blade.php
Route::get('contact', 'PagesController@mission');  //contact.blade.php into home.blade.php
Route::get('contact', 'PagesController@gallery');  //contact.blade.php into home.blade.php
// Contact Form
Route::get('contact', 
  ['as' => 'contact', 'uses' => 'ContactController@create']);
Route::post('contact', 
  ['as' => 'contact_store', 'uses' => 'ContactController@store']);


