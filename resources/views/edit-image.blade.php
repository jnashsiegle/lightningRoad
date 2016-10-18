@extends('adminMaster')
@section ('title', 'Edit Image')

@section('content')
<div class="container-fluid">
    <div class="row-fluid">
      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
          <div class="panel-heading mycontainer"> 
              <span><a href="/"><img src="/images/logos/boltLogo.png" class = "hidden-xs" alt = "Lightning Road Biker Outreach" /></a></span>
              <span><h1 class = "panel-title text-right">Admin Area</h1></span>
          </div><!--end of panel-heading-->
        <div class="panel-body">
        @include('partials.alerts.errors')
        <div class="flash-message">
                @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                    @if(Session::has('alert-' . $msg))
                    <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                    @endif
                @endforeach
              </div> <!-- end .flash-message -->
             <fieldset>
                  <legend>Edit Image</legend>  
                    <div class = "row-fluid  col-md-12 column">
             {!! Form::model($image,['url' => '/image/'.$image->id, 'method' => 'PUT', 'files'=>true]) !!}
                <img class = "frame-square" src="{{ asset($image->file) }}" height="150" />
                <p>{{$image->file}}</p>
                </div>
               
                <div class = "row-fluid  col-md-12 column">
                <div class="form-group">
                   <label for="caption">Caption</label>
                   {!! Form::text('caption',null,['class'=>'form-control']) !!}
                </div>
                </div>
                <div class = "row-fluid  col-md-12 column">
                <div class="form-group">
                   <label for="description">Description</label>
                   {!! Form::textarea('description',null,['class'=>'form-control']) !!}
                </div>
                <hr>
                </div><!--end of row-fluid-->
                <div class = "row-fluid col-md-12">
                <div class = "form-group btnGroup"> 
                <button type="submit" class="btn btn-default btn-send pull-right">Save</button>
                <a href="{{ URL::previous() }}" class="btn btn-info btn-close">Back</a>
                </div>
           </fieldset>
          {!! Form::close() !!}
        </div><!--end of panel-body-->
      </div><!--end of panel panel default-->
    </div><!--end of col-md-8-->
  </div><!--end of row fluid top-->
</div><!--end of container fluid-->
@stop
