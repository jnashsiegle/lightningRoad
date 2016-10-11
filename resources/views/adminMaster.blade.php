<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!--Set Viewport for Responsiveness-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <META NAME="robots" CONTENT="NOINDEX, NOFOLLOW">
        <meta name = "author" content = "Jana Nash-Siegle">        
        <link rel="shortcut icon" href="../images/logos/favicon.ico" type="image/x-icon">
        <link rel="icon" href="../images/logos/alpha_icon.ico" type="image/png">
        
        <!-- Customized stylesheet from SASS -->
        <link async href="{{ asset('css/beApp.css') }}" rel="stylesheet" type="text/css" >
        <!--Google Fonts -->
        <link async href="https://fonts.googleapis.com/css?family=Quicksand:400,700" rel="stylesheet">  
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





    <!-- jQuery -->    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdn.jsdelivr.net/bootstrap/3.3.6/js/bootstrap.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.5/validator.min.js" integrity="sha256-IxYUmOOk74FUrcx5FEMOHVmTJDb7ZAwnC/ivo/OQGxg=" crossorigin="anonymous"></script>
    <!--Font Awesome CDN-->
    <script src="https://use.fontawesome.com/fe25733dc5.js"></script>
    <script type = "text/javascript" src = "{{ asset('js/myOther.js')  }}"></script>    


