@extends('adminMaster')
@section ('title', 'Image Listing')

@section('content')
<div id = "editImage" class="container-fluid">
    <div class="row-fluid col-md-10">    
        <div class="panel panel-default">
          <div class="panel-heading mycontainer"> 
              <span><a href="/"><img src="/images/logos/boltLogo.png" class = "hidden-xs" alt = "Lightning Road Biker Outreach" /></a></span>
              <span><h1 class = "panel-title text-right">Admin Area</h1></span>
          </div><!--end of panel-heading-->    
        <div class="panel-body">
        <!--breadcrumbs-->
         <nav class="breadcrumb">
           <a class="breadcrumb-item" href="/adminP">Admin Panel / </a>    
           <a class="breadcrumb-item active" href="#">Image Listing / </a>     
         </nav>
         <!--end breadcrumbs-->  
          @include('partials.alerts.errors')
                  <div class="flash-message">
                      @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                          @if(Session::has('alert-' . $msg))
                          <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                          @endif
                      @endforeach
                    </div> <!-- end .flash-message -->  
                      <!--display images in a table-->
         <div class="row-fluid">
               <div class="col-xs-12 text-center">
                  <a href="{{ url('/image/create') }}" class="btn btn-primary" role="button">
                     Add New Image
                  </a>
                </div>
                  <hr />
                <div class = "col-xs-12">
           @if ($images->isEmpty())
          <p> There are no images.</p>
          @else  
          <h2 class = "">Images</h2>            
             <div id = "image-list" class = "table-responsive">
                <table class = "table table-striped table-responsive table-bordered">
                  <thead>
                    <tr>
                      <th align = "left" class = "hidden-xs">id</th>
                      <th align = "left">Show Image</th>
                      <th align = "left" class = "hidden-xs">Caption</th>
                      <th align = "left" class = "hidden-xs">Description</th>
                      <th align = "left" class = "hidden-xs">Added Date</th>
                      <th align = "center">Edit Image</th>
                      <th align = "center">Delete Image?</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($images as $image)
                    <tr>
                      <td>{!! $image->id !!} </td>
                      <td><div class = "frame-square text-center">
                       <img src = "{{asset($image->file)}}" class = "crop img-responsive" alt = "Generic placeholder thumbnail">
                      </div>
                      </td>
                      <td class = "hidden-xs">{!! $image->caption !!}</td>
                      <td class = "word-wrap hidden-xs">{!! $image->description !!} </td>
                      <td class = "hidden-xs">{!! $image->created_at !!}</td>
                      <td class = "tBtn text-center"><a href="{{ url('/image/'.$image->id.'/edit') }}" class="btn btn-default pull-left" aria-label = "Edit">Edit</a></td>
                        <td class = "tBtn text-center">
                            {!! Form::open(['method'=>'DELETE', 'id'=>'deletion', 'route'=>['image.destroy',$image->id]]) !!}  
                                      <button data-toggle="tooltip"  data-placement="top" title="Delete" type="submit" class="btn btn-danger" aria-label = "Confirm" onclick="return confirm('Are you sure you want to delete this item?');"><span aria-label = "Close"> &times;</span></button>
                                   {!! Form::close() !!}
                        </td>  
                        @endforeach 
                    </tr>                  
                  </tbody>
                </table>
            </div><!--end of table-responsive--> 
            @endif
              </div> <!-- end of col-xs-12....-->
         </div><!--end of row fluid-->
        @stop 
  </div><!--end of panel body-->
  </div><!--panel panel default-->
  </div><!--end of row fluid top-->
  </div><!--end of container-->