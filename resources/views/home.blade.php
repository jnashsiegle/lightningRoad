@extends('master')

@section('content')
		<div id = "landing" class="container-fluid">  <!--landing page section-->
@section('title')Lightning Road 
@endsection <!--end of title section-->	
@if(Session::has('message'))
    <div class="alert alert-success"><em> {!! session('message') !!}</em></div>
@endif
						<div class = "row-fluid">	
	                	<div class = "col-xs-12  col-md-4 col-md-offset-1 vcenter">  
	                		<div id = "landingL">
	                		<img src = "../images/logos/textLogoLight.svg" class = "img-responsive hidden-xs hidden-sm" alt = "Lightning Road Biker Outreach" />
	                		<p class = "tagline text-left hidden-xs hidden-sm">B<span style="font-family: thequietscream">i</span>ker Outreach | Motorcycle Evangelism</p>
	                		</div><!--end of landingL-->
	                	</div><!--end of col-xs-12 col-md-5 col-md-offset-1 vcenter-->
	                	<div class = "col-xs-12 col-md-5 col-md-offset-1 vcenter">
	                	    <div id = "landingR">       		
	                		<img src = "../images/logos/textLogoLight.svg" class = ".img-responsive hidden-md hidden-lg hidden-xl" >
	                		<img src = "../images/logos/alphaLogo.svg" class = "hidden-sm hidden-xs center-block .img-responsive" alt = "Lightning Road Biker Outreach Logo">
	                		<blockquote>
	                		<p>As the lightning flashes in the east, and is seen as far as the west, so will the coming of the Son of man be.</p>
	                		<cite> ~ &lpar;Matthew 24&colon;27&rpar;</cite>
	                		</blockquote>
	                	</div><!--end of landingR-->	
	                	</div> <!--end of col-xs-12 col-md-5 col-md-offset-1 vcenter-->	
	                	</div><!--end of row-fluid-->
	                	<!--scroll arrow-->	               
						<a href = "#about"><i class = "fa fa-arrow-down fa-2x fade-in" aria-hidden = "true"></i></a>	
						<!--end of scroll arrow-->             	           	
	            	</div><!--end of Landing"-->
	            <!--beginning of #About-->
	<div id = "about" class = "container-fluid"> <!--Who we are section -->
	<nav class="breadcrumb">
	  <a class="breadcrumb-item" href="#">Home / </a>
	  <a class="breadcrumb-item active" href="#about">Who / </a>
	  <a class="breadcrumb-item" href="#what">What / </a>
	  <a class="breadcrumb-item" href="#mission">Mission / </a>
	  <a class="breadcrumb-item" href = "#contact">Contact / </a>
	  <a class="breadcrumb-item" href = #gallery>Gallery</a>
	</nav>
		<h1 class = "text-center">Who We Are</h1>
		<div class = "row-fluid ">
			<div class = "col-md-12">
				<img src = "../images/SteveRose-216x300.jpg" class = "img-responsive pullR gapL" alt = "Steve and Rose Moore" />
				<p>We are Steve and Rose Moore together we form the ministry outreach of Lightning Road.  Steve is licensed and ordained through Heritage of Faith Ministerial Association, for Jerry Savelle Ministries International &lpar;JSMI&rpar; located in Crowley, Texas.  Steve and Rose are both licensed through <a href = "http://treeoflifechurch.org" target = "_blank">Tree of Life Church</a> to facilitate entry into area jails and detention centers.</p>
					<div class = "verse pullL gapR"><!--the following divs style the verse-->
					<div class = "innerBox center-block">
					<div class = "vtext">
					<h5 class = "center-block">Beloved, I pray that all may go well with you and that you may be in good health, as it goes well with your soul.<cite>~&lpar;3 John 1&colon;2&rpar;</cite></h5>
					</div><!--end of vtext-->
					</div><!--end of inner box-->
					</div> <!--end of verse center-block & verse styling-->
				<p>As members of <a href = "http://www.chariotsoflight.com/" target = "_blank">Chariots of Light Christian Bikers</a>, we co-labor as partners and a parallel ministry to COL and <a href = "http://www.jerrysavelle.org/" target = "_blank">Jerry Savelle Ministries International</a> participating in the biggest soul-winning outreach in the country.</p>
				<p>We have the unique opportunity to utilize a special ministry tool – our motorcycles. We have seen many breakthroughs in offenders who had been previously unapproachable. The biker culture immediately breaks down the barriers that stop effective ministry from operating behind these walls.</p>					
			</div>			
			</div><!--end of row -->
	</div><!--end of #About-->
	<div id = "what" class = "container-fluid"> <!--What We Do section -->
	<!--breadcrumbs-->
	<nav class="breadcrumb">
	  <a class="breadcrumb-item" href="#">Home / </a>
	  <a class="breadcrumb-item" href="#about">Who / </a>
	  <a class="breadcrumb-item active" href="#what">What / </a>
	  <a class="breadcrumb-item" href="#mission">Mission / </a>
	  <a class="breadcrumb-item" href = "#contact">Contact / </a>
	  <a class="breadcrumb-item" href = #gallery>Gallery</a>
	</nav>
		<h1 class = "text-center">What We Do</h1>
		<h3 class = "text-center">When there are so many behind prison doors - VISIT, TEACH, TRAIN, EXHORT</h3>
			<div class = "row-fluid">
				<div class = "col-md-12">
					<img src = "../images/thumbnails/Day-of-Champions_HCJCTHUMB.jpg" class = "img-responsive pullL gapR" alt = "Day of Champions">
						<p>We mentor both male and female youth offenders 10-17 years of age at the Hays County Juvenile Center in San Marcos, Texas.  We are involved with a youth mentoring program called <a href = "http://www.ringofchampions.net/" target = "_blank">Ring of Champions</a>.  The mentoring encounter is gender specific meeting weekly with several time slots to facilitate the large number of offenders who desire a mentor. The time and availability is dependant on each unit. The extent of the program is dependant ONLY on the number of people who desire to establish one in their local communities nationwide.  Prayerfully we strive for it to be a life-changing one-on-one encounter of finding faith and a life value system.</p>
				</div> <!--end of col-md-9... -->
			</div><!--end of row-->
			<div class = "row-fluid">
				
				<div class = "col-md-12 clearfix text-center">
					<a href = "#contact">
						<h2 class = "cta center-block">Be a mentor.</h2><h3 class = "cta center-block">Do what Jesus commanded us to do.</h3></a>
						<hr>
				</div>		<!--col-md-12 clearfix text-center-->		
			</div>  <!--end of row-fluid-->
			<div class = "row-fluid">
				<div class = "col-md-12 clearfix">						
					<div class = "hcenter verse pullR gapR"><!--the following divs style the verse-->
					<div class = "innerBox center-block">
					<div class = "vtext">
					<h5 class = "center-block">You are empowered to prosper in everything you put your hands to according to the Word of God.<cite>~&lpar;2 Peter 1&colon;3&dash;4&rpar;</cite></h5>						
					</div><!--end of vtext-->
					</div><!--end of inner box-->
					</div> <!--end of verse center-block & verse styling-->
				<div id = "outreach" class = "pullL">					
					<h3 class = "text-center">Our areas of outreach available in Texas.</h3>
					<ul>
						<li>Federal Correctional Institutes</li>
						<li>Texas Department of Criminal Justice</li>
						<li>County Jail Systems</li>
						<li>Texas Juvenile Justice Department</li>
						<li>County Juvenile Boot Camps</li>
					</ul>
				</div>
				</div>
			</div>			
			<div class = "row-fluid">	<!--Carousel Info-->			
					<div class = "col-md-12">
					<div class="clearfix visible-xs-block clearfix visible-sm-block"></div>	
						<div id="carousel-systems" class="carousel slide center-block well" data-ride="carousel" data-interval="false">
						<h3 class = "text-center">Details of current outreaches </h3>	
						<div class = "carousel-inner" role = "listbox">
							<div class = "item active">
							<h5>Outreach Systems Information</h5>
							<p class = "text-justify">Each system both Federal and County, youth or adult, has a summary of information within this carousel for you to read if you have an interest. <span class = "text-uppercase"><strong>Scroll</strong></span> through the slides of information with the control circles below. Feel free to <a hef = "#contact">contact us </a>if we can offer you more information on how you can "Show Up" and get involved.</p>
						</div>
								<div class = "item">
								<h5>Federal Systems</h5>
								<p class = "text-justify">We are ONLY allowed to enter the federal system as visitors on an offenders approved visitors list. Federal law requires that all faiths be tolerated. Unit chaplains are unable to accommodate the requests of anyone who desires to volunteer for chaplain services for any faith. As a result, no visitor may carry a Bible, Koran, Torah, etc. No personal items may be on your person, including caps, studded clothing or any item that could be considered a weapon. Individuals are thoroughly searched, and electronically drug screened. We pray that the roadblocks to witnessing in the federal system will be taken down by prayer, obedience, and the will of God.</p>
							</div>
							<div class = "item">
							<h5>TDCJ - Texas Dept of Corrections</h5>
								<p class = "text-justify">TDCJ requirements are less restrictive. Perspective volunteers must apply through the Rehabilitation &amp; Reentry Programs Division in Huntsville, Texas. Applications can be downloaded here&semi; <a href = "https://www.tdcj.state.tx.us/php/volunteer_application/" target = "_blank">Volunteer Application for the TDCJ</a>. The application is considered after a background check is run. The volunteer candidate is sent a letter with approval to proceed. Initial training MUST be completed at any unit listed in the letter before being placed on the approved master list in the individual unit requested for volunteer service. Individuals typically work through a church or faith-based organization such as Kairos.</p>
								<p class = "text-justify">County jail systems are run individually through the sheriff and the jail administrator. Background checks may be ordered or ministry credentials requested to authenticate individuals who desire to volunteer at chapel services or Bible studies. Be advised that each jail can operate completely different from one another due to local government. NOTE: Do not be discouraged by individuals who are not “friendly” with “faith-based” volunteers. Your strength, commitment, and perseverance in serving God will overcome the most stubborn obstacles.</p>
							</div>
							<div class = "item">
							<h5>Texas Juvenile Justice Dept</h5>
								<p class = "text-justify">Texas Juvenile Justice Department has undergone MAJOR changes in administration from it’s former organization, Texas Youth Commission. Volunteers must follow similar procedures to TDCJ to enable them to volunteer at the local units.</p> 
								<p class = "text-justify">County Juvenile Boot Camps are similar to the county jail system. The requirements are normally less stringent. The administrators are typically the Chief Probation Officer in that county. We have found extreme favor locally in our mentoring initiative.</p>
							</div>		
							<!--indicators-->
						<ol class="carousel-indicators">
        					<li data-target="#carousel-systems" data-slide-to="0" class="active"></li>
        					<li data-target="#carousel-systems" data-slide-to="1"></li>
        					<li data-target="#carousel-systems" data-slide-to="2"></li>
        					<li data-target="#carousel-systems" data-slide-to="3"></li>
    					</ol>	
						</div><!--end of carousel inner -->	
					</div><!--end of carousel systems -->
				</div><!--end of col-md-12-->
			</div><!--end of row-->
			<div class = "row-fluid">				
				<div class = "col-md-11 col-md-offset-1">
					<img src = "../images/thumbnails/Day-of-Champions_HCJCTHUMB.jpg" class = "img-responsive pullR gap-left hidden-sm hidden-xs" alt = "Day of Champions">
				</div>
			</div><!--end of row-->			
		</div><!--end of #What section-->
		
		<div id = "mission" class = "container-fluid"> <!--Mission section -->
		<!--breadcrumbs-->
		<nav class="breadcrumb">
		  <a class="breadcrumb-item" href="#">Home / </a>
		  <a class="breadcrumb-item" href="#about">Who / </a>
		  <a class="breadcrumb-item" href="#what">What / </a>
		  <a class="breadcrumb-item active" href="#mission">Mission / </a>
		  <a class="breadcrumb-item" href = "#contact">Contact / </a>
		  <a class="breadcrumb-item" href = #gallery>Gallery</a>
		</nav>
			<h1 class = "text-center">Mission Statement</h1>
			<div class = "row-fluid">
				<div class = "col-xs-12">
					<img src = "../images/thumbnails/Day-of-Champions_HCJCTHUMB.jpg" class = "img-responsive pullL gapR" alt = "Day of Champions">
						<div class = "statement clearfix">
						<p class = "text-left">SPREADING the gospel of Jesus Christ through itinerant evangelism primarily but not limited to, by motorcycle.</p> 
						<p class = "text-left">REACHING OUT to the biker world through tours, rallies, organized rides, meetings, services, etc: using printed, audio, video, Internet, and other media sources to disseminate information.</p>
						<p class = "text-left">REACHING BEYOND the mainstream and into the outlaw biker population and to the local, state, and federal prison systems (youth/adult/male/female) to counsel and mentor offenders.</p>
						<p class = "text-left">REACHING INTO the inter-city street culture to encourage the lost and bring hope to the hopeless. </p>
						<p class = "text-left">WITNESSING to ANYONE desiring spiritual guidance through the Word of God, living example, and preaching.</p>
							<div class = "verse pullR gapL"><!--the following divs style the verse-->
							<div class = "innerBox center-block">
							<div class = "vtext">
							<h5 class = "center-block">We endeavor to reach out to anyone who is hurting in a lost and desperate world.<cite>~(Phil 2&colon;15)</cite></h5>
							</div><!--end of vtext-->
							</div><!--end of inner box-->
							</div> <!--end of verse center-block & verse styling-->
						<p class = "text-left">ANSWERING the call to teach the LIVING WORD of GOD through the leading of the HOLY SPIRIT anywhere along the road.</p>
						<p class = "text-left">WE BELIEVE this ministry has been founded and ordained on the WORD of GOD according to&colon; Matthew 24&colon;27 which says… &quot;As the lightning flashes in the east, and is seen as far as the west, so will the coming of the Son of man be.&quot;</p>
						</div>								
					</div>					
			</div><!--end of row -->							
		</div><!--end of mission section-->
