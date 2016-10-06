@extends('adminMaster')
@section ('title', 'Admin_Panel')

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
        
           <p class = "text-center">Welcome {{ Auth::user()->name }} to your Administrative Panel.</p>
          <hr>

           <div class = "col-md-4 well">
           <h3>Administrator Access Only</h3>
           <ul>
          <li> <a href ="auth/register" > Add a new Administrator</a> </li>
          <li> <a href = "users/">List of users</a></li> 
          </ul>
          </div>

          <div class = "col-md-4  col-md-offset-4 well">
          <h3>Authorized User &amp; Administrator Access</h3>
          <ul>
          <li> <a href ="/image/"> Image Listing </a> </li> 
          </ul>
          </div>        
            <a class = "btn btn-large btn-info  btn-close  pull-right" href ="/auth/logout"> Logout </a>
          </div><!--end of panel body-->
        </div><!--end of panel panel default-->
      </div><!--end of col-md-8 col-md-offset-2-->
    </div><!--end of row-->
  </div><!--end container-->
  
@endsection<!--end of login-->