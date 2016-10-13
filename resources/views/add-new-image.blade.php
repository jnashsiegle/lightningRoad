@extends('adminMaster')
@section ('title', 'Add New Image')

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
        <div class="flash-message">
                @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                    @if(Session::has('alert-' . $msg))
                    <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                    @endif
                @endforeach
        </div> <!-- end .flash-message -->
              <div class="panel-body">  
                 <div class="row-fluid" data-toggle = "validator">
                 @include('partials.alerts.errors')
                 {!! Form::open(['url'=>'/image', 'method'=>'POST', 'files'=>'true']) !!}

                    <div class="form-group">
                       <label for="userfile">Image File</label>
                       <input type="file" class="form-control required" aria-required = "true" name="userfile">
                    </div>

                    <div class="form-group">
                       <label for="caption">Caption</label>
                       <input type="text" class="form-control required" aria-required = "true" placeholder = "Caption" data-toggle = "tooltip" data-placement = "top" title = "Alpha only, no numeric inputs" name="caption" value="">
                    </div>

                    <div class="form-group">
                       <label for="description">Description</label>
                       <textarea class="form-control required" aria-required = "true" name="description" placeholder = "Short Description"></textarea>
                    </div>

          
                    <button type="submit" class="btn btn-default btn-send pull-right">Upload</button>
                    <a href="{{ URL::previous() }}" class="btn btn-info btn-close">Back</a>
           

                 {!! Form::close() !!}
              @stop
