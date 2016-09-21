@section('contact')
        	<div id = "contact" class = "container-fluid"> <!--Contact section -->
        	<!--breadcrumbs-->
        	<nav class="breadcrumb">
			  <a class="breadcrumb-item" href="#">Home / </a>
			  <a class="breadcrumb-item" href="#about">Who / </a>
			  <a class="breadcrumb-item" href="#what">What / </a>
			  <a class="breadcrumb-item" href="#mission">Mission / </a>
			  <span class="breadcrumb-item active" href = "#contact">Contact / </span>
			  <a class="breadcrumb-item" href = "#gallery">Gallery</a>
			</nav>
			<div class = "row-fluid"> <!--header row -->
			<div class = "col-xs-12 col-md-6 center-block"> 
				<div id = "vHeadingL">
				<div class = "verse"><!--the following divs style the verse-->
				<div class = "innerBox center-block ">
				<div class = "vtext">
				<h5 class = "center-block">Join us as we attack the spirit of lack, defeat, despair, doubt, and unbelief through the uncompromising Word of God.<cite>~&lpar;Isaiah 6&colon;1&dash;&rpar;</cite></h5>
				</div><!--end of vtext-->
				</div><!--end of inner-box-->
				</div><!--end of verse & verse styling-->
				</div><!--end of vHeadingL-->
				</div>	<!--end of column-->			
				<div class = "col-md-6 center-block">
				<div id = "vHeadingR">
				<div class = "verse hidden-sm hidden-xs"><!--the following divs style the verse-->
				<div class = "innerBox center-block">
				<div class = "vtext">
				<h5 class = "center-block">Expect change in your life, and choose this day to walk in the fullness of His blessing!<cite>~&lpar;Gal 3&colon;14&rpar;</cite></h5>
				</div><!--end of vtext-->
				</div><!--end of inner box-->
				</div><!--end of verse & verse styling-->
				</div><!--end of vheadingR-->
				</div><!--end of column-->
				</div><!--end of row-fluid-->	
				<div class = "row-fluid vcenter ">
				<div class = "col-md-6 center-block">
					<p>We encourage you to prove us through the Word of God and our testimony, then prayerfully partner with us as we reach out to the world unconditionally as we are taught by Jesus in God's Word.</p>
				</div>				
				<div class = "col-md-6  center-block">
					<p>Our prayer is that you would know the life changing freedom and peace of making an eternal decision concerning this life.</p>
				</div>
				</div><!--end of row-fluid-->
			<form id="contact-form" class name = "contact" method="post" action="contact.php" role="form">
			    <h1 class = "clearfix text-center">Request Information</h1>
			        <div class="row-fluid">
			            {{-- <div class="col-md-6 col-md-offset-3 column"> --}}
			                <div class="form-group col-md-6 col-md-offset-3 column">
			                    <label for="fName">First Name *</label>
			                    <input id="fName" type="text" name="fName" value = "" class="form-control" placeholder="First Name *" required="required" data-error="First Name is required.">
			                    <div class="help-block with-errors"></div>
			                </div>
			            {{-- </div>end of col-md-6 --}}
			           {{--  <div class="col-md-6 col-md-offset-3 column"> --}}
			                <div class="form-group col-md-6 col-md-offset-3 column">
			                    <label for="lName">Lastname *</label>
			                    <input id="lName" type="text" name="lName" class="form-control" placeholder="Last Name *" required="required" data-error="Last Name is required.">
			                    <div class="help-block with-errors"></div>
			               {{--  </div> --}}
			            </div><!--end of col-md-6-->
			        </div><!--end of row-->
		        <div class="row-fluid">
		            {{-- <div class="col-md-6 col-md-offset-3 column"> --}}
		                <div class="form-group col-md-6 col-md-offset-3 column">
		                    <label for="email">Email *</label>
		                    <input id="email" type="email" name="email" class="form-control" placeholder="Email Address *" required="required" data-error="Valid email is required.">
		                    <div class="help-block with-errors"></div>
		                </div><!--end of form-group-->
		           {{--  </div>   --}}          
		        </div><!--end of row-->
		        <div class = "row-fluid">
		        {{-- <div class="col-md-6 col-md-offset-3 column"> --}}
			        <div class = "form-group subject col-md-6 col-md-offset-3 column">
						<label for = "subject">Subject:</label>
						<select class = "form-control" id = "subject" name = "subject"> 	
							<option>Please select a subject...</option>
							<option value = "Mentoring">Mentoring</option>
							<option value = "Prison Ministry">Prison Ministry</option>
							<option value = "How can I get involved?">How can I get involved?</option>
							<option value = "Financial Support">Financial Support</option>
							<option value = "Other">Other</option>
						</select>
							<input id = "Other" class = "form-control hiddenField" type = "text" name = "Other" placeholder = "Write your subject here"/><span id = "charCount" class = "text-muted"></span>
							<p id="count-subject" name = "count-subject" class="form-text text-muted hiddenField">
  							Please keep subject line less than 50 characters.</p>  
					</div><!--end of form-group subject-->
				{{-- </div>end of col-md-6 --}}
				</div><!--end of row-->
		        <div class="row-fluid">
		            {{-- <div class="col-md-6 col-md-offset-3 column"> --}}
		                <div class="form-group col-md-6 col-md-offset-3 column">
		                    <label for="message">Message *</label>
		                    <textarea id="message" name="message" class="form-control" placeholder="Write a message. *" rows="4" required="required" data-error="Write a message, please."></textarea>
		                    <div class="help-block with-errors"></div>
		                </div><!--end of form-group-->
		            </div><!--end of row fluid-->
		            <div class = "row-fluid">
		            <div class="col-md-6 col-md-offset-3 column">
		                <input type="submit" class="btn btn-default btn-send btn-responsive" value="Send message">
		           	   <input type="button" class = "btn btn-info pull-right btn-responsive" onclick="resetFunction()" value="Reset form">		
		            </div><!--end of col-md-6... -->
		        </div>{{-- end of row --}}
		        <div class="row-fluid">
		            <div class="col-md-6 col-md-offset-3 column">
		                <p class="text-muted"><strong>*</strong> These fields are required.</p>
		            </div><!--end of col-md-6 .. -->
		        </div><!--end of row-fluid -->
			</form>		<!--end of form-->							
	</div><!--end of container-->

@endsection