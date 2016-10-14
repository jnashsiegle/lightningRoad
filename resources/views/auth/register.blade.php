@extends('adminMaster') 
@section('title', 'Register') 
@section('content') 

<div class="container-fluid">
    <div class="row-fluid col-md-8 col-md-offset-2">
        <div class="panel panel-default">
          <div class="panel-heading mycontainer"> 
              <span><a href="/"><img src="../images/logos/boltLogo.png" alt = "Lightning Road Biker Outreach" /></a></span>
              <span><h1 class = "panel-title text-right"><a href = "../adminP">Admin Area</a></h1></span>
          </div><!--end of panel-heading-->
		{{-- <div class ="well well bs-component">  --}}
			<div class="panel-body">
				<form class ="form-horizontal" data-toggle = "validator" name = "newUser" method ="post"> 
					@include('partials.alerts.errors')						
					{!! csrf_field() !!} 
				<fieldset> 
					<legend> Add a new User || Administrator </legend > 
						<div class = "row-fluid col-md-12">
						<div class = "form-group">
							<label for ="name" class ="control-label"> Name </label> 
								<input type ="text" class ="form-control" id ="name" placeholder ="Name" data-error = "You must submit a name" required = "required" name ="name" value="{{ old('name') }}">
								<div class="help-block with-errors"></div>
						</div> <!--end of form group-->						
						</div><!--end of row fluid-->
						<div class = "row-fluid col-md-12">
						<div class = "form-group">
							<label for ="email" class ="control-label"> Email </label> 
							<input type ="email" class ="form-control" id ="email" data-error = "Please submit an email address" required = "required" value ="{{ old('email') }}" placeholder ="Email" name ="email" > 		
							<div class="help-block with-errors"></div>				
						</div> <!--end of form group-->
						</div><!--end of row fluid-->
						<div class = "row-fluid col-md-12" data-toggle = "validator">
						<div class = "form-group">

							<label for ="password" class ="control-label"> Password </label> 
							<input type ="password" class ="form-control" name ="password" id = "password" data-error = "You must give a default password" required = "required" placeholder = "Password"> 
							<div class="help-block with-errors"></div>
						</div> <!--end of form group-->
						</div><!--end of row fluid-->
						<div class = "row-fluid col-md-12">
						<div class = "form-group">
							<label for ="password" class ="control-label" > Confirm password </label> 
							<input type ="password" class ="form-control" data-error = "Please confirm the password" name ="password_confirmation" id = "password_confirmation" required = "required" placeholder = "Confirm password"> 
							<div class="help-block with-errors"></div>

						</div> <!--end of form group-->
						</div><!--end of row fluid-->

						<div class = "row-fluid col-md-12">
						<div class = "form-group">
						<label for "isAdmin" class = "control-label">Is Admin?</label>
						{{ Form::checkbox('isAdmin[]',0, false) }}
						<div class="help-block with-errors"></div>
						</div>
						<hr>
						<div class = "row-fluid col-md-12">
						<div class = "form-group">	
								<a href="{{ URL('adminP') }}" class="btn btn-info btn-close" aria-label = "back">Back</a>
								<button type ="submit" class ="btn btn-default btn-send  pull-right" aria-label = "submit"> Submit </button> 

						</div> <!--end of form group-->
						</div><!--end of row fluid-->
				</fieldset> 
		</form><!--end of form-->
         </div><!--end of panel body-->
      </div><!--end of panel panel default-->  

  </div><!--end of row fluid-->
</div><!--end of container-->
@endsection

