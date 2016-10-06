<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use File;
Use Session;
use App\Image;
use Validator;
use App\Http\Requests;

class ImageController extends Controller
{
     /*This is the "images list" view */
      public function index()
      {
         $images = Image::paginate(10);
         return view('images-list')->with('images', $images);
      }

/*  This is the "add new image" view */
      public function create()
      {
         return view('add-new-image');
      }


/*This will store our image and details after creation*/

      public function store(Request $request)
   {
      // Validation //
      $validation = Validator::make($request->all(), [
         'caption'     => 'required|regex:/^[A-Za-z ]+$/',
         'description' => 'required',
         'userfile'     => 'required|image|mimes:jpeg,png|min:1|max:250'
      ]);

      // Check if it fails //
      if( $validation->fails() ){
         return redirect()->back()->withInput()
                          ->with('errors', $validation->errors() );
      }

      $image = new Image;

      // upload the image //
      $file = $request->file('userfile');
      $destination_path = 'uploads/';
      $filename = str_random(6).'_'.$file->getClientOriginalName();
      $file->move($destination_path, $filename);
      
      // save image data into database //
      $image->file = $destination_path . $filename;
      $image->caption = $request->input('caption');
      $image->description = $request->input('description');
      $image->save();

      $request->session()->flash('alert-success', 'Image was successfully uploaded!');
      return redirect('/image');
   }

/*  This is the "image detail" view */
      public function show($id)
      {
         $image = Image::find($id);
         return view('image-detail')->with('image', $image);
      }

/*  This is the "edit image" view */
      public function edit($id)
      {
         $image = Image::find($id);
         return view('edit-image')->with('image', $image);
      }

/*This will update our image or its details*/

public function update(Request $request, $id)
   {
      // Validation //
      $validation = Validator::make($request->all(), [
            'caption'     => 'required|regex:/^[A-Za-z ]+$/',
            'description' => 'required',
            'userfile'    => 'sometimes|image|mimes:jpeg,png|min:1|max:250'
      ]);

      // Check if it fails //
      if( $validation->fails() ){
            return redirect()->back()->withInput()
                             ->with('errors', $validation->errors() );
      }

      // Process valid data & go to success page //
      $image = Image::find($id);

      // if user choose a file, replace the old one //
      if( $request->hasFile('userfile') ){
           $file = $request->file('userfile');
           $destination_path = 'uploads/';
           $filename = str_random(6).'_'.$file->getClientOriginalName();
           $file->move($destination_path, $filename);
           $image->file = $destination_path . $filename;
      }
        
      // replace old data with new data from the submitted form //
      $image->caption = $request->input('caption');
      $image->description = $request->input('description');
      $image->save();

      return redirect('/image')->with('message','Image Updated!');
   }

/*This will enable user to delete an image*/
 /* public function destroy($id)
      {
        $image = Image::findOrFail($id);


        $image->delete();
      
        return Redirect('/');
      }*/

      public function destroy($id, Request $request) 
      {
        $image = Image::findOrFail($id);
        /*dd($image);*/
        /*$image_path = public_path();*/
        /*dd($image_path);*/
       
        $result = File::exists(public_path() .'/'. $image->file);

        /*dd($result . public_path() .'/'. $image->file);*/

         /* dd($image);*/
            $image->delete();
            File::Delete(public_path() .'/'. $image->file);

            // redirect
        $request->session()->flash('alert-success', 'Image was successfully deleted!');
        return redirect('/image');           
       

       
      }






}


