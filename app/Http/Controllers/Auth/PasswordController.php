<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


use Illuminate\Foundation\Auth\ResetsPasswords;


class PasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

     protected $redirectTo = 'adminP';

     public function showResetForm(Request $request, $token = null)
    {
        if (is_null($token)) {
            return $this->getEmail();
        }

        $email = $request->input('email');

        if (property_exists($this, 'resetView')) {
            return view($this->resetView)->with(compact('token', 'email'));

        }

        if (view()->exists('auth.passwords.reset')) {
            /*return view('auth.emails.password')->with(compact('token', 'email'));*/
            return view('auth.passwords.reset')->with('token', $token);
        }

        return view('auth.reset')->with('token', $token);
        /*return redirect('adminP');*/
    }

    
    /**
    * Create a new password controller instance.
    *
    * @return void
    */
   public function __construct()
   {
       $this->middleware('guest');
   }

  /* public function postReset()
    {
    if(Hash::needsRehash($password)) { $password = bcrypt($password); 
    }
}*/


  }
  
