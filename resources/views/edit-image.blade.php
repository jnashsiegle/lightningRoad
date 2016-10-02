@extends('adminMaster')
@section ('title', 'Edit Image')

@section('content')
<div class="container-fluid">
    <div class="row-fluid">
      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
          <div class="panel-heading mycontainer"> 
              <span><a href="#"><img src="/images/logos/boltLogo.svg" alt = "Lightning Road Biker Outreach" /></a></span>
              <span><h1 class = "panel-title text-right">Admin Area</h1></span>
          </div><!--end of panel-heading-->
         
        <div class="panel-body">
        <div class="flash-message">
                @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                    @if(Session::has('alert-' . $msg))

                    <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                    @endif
                @endforeach
              </div> <!-- end .flash-message -->
              <div class="panel-body">  
        <!--breadcrumbs-->
         <nav class="breadcrumb">
           <a class="breadcrumb-item" href="../adminP">Admin Panel / </a> 
            <a class="breadcrumb-item" href="/">Image Listing / </a>    
           <a class="breadcrumb-item active" href="#">Edit Image / </a>     
         </nav>
         <!--end of breadcrumbs-->
   @include('partials.alerts.errors')
   {!! Form::model($image,['url' => '/image/'.$image->id, 'method' => 'PUT', 'files'=>true]) !!}

      <img src="{{ asset($image->file) }}" height="150" />
      <div class="form-group">
         <label for="userfile">Image File</label>
         {!! Form::file('userfile',null,['class'=>'form-control']) !!}
      </div>

      <div class="form-group">
         <label for="caption">Caption</label>
         {!! Form::text('caption',null,['class'=>'form-control']) !!}
      </div>

      <div class="form-group">
         <label for="description">Description</label>
         {!! Form::textarea('description',null,['class'=>'form-control']) !!}
      </div>

      <button type="submit" class="btn btn-primary">Save</button>
      <a href="{{ url('/image') }}" class="btn btn-warning">Cancel</a>

   {!! Form::close() !!}
@stop
