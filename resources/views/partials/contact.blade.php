@section('contact')
        	<article id = "contact" class = "container-fluid"> <!--Contact section -->
        	<!--breadcrumbs-->
        	<nav class="breadcrumb">
			  <a class="breadcrumb-item" href="#">Home / </a>
			  <a class="breadcrumb-item" href="#about">Who / </a>
			  <a class="breadcrumb-item" href="#what">What / </a>
			  <a class="breadcrumb-item" href="#mission">Mission / </a>
			  <a class="breadcrumb-item active" href = "#contact">Contact / </a>
			  <a class="breadcrumb-item" href = "#gallery">Gallery</a>
			</nav>
			<!--Flash Message -->
			<div class="flash-message">
			@foreach (['danger', 'warning', 'success', 'info'] as $msg)
                    @if(Session::has('alert-' . $msg))
                    <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                    @endif
            @endforeach
              </div> <!-- end .flash-message -->
	   		@include('partials.alerts.errors')    
		
			<section class = "row-fluid"> <!--header row -->
			<div class = "col-xs-12 col-md-6 center-block"> 
				<aside id = "vHeadingL">
				<div class = "verse"><!--the following divs style the verse-->
				<div class = "innerBox center-block ">
				<div class = "vtext">
				<h5 class = "center-block">Join us as we attack the spirit of lack, defeat, despair, doubt, and unbelief through the uncompromising Word of God.<br /><cite>~&lpar;Isaiah 6&colon;1&dash;&rpar;</cite></h5>
				</div><!--end of vtext-->
				</div><!--end of inner-box-->
				</div><!--end of verse & verse styling-->
				</aside><!--end of vHeadingL-->
				</div>	<!--end of column-->			
				<div class = "col-md-6 center-block">
				<aside id = "vHeadingR">
				<div class = "verse hidden-sm hidden-xs"><!--the following divs style the verse-->
				<div class = "innerBox center-block">
				<div class = "vtext">
				<h5 class = "center-block">Expect change in your life, and choose this day to walk in the fullness of His blessing!<cite>~&lpar;Gal 3&colon;14&rpar;<br /></cite></h5>
				</div><!--end of vtext-->
				</div><!--end of inner box-->
				</div><!--end of verse & verse styling-->
				</aside><!--end of vheadingR-->
				</div><!--end of column-->
				</section><!--end of row-fluid-->	
				<section class = "row-fluid vcenter ">
				<div class = "col-md-6 center-block">
					<p>We encourage you to prove us through the Word of God and our testimony, then prayerfully partner with us as we reach out to the world unconditionally as we are taught by Jesus in God's Word.</p>
				</div>				
				<div class = "col-md-6  center-block">
					<p>Our prayer is that you would know the life changing freedom and peace of making an eternal decision concerning this life.</p>
				</div>
				</section><!--end of row-fluid-->



			<form id="contact-form" data-toggle = "validator" name = "contact" method="POST" action="contact">
			{{ csrf_field() }}
			    <h1 class = "clearfix text-center">Request Information</h1>
			    <div class="row-fluid">
		            <div class="col-md-6 col-md-offset-3 column">
		                <p class = "requiredNotice"><strong>*</strong> These fields are required.</p>
		            </div><!--end of col-md-6 .. -->
		        </div><!--end of row-fluid -->
			        <div class="row-fluid">
			            {{-- <div class="col-md-6 col-md-offset-3 column"> --}}
			                <div class="form-group col-md-6 col-md-offset-3 column">
			                    <label for="name" class = "control-label">Your Name <span class = "requiredNotice">*</span></label>
			                    <input id="name" type="text" name="name" class="form-control" placeholder="Your Name " required="required" data-error="Your name is required." aria-required = "true" value="{{ old('name') }}">		
			                    <div class="help-block with-errors"></div>
			                </div><!--end of form group-->
			            {{-- </div>end of col-md-6 --}}	
			           </div><!--end of row fluid-->		           
		        <div class="row-fluid">
		            {{-- <div class="col-md-6 col-md-offset-3 column"> --}}
		                <div class="form-group col-md-6 col-md-offset-3 column">
		                    <label for="email" class = "control-label">Email <span class = "requiredNotice">*</span></label>
		                    <input id="email" type="email" name="email" class="form-control"  placeholder= "Email Address" required="required"  aria-required = "true" data-error="Sorry, but that email is invalid." value="{{ old('email') }}">
		                    <div class="help-block with-errors"></div>
		                </div><!--end of form-group-->
		           {{--  </div>   --}}          
		        </div><!--end of row-->
		        <div class = "row-fluid">
		        {{-- <div class="col-md-6 col-md-offset-3 column"> --}}
			        <div class = "form-group subject col-md-6 col-md-offset-3 column">			       
						<label for = "subject" class = "control-label">Subject: <span class = "requiredNotice">*</span></label>
						<select class = "form-control" id = "subject" name = "subject" required = "required" data-error = "You forgot to fill in the subject, thank you!"> 	
							<option value = "">Please select a subject...</option>
							<option value = "Mentoring">Mentoring</option>
							<option value = "Prison Ministry">Prison Ministry</option>
							<option value = "How can I get involved?">How can I get involved?</option>
							<option value = "Financial Support">Financial Support</option>
							<option id = "customSubject" value = "Other">Other</option>
						</select>						
							<input id = "customOther" class = "form-control hiddenField" type = "text" name = "customOther" placeholder = "Write your subject here" value = ""/><span id = "charCount" class = "text-muted hiddenField"></span>
							<p id="count-subject" class="form-text text-muted hiddenField">
  							Please keep subject line less than 50 characters.</p>
  							 <div class="help-block with-errors"></div> 
					</div><!--end of form-group subject-->
				{{-- </div>end of col-md-6 --}}
				</div><!--end of row-->
		        <div class="row-fluid">
		        {{-- One tool to help fight spam --}}
		         <p class="antispam">Leave this empty: <input type="text" name="url" /></p>

		            {{-- <div class="col-md-6 col-md-offset-3 column"> --}}
		                <div class="form-group col-md-6 col-md-offset-3 column">
		                    <label for="message">Message <span class = "requiredNotice">*</span></label>
		                    <textarea id="message" name="message" class="form-control" placeholder="Write a message. *" rows="4" required="required" data-error="Write a message, please.">{{ old('message') }}</textarea>	
		                    <div class="help-block with-errors"></div>
		                </div><!--end of form-group-->		                
		            </div><!--end of row fluid-->
		            <div class = "row-fluid">
		            <div class="col-md-6 col-md-offset-3 column">
		                <input type="submit" class="btn btn-default btn-send btn-responsive" name = "submitEmail" value="Send message"> 
		            </div><!--end of col-md-6... -->
		        </div>{{-- end of row --}}	
			</form>		<!--end of form-->	

	
	</article><!--end of container-->

@endsection