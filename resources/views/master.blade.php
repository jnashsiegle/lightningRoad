<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!--Set Viewport for Responsiveness-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <meta name="description" content="Lightning Road Biker Outreach">
        <meta name = "author" content = "Jana Nash-Siegle">
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
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    
    
    
    
    
    </body>
</html>
