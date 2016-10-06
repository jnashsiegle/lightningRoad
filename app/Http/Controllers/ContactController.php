<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactLR;
use Illuminate\Mail\Mailer;
use Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;
/*use Illuminate\Support\Facades\Mail;*/

class ContactController extends Controller
{
	
    /**
   * Create the contact.php view
   *
   * @param 
   * @return View
   */
  
  public function create()
      {
          return view('partials.contact');
      }

 /**
   * Email the contact request
   *
   * @param sendContactInfo $request
   * @return Redirect
   */
    public function store(ContactLR $request)
{

    \Mail::send('partials.contactView',
        array(
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'subject' => $request->get('subject'),
            'customSubject' => $request->get('customOther'),
            'user_message' => $request->get('message')
        ), function($message)
    {
        $message->from('jlousiegle@gmail.com');
        $message->to('jlousiegle@gmail.com', 'Admin')->subject('Lightning Road Contact Form Submission');
    });

  
  //Flash Message
  $request->session()->flash('alert-success', 'Thank you for contacting us! Your email was sent successfully and we shall respond as soon as we can! - Steve &amp; Rose!!');
  // Generating Redirects...with message
return Redirect::to(URL::previous('home') . "#contact");

}

   
  

}
