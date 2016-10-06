@extends('adminMaster')
@section ('title', 'Image Listing')

@section('content')
<div class="container-fluid">
    <div class="row-fluid">
      <div class="col-md-8 col-md-offset-2">
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
      <!--end breadcrumbs-->  

   <div class="row-fluid">
      @if(count($images) > 0)
         <div class="col-md-8 col-md-offset-2 text-center">
            <a href="{{ url('/image/create') }}" class="btn btn-primary" role="button">
               Add New Image
            </a>
            <hr />
            @include('partials.alerts.errors')
            <div class="flash-message">
                @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                    @if(Session::has('alert-' . $msg))
                    <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                    @endif
                @endforeach
              </div> <!-- end .flash-message -->  
         </div><!--end col-md-8 offset 2-->
      @endif

      @forelse($images as $image)      
       <div class = "row-fluid text-center">  
       <div class="col-lg-3 col-md-4 adminGall">   
        <div class = "caption text-center">
         <h4>{{$image->caption}}</h4>
        </div><!--end of caption-->
      <div class = "frame-square text-center">
         <img src = "{{asset($image->file)}}" class = " crop img-responsive" alt = "Generic placeholder thumbnail">
      </div>
          <p class = "text-center">{!! substr($image->description, 0,100) !!}</p> 
         <div class = controls>
            <a href="{{ url('/image/'.$image->id.'/edit') }}" class="btn btn-default pull-left">Edit</a>
                  {!! Form::open(['method'=>'DELETE', 'id'=>'deletion', 'route'=>['image.destroy',$image->id]]) !!}  
                        <button data-toggle="tooltip"  data-placement="top" title="Delete" type="submit" class="btn btn-danger pull-right" onclick="return confirm('Are you sure you want to delete this item?');"><span> &times;</span></button>
                     {!! Form::close() !!}
        </div><!--end of controls-->
        </div> <!-- end of col-lg-3....-->
        </div><!--end of row-fluid hcenter -->
         
       
         
     






     
      @empty
         <p>No images yet, <a href="{{ url('image/create') }}">add a new one</a>?</p>
      @endforelse
   </div>
   <div align="center">{!! $images->render() !!}</div>
@stop