@endsection

@include('partials.contact')	

@section('content1') 	
	<div id = "gallery" class = "container-fluid"> <!--gallery section -->	
	<nav class="breadcrumb">
	  <a class="breadcrumb-item" href="#">Home / </a>
	  <a class="breadcrumb-item" href="#about">Who / </a>
	  <a class="breadcrumb-item" href="#what">What / </a>
	  <a class="breadcrumb-item" href="#mission">Mission / </a>
	  <a class="breadcrumb-item" href = "#contact">Contact / </a>
	  <a class="breadcrumb-item active" href = #gallery>Gallery</a>
	</nav>
		<div class = "row-fluid">
			<div class="col-lg-12">
                <div class = "verse pullL gapR"><!--the following divs style the verse-->
                <div class = "innerBox center-block">
				<div class = "vtext">
				<h5 class = "center-block">Discover the tools available to chase the darkness out of this present day.<cite>~&lpar;Ephesians 6&colon;11&dash;18&rpar;</cite></h5>
				</div><!--end of vtext-->
				</div><!--end of innerbox-->
				</div><!--end of verse & verse styling-->
					<h1 class="text-center clearfix">Our Journey So Far</h1>
            </div><!--end of col-lg-12-->
            </div><!--end of row-->

            <div class = "row-fluid hcenter">            
	            	<div class="col-lg-3 col-md-4">
		                <a class = "gImage" title = "Day of Champions" href = "" data-image-id="" data-toggle = "modal" data-title = "Lightning Road Biker Outreach" data-caption = "Ring of Champions" data-image = "../images/fullsize/DayofChampions_HCJC.jpg" data-target = "#image-gallery">
		                    <img class="thumb img-responsive center-block" src="../images/thumbnails/Day-of-Champions_HCJCTHUMB.jpg" alt="Day of Champions">
		                </a> 
		            </div>
			               
	            <div class="col-lg-3 col-md-4">
		                <a class = "gImage" title = "Day of Champions1" href = "" data-image-id="" data-toggle = "modal" data-title = "Lightning Road Biker Outreach" data-caption = "Ring of Champions1" data-image = "../images/fullsize/DayofChampions_HCJC.jpg" data-target = "#image-gallery">
		                    <img class="thumb img-responsive center-block" src="../images/thumbnails/Day-of-Champions_HCJCTHUMB.jpg" alt="Day of Champions">
		                </a> 
		            </div>
	            <div class="col-lg-3 col-md-4">
		                <a class = "gImage" title = "Day of Champions2" href = "" data-image-id="" data-toggle = "modal" data-title = "Lightning Road Biker Outreach" data-caption = "Ring of Champions2" data-image = "../images/fullsize/DayofChampions_HCJC.jpg" data-target = "#image-gallery">
		                    <img class="thumb img-responsive center-block" src="../images/thumbnails/Day-of-Champions_HCJCTHUMB.jpg" alt="Day of Champions">
		                </a> 
		            </div>
	            	<div class="col-lg-3 col-md-4">
		                <a class = "gImage" title = "Day of Champions3" href = "" data-image-id="" data-toggle = "modal" data-title = "Lightning Road Biker Outreach" data-caption = "Ring of Champions3" data-image = "../images/fullsize/DayofChampions_HCJC.jpg" data-target = "#image-gallery">
		                    <img class="thumb img-responsive center-block" src="../images/thumbnails/Day-of-Champions_HCJCTHUMB.jpg" alt="Day of Champions">
		                </a> 
		            </div>
	            	<div class="col-lg-3 col-md-4">
		                <a class = "gImage" title = "Day of Champions4" href = "" data-image-id="" data-toggle = "modal" data-title = "Lightning Road Biker Outreach" data-caption = "Ring of Champions4" data-image = "../images/fullsize/DayofChampions_HCJC.jpg" data-target = "#image-gallery">
		                    <img class="thumb img-responsive center-block" src="../images/thumbnails/Day-of-Champions_HCJCTHUMB.jpg" alt="Day of Champions">
		                </a> 
		            </div>
	            	<div class="col-lg-3 col-md-4">
		                <a class = "gImage" title = "Day of Champions5" href = "" data-image-id="" data-toggle = "modal" data-title = "Lightning Road Biker Outreach" data-caption = "Ring of Champions5" data-image = "../images/fullsize/DayofChampions_HCJC.jpg" data-target = "#image-gallery">
		                    <img class="thumb img-responsive center-block" src="../images/thumbnails/Day-of-Champions_HCJCTHUMB.jpg" alt="Day of Champions">
		                </a> 
		            </div>
		            <div class="col-lg-3 col-md-4">
		                <a class = "gImage" title = "Day of Champions6" href = "" data-image-id="" data-toggle = "modal" data-title = "Lightning Road Biker Outreach" data-caption = "Ring of Champions6" data-image = "../images/fullsize/DayofChampions_HCJC.jpg" data-target = "#image-gallery">
		                    <img class="thumb img-responsive center-block" src="../images/thumbnails/Day-of-Champions_HCJCTHUMB.jpg" alt="Day of Champions">
		                </a> 
		            </div>
	            	<div class="col-lg-3 col-md-4">
		                <a class = "gImage" title = "Day of Champions7" href = "" data-image-id="" data-toggle = "modal" data-title = "Lightning Road Biker Outreach" data-caption = "Ring of Champions7" data-image = "../images/fullsize/DayofChampions_HCJC.jpg" data-target = "#image-gallery">
		                    <img class="thumb img-responsive center-block" src="../images/thumbnails/Day-of-Champions_HCJCTHUMB.jpg" alt="Day of Champions">
		                </a> 
		            </div>
	        </div><!--end of row-fluid-->  
         <!--modal for lightbox-->
         <div class="modal fade" id="image-gallery" tabindex="-1" role="dialog"  aria-hidden="true">
    		<div class="modal-dialog">
        		<div class="modal-content">
            		<div class="modal-header">
		                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
		                <h4 class="modal-title" id="image-gallery-title"></h4>
            		</div><!--end modal header-->
		            <div class="modal-body">
		                <img id="image-gallery-image" class="img-responsive" src="">
		            </div>
		            <div class="modal-footer  center-block">
		                <div class="col-xs-3 col-md-4 col-lg-3">		               
		                    <button type="button" class="btn btn-primary  btn-responsive pull-left" id="show-previous-image">Back</button>
		                </div>
		                <div class="col-xs-6 col-md-5 col-lg-6 center-block text-center" id="image-gallery-caption">
		                    This text will be overwritten by jQuery
		                </div>
		                <div class="col-xs-3 col-md-3 col-lg-2 pull-right">
		                    <button type="button" id="show-next-image" class="btn btn-default btn-responsive ">Next</button>
		                </div>

            		</div><!--end modal footer-->
        		</div><!--end modal header-->
    		</div><!--end modal dialog-->
		</div>
		<!--end of modal code-->

            <div class = "row-fluid">
	            <div class = "col-lg-12"> 	            
					<img src ="../images/logos/textLogo.png" class = "img-responsive pullL" alt = "Lightning Road Biker Outreach" /> 
            <div class = "verse pullR center-block hidden-xs hidden-sm"><!--the following divs style the verse-->
            <div class = "innerBox center-block">
			<div class = "vtext">
			<h5 class = "center-block">Show up and be counted as faithful to the cause of changing hearts, young and old.<cite>~&lpar;John 20&colon;21, Acts 1&colon;8&rpar;</cite></h5>
			</div><!--end of vtext-->
			</div><!--end of inner box-->
			</div> <!--end of verse center-block & verse styling-->
			</div><!--end of vwrapper-->
			</div><!--row-fluid--> 			    
        </div><!--end of container-->
       
       	
        	<div id = "information" class="container-fluid"><!--footer-->
           		<div class = "row-fluid"> 
           			<div class="navbar">
	                <ul class="nav navbar-nav">
	                
	                    <li class = "col-xs-4 col-md-2 text-center"><a href="#landing">Back To Top</a></li>
	                
	                
	                    <li class = "col-xs-4 col-md-2 text-center"><a href="#about">About Us</a></li>
	                    
	                    <li class = "col-xs-4 col-md-2 text-center"><a href="#what">What We Do</a></li>
	                    
	                    <li class = "col-xs-4 col-md-2 text-center"><a href="#mission">Mission Statement</a></li>
	                    
	                    <li class = "col-xs-4 col-md-2 text-center"><a href="#contact">Request Information</a></li>
	                    
	                    <li class = "col-xs-4 col-md-2 text-center"><a href="#gallery">Our Journey</a></li>  	                   
	                	</ul>            	
       		 		</div><!--end navbar-->
       		 	</div><!--end row-fluid-->
       		 	<div class = "row-fluid">
       		 	<div class = "col-md-4 center-block">				
					<img src = "../images/logos/alphaLogoThumb.svg" class = "pullL .img-responsive" alt = "Lightning Road Biker Outreach Alpha Omega Logo">
				</div>				
				<div class = "col-md-4">
						<p class = "text-center">DOWNLOADS</p>
						<p class = "text-center"><a href = "https://www.tdcj.state.tx.us/php/volunteer_application/" target = "_blank">Volunteer Application for the TDCJ</a></p>
						<p class = "text-center"><a href = "http://www.ringofchampions.net/" target = "_blank">Ring of Champions</a></p>
				</div>				
				<div class = "col-md-4 center-block">										
						<a href = "https://www.facebook.com/sozosam/" target = "_blank"><i class="fa fa-5x fa-facebook center-icon pullR text-center" aria-hidden="true"></i></a>
				</div>
			</div><!--end row fluid-->
			<div class = "row-fluid">	
			<div class = "credits">
					<div class = "col-md-6">
						<p class = "text-muted">Site by&colon; <a href = "http://lightpointdev.com" target = '_blank'">LightPoint Development</a></p>
					</div>
				
					<div class = "col-md-6">
						<p class = "text-muted pullR">&commat;2016 <a href = "#landing">Lightning Road Biker Outreach</a>, All Rights Reserved</p>
					</div><!--end of col-md-6-->
				</div><!--end of credits-->	
				</div><!--end of row-fluid-->
							
			</div><!--end of footer-->

				






    	</div><!--end #information-->





    	
		

		
		  
		    

		    
    
		
				
					
					
						

    			
    		
		



	            
        		

















 @endsection <!--end of content1-->