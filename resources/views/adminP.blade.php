@extends('adminMaster')
@section ('title', 'Admin_Panel')

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
        <div class="flash-message">
                @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                    @if(Session::has('alert-' . $msg))

                    <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                    @endif
                @endforeach
              </div> <!-- end .flash-message -->
        
           <p class = "text-center">Welcome {{ Auth::user()->name }} to your Administrative Panel.</p>
           @if (Auth:: check()) 
           <li> <a href ="/auth/logout"> Logout </a> </li> 
          <li> <a href ="auth/register" > Add a new Administrator</a> </li>
          <li> <a href = "users/">List of users</a></li> 
           @else            
           <li> <a href ="lrfptech2016"> Login </a> </li> 
           @endif
           <li> <a href ="/image/"> Image Listing </a> </li> 

<h1>Welcome to your Admin Panel!!</h1>

          </div><!--end of panel body-->
        </div><!--end of panel panel default-->
      </div><!--end of col-md-8 col-md-offset-2-->
    </div><!--end of row-->
  </div><!--end container-->
  
@endsection<!--end of login-->