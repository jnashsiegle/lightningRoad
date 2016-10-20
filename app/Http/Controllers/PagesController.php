<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use View;

class PagesController extends Controller {

	public function home()  //home page
	{
		return view('home');
	}

	public function contact()  //contact page to inject into home.blade
	{
		return View::make('partials.contact');
	}

	public function lrfptech2016()   //login
	{
		return view('auth/lrfptech2016');
	}
	
	public function adminP()
	{
		return view('adminP');
	}
	public function colophon()  //colophon
	{
		return view('colophon');
	}

	


  
} //end of Controller
