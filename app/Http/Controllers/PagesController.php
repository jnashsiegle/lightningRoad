<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller {

	public function home()  //home page
	{
		return view('home');
	}

	public function contact()  //contact page
	{
		return View::make('contact');
	}

	public function lrfptech2016()   //login
	{
		return view('/backend/lrfptech2016');
	}

	public function adminP()
	{
		return view('/backend/adminP');
	}

	public function imageP()
	{
		return view('/backend/imageP');
	}



  
} //end of Controller
