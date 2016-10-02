@extends('adminMaster')
@section ('title', 'Image Listing')

@section('content')
<div class="container-fluid">
    <div class="row-fluid">
      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
          <div class="panel-heading mycontainer"> 
              <span><a href="#"><img src="../images/logos/boltLogo.svg" alt = "Lightning Road Biker Outreach" /></a></span>
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
         <div class="col-md-3">
            <div class="thumbnail">
               <img src="{{asset($image->file)}}" />
               <div class="caption">
                  <h3>{{$image->caption}}</h3>
                  <p>{!! substr($image->description, 0,100) !!}</p>
               </div><!--end of caption-->
            </div><!--end of thumbnail-->
                     <div class="row-fluid">
                     <a href="{{ url('/image/'.$image->id.'/edit') }}" class="btn btn-warning pull-left">Edit</a>                     
                    {{--  {!! Form::open(array('url'=>'/image/'.$image->id, 'id'=>'deletion', 'class'=>'pull-right')) !!} --}}
                    {!! Form::open(['method'=>'DELETE', 'id'=>'deletion', 'route'=>['image.destroy',$image->id]]) !!}  
                        <button data-toggle="tooltip" data-placement="top" title="Delete" type="submit" class="btn btn-danger btn-xs" onclick="return confirm('Are you sure you want to delete this item?');"><span> &times;</span></button>
                     {!! Form::close() !!}
                     </div><!--end of row fluid for buttons-->
         </div><!--end of col-md-3-->
      @empty
         <p>No images yet, <a href="{{ url('image/create') }}">add a new one</a>?</p>
      @endforelse
   </div>
   <div align="center">{!! $images->render() !!}</div>
@stop
