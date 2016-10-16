<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!--Set Viewport for Responsiveness-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <meta name="robots" CONTENT="NOINDEX, NOFOLLOW">
        <meta name = "author" content = "Jana Nash-Siegle">        
        <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" type="image/png">
        <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/png">
        
        <!-- Customized stylesheet from SASS -->
        <link href="{{ asset('css/beApp.css') }}" rel="stylesheet" type="text/css" >
        <!--Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Quicksand:400,700" rel="stylesheet">  
        <!--Necessary shims-->
        <!--[if lt IE 9]>
        <script async src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js">
        <script async src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script></script>
        <![endif]-->              
    </head>
    <body>

@yield('content')





    <!-- jQuery -->    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" async="async" defer = "defer"> </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js" async="async" defer = "defer"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.5/validator.min.js" integrity="sha256-IxYUmOOk74FUrcx5FEMOHVmTJDb7ZAwnC/ivo/OQGxg=" crossorigin="anonymous" async="async" defer = "defer"></script>
    <!--Font Awesome CDN-->
    {{-- <script src="https://use.fontawesome.com/fe25733dc5.js" async="async" defer = "defer"></script> --}}
    <script type = "text/javascript" src = "{{ asset('js/all.min.js')  }}" async="async" defer = "defer"></script>    


