@extends('adminMaster')
@section ('title', 'Image Listing')

@section('content')
<div class="container-fluid">
    <div class="row-fluid col-md-8 col-md-offset-2">    
        <div class="panel panel-default">
          <div class="panel-heading mycontainer"> 
              <span><a href="/"><img src="../images/logos/boltLogo.png" class = "hidden-xs" alt = "Lightning Road Biker Outreach" /></a></span>
              <span><h1 class = "panel-title text-right">Admin Area</h1></span>
          </div><!--end of panel-heading-->    
        <div class="panel-body">
        <!--breadcrumbs-->
         <nav class="breadcrumb">
           <a class="breadcrumb-item" href="../adminP">Admin Panel / </a>    
           <a class="breadcrumb-item active" href="#">Image Listing / </a>     
         </nav>
          @include('partials.alerts.errors')
                  <div class="flash-message">
                      @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                          @if(Session::has('alert-' . $msg))
                          <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                          @endif
                      @endforeach
                    </div> <!-- end .flash-message -->  
               
      <!--end breadcrumbs-->  

         <div class="row-fluid">
            @if(count($images) > 0)
               <div class="col-xs-12 text-center">
                  <a href="{{ url('/image/create') }}" class="btn btn-primary" role="button">
                     Add New Image
                  </a>
                  <hr />
            @endif


            @forelse($images as $image)      
             <div class = "row-fluid text-center"> 

             <div class = "table-responsive">
                <table class = "table table-striped">
                  <thead>
                    <tr>
                      <th align = "left">id</th>
                      <th align = "left">Show Image</th>
                      <th align = "left">Caption</th>
                      <th align = "left">Description</th>
                      <th align = "left">Added Date</th>
                      <th align = "left">Edit Image</th>
                      <th align = "left">Delete Image?</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($images as $image)
                    <tr>
                      <td>{!! $image->id !!} </td>
                      <td><div class = "frame-square text-center">
                       <img src = "{{asset($image->file)}}" class = " crop img-responsive" alt = "Generic placeholder thumbnail">
                      </div>
                      </td>
                      <td>{!! $image->caption !!}</td>
                      <td>{!! $image->description !!} </td>
                      <td>{!! $image->created_at !!}</td>
                      <td><a href="{{ url('/image/'.$image->id.'/edit') }}" class="btn btn-default pull-left">Edit</a>
                        <td>
                            {!! Form::open(['method'=>'DELETE', 'id'=>'deletion', 'route'=>['image.destroy',$image->id]]) !!}  
                                      <button data-toggle="tooltip"  data-placement="top" title="Delete" type="submit" class="btn btn-danger pull-right" onclick="return confirm('Are you sure you want to delete this item?');"><span> &times;</span></button>
                                   {!! Form::close() !!}
                        </td>            
                    </tr>
                  @endforeach
                  </tbody>
                </table>
      </div><!--end of table-responsive--> 
             
              </div><!--end of controls-->
              </div> <!-- end of col-lg-3....-->
              </div><!--end of row-fluid textcenter -->

          @empty
               <p>No images yet, <a href="{{ url('image/create') }}">add a new one</a>?</p>
            @endforelse
         </div><!--end of row fluid-->
         <div align="center">{!! $images->render() !!}</div>
      @stop
    </div><!--end of row fluid beneath breadcrumbs-->
  </div><!--end of panel body-->
  </div><!--panel panel default-->
  </div><!--end of row fluid top-->
  </div><!--end of container-->

