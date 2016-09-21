<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!--Set Viewport for Responsiveness-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <meta name="description" content="Lightning Road exists because God called us to go where other ministries may not go to reach
        the lost and hurting– secular motorcycle rallies, crack houses,
        whore houses, back alleys, and dark places many won’t go.
        This biker outreach is standing alone as a ministry, but shoulder
        to shoulder with those that will “SHOW UP” for JESUS in
        the desperate far reaches of the darkness">
        <meta name="keywords" content="tdcj, texas inmate, texas offender, texas prison inmate, county jail, texas department of criminal justice, texas inmates, tdcj offender, texas department of corrections, tdcj website, texas juvenile justice department, county juvenile boot camps, texas youth
        commission, hays county detention center, texas mentoring, faith-based mentoring, motorcycle outreach, christian bikers, biker evangelism">
        <meta name = "author" content = "Jana Nash-Siegle">
        <link rel=”canonical” href=”http://lightningroadfp.tech” />
        <link rel="shortcut icon" href="../images/logos/favicon.ico" type="image/x-icon">
        <link rel="icon" href="../images/logos/favicon.ico" type="image/x-icon">
        <!--Font Awesome CDN-->
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
        <!-- Customized stylesheet from SASS -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" >
        <!--Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Quicksand:400,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Trade+Winds" rel="stylesheet"> 
        
        <!--Necessary shims-->
        <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js">
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script></script>
        <![endif]-->              
    </head>
    <body>
    <!--google analytics tracking  - MOVE TO MASTER BLADE TEMPLATE when developed -->
    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-83128316-1', 'auto');
  ga('require', 'linkid');
  ga('send', 'pageview');
</script>
 



@yield('content')
@yield('contact')
@yield('content1')




    <!-- jQuery -->
     <script src="https://code.jquery.com/jquery-3.1.0.min.js" integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script type = "text/javascript" src = "{{ asset('js/mLightbox.js') }}"></script> 
    <script type = "text/javascript" src = "{{ asset('js/myOther.js')  }}"></script>
    <script type = "text/javascript" src = "{{ asset('js/subjectCount.js') }}"></script>    
    
    
    
    
    
    
    </body>
</html>