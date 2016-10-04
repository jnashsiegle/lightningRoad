<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use Validator;
use App\Http\Requests\UserEditFormRequest;
use Illuminate\Support\Facades\Hash;
use Session;

class UsersController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $users = User::all();

        return view('users/index')->with(compact('users'));
    }

    
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $user = new User;

        return view('auth/register')->with(compact('user', 'name', 'email', 'password', 'password_confirmation','isAdmin'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
            // Validation //
              $validation = Validator::make($request->all(), [
                'name' => 'required|max:255',
                'email' => 'required|email|',
                'password' => 'required|confirmed|min:6',
              ]);
              // Check if it fails //            
                 if( $validation->fails() ){                                 
                    return redirect()->back()->withInput()->with('errors', $validation->errors() );;
                }
          

        $request->merge(['password' => Hash::make($request->password)]);
            
       $request['isAdmin'] = (Input::has("isAdmin")) ? true : false;
        
        $user = User::create($request->all());
        /*dd($request);*/
         //PUT HERE AFTER YOU SAVE
        $request->session()->flash('alert-success', 'User was successfully added!');


        return redirect('adminP')->with('success', 'The user has been added');
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $user = User::whereId($id)->firstOrFail();

        
        return view('users.edit')->with(compact('user', 'name', 'email', 'isAdmin'));
    }

    //Show individual user info for editing
    
    /*public function show($id)
    {
        $user = User::whereId($id)->firstOrFail();
        $name = $user->name()->get();
        $email = $user->email()->get();
        $isAdmin = $user->isAdmin()->get();
        return view('users/show', compact('user', 'name', 'email', 'isAdmin'));
    }*/

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update ($id, UserEditFormRequest $request)
    {
        $user = User::whereId($id)->firstOrFail();
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->isAdmin = $request->get('isAdmin');
        $user->isAdmin = (isset($_POST['isAdmin']) == '1' ? '1' : '0');
              
        $user->save();

        $request->session()->flash('alert-success', 'Information was successfully updated!');
        return redirect (action('UsersController@edit', $user->id))->with('success', 'The user has been updated!'); 

    }

    //Delete User
    
    public function destroy($id)
    {
        // delete
        $user = User::whereId($id)->firstOrFail();
        $user->delete();

        // redirect
        Session::flash('success', 'Successfully deleted the user!');
        return redirect('/users')->with('success', 'The user has been deleted');
    }

}