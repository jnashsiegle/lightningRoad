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
        public function landing()  //about page to inject into home.blade
        {
        return View::make('pages.landing');
        }  
    	public function who()  //about page to inject into home.blade
    	{
        return View::make('pages.about');
    	}  
    	public function what()  //resume page to inject into home.blade
    	{
        return View::make('pages.what');
    	}  
    	public function mission()  //skills page to inject into home.blade
    	{
        return View::make('pages.mission');
    	}     
    	public function contact()  //contact page to inject into home.blade
    	{
        return View::make('pages.contact');
    	} 
    	public function gallery()  //contact page to inject into home.blade
    	{
        return View::make('pages.gallery');
    	}     
    	public function colophon()  //colophon
    	{
        return view('colophon');
    	}

	


  
} //end of Controller
