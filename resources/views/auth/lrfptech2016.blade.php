@extends('adminMaster')
@section ('title', 'login')

@section('content')
	
  <div class="container-fluid">
    <div class="row-fluid">
      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
          <div class="panel-heading mycontainer"> 
              <span><a href="#"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 92 106"><defs><style>  .cls-1{isolation:isolate;}.cls-2,.cls-3{font-size:14px;font-family:TradeWinds, Trade Winds;}.cls-2{fill:#fff;}.cls-3{fill:#e1e0db;}.cls-4{opacity:0.75;mix-blend-mode:multiply;}.cls-5{font-size:48px;fill:#ff9;stroke:#f7931e;stroke-miterlimit:10;font-family:Lightning-Bolts, Lightning Bolts;}</style></defs><title>  Asset 13</title><g class="cls-1"><g data-name="Layer 2"><g data-name="LRBolt light"><text class="cls-2" transform="matrix(0.81 -0.58 0.58 0.81 14.98 27.86)">  L</text><text class="cls-2" transform="matrix(0.9 -0.44 0.44 0.9 22.32 22.83)">  i</text><text class="cls-2" transform="translate(25.38 21.11)rotate(-17.65)">  g</text><text class="cls-2" transform="translate(32.66 18.7)rotate(-5.58)">  h</text><text class="cls-2" transform="matrix(1 0.09 -0.09 1 41.21 17.95)">  t</text><text class="cls-2" transform="translate(47.04 18.32)rotate(16.02)">  n</text><text class="cls-2" transform="translate(55.09 20.8)rotate(25.01)">  i</text><text class="cls-2" transform="matrix(0.83 0.56 -0.56 0.83 58.36 22.08)">  n</text><text class="cls-2" transform="translate(65.28 26.71)rotate(45.94)">  g</text><text class="cls-2" transform="translate(70.61 32.4)rotate(54.79)"/><text class="cls-3" transform="matrix(0.93 0.38 -0.38 0.93 20.69 94.73)">  R</text><text class="cls-3" transform="translate(31.9 98.9)rotate(6.66)">  o</text><text class="cls-3" transform="translate(41.78 99.85)rotate(-6.97)">  a</text><text class="cls-3" transform="translate(51.44 98.49)rotate(-20.9)">  d</text><image class="cls-4" width="80" height="84" transform="translate(11.99 18.95)" xlink:href="data:image/png;base64,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"/><text class="cls-5" transform="translate(21.26 70.74)">  k</text></g></g></g></svg>
 </a></span>
              <span><h1 class = "panel-title text-right">Admin</h1></span>
          </div><!--end of panel-heading-->
        <div class="panel-body">
           <p class = "text-center">Welcome to your Administrative Area.</p>
           <p class = "text-center">Please Log In.</p>           
            <form id = "login-form" name = "login" role="form" method="POST"
                  action="{{ url('/auth/login') }}">
                  @include('partials.alerts.errors')
                  {!! csrf_field() !!}

               <div class="row-fluid">                
                    <div class="form-group col-md-12 column">
                        <label for="email" class = "control-label">Your email</label>
                        <input id="email" type="email" name="email" class="form-control" placeholder="Email Address *">
                    </div><!--end of form-group-->
               {{--  </div>   --}}          
            </div><!--end of row-->

                <div class = "row-fluid">             
                    <div class="form-group col-md-12 column">
                        <label for="password" class = "control-label"> Your password *</label><span class = "text-muted pull-right"><a href = "/password/email">Forgot Your Password?</a></span>
                        <input id="password" type="password" name="password" class="form-control" placeholder="Enter password *" >
                    </div><!--end of form-group-->                    
              </div><!--end of row-->
          
                <div class = "row-fluid">               
                  <div class="col-md-12 column">
                    <label>
                      <input type="checkbox" name="remember" id = "remember"> Remember me
                    </label>
                  </div><!--end of col-md-12-->
                </div><!--end row fluid...-->

               <div class = "row-fluid">                
                  <div class = "col-md-12 column">
                  <button type="submit" id = "sBtn" class="btn btn-default">Log In</button>
                </div><!--end of col-md-12-->
              </div><!--end row fluid--> 

            </form><!--end of form-->
          </div><!--end of panel body-->
        </div><!--end of panel panel default-->
      </div><!--end of col-md-8 col-md-offset-2-->
    </div><!--end of row-->
  </div><!--end of container fluid-->
	
@endsection<!--end of login-->