@extends('adminMaster')
@section ('title', 'Add New Image')

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
        <div class="flash-message">
                @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                    @if(Session::has('alert-' . $msg))
                    <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                    @endif
                @endforeach
        </div> <!-- end .flash-message -->
             {{--  <div class="panel-body">   --}}
                 <div class="row-fluid">
                 @include('partials.alerts.errors')
                 {!! Form::open(['url'=>'/image', 'method'=>'POST', 'files'=>'true', 'data-toggle'=> 'validator']) !!}

                    <div class="form-group">
                       <label for="userfile">Image File</label><br>
                       <span class="form-control btn btn-default btn-file  onclick = " required = "required">Browse
                       <input type="file" id="userfile" class="hidden_field" name="userfile" data-error = "You must choose an image to upload"value="{{ old('name') }}"></span>
                       <span id = "userfilename"></span>
                       <div class="help-block with-errors"></div>
                    </div>

                    <div class="form-group">
                       <label for="caption">Caption</label>
                       <input type="text" class="form-control" required = "required"  placeholder = "Caption" data-toggle = "tooltip" data-placement = "top" data-error = "You must write a small caption" title = "Alpha only, no numeric inputs" name="caption" value="{{ old('caption') }}">
                       <div class="help-block with-errors"></div>
                    </div>

                    <div class="form-group">
                       <label for="description">Description</label>
                       <textarea class="form-control" required = "required" name="description" placeholder = "Short Description" data-error = "You must write a short description" value="{{ old('description') }}"></textarea>
                       <div class="help-block with-errors"></div>
                    </div>
                    <div class = "form-group btnGroup"> 
                    <button type="submit" class="btn btn-default btn-send pull-right">Upload</button>
                    <a href="{{ URL::previous() }}" class="btn btn-info btn-close">Back</a>
                    </div> <!--end of form group btnGroup-->

                 {!! Form::close() !!}
              @stop
              </div> <!--end of row fluid - validator-->
            </div><!--end of panel body-->
          </div><!--end of panel heading-->
        </div><!--end of col-md-8-->
      </div><!--end of row-fluid very top-->
    </div><!--end of container fluid-->
