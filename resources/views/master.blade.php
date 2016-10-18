<!DOCTYPE html>
<html lang = "en">
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
        <link rel="canonical" href="http://lightningroadfp.tech/">
        <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" type="image/png">
        <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/png">
        <!-- Customized stylesheet from SASS -->
        <link href="{{ asset('css/app.min.css/app.min.css') }}" rel="stylesheet" type="text/css" media="screen">
        <!--Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Quicksand:400,700" rel="stylesheet" type = "text/css" media="screen">
        <!--Necessary shims-->
        <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js">
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script></script>
        <![endif]-->              
    </head>
    <body>
    <main>

@yield('content')
@yield('contact')
@yield('content1')

    <!-- jQuery -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" async="async" defer = "defer"></script>
    <script src = "https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js" async="async" defer = "defer"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.5/validator.min.js" integrity="sha256-IxYUmOOk74FUrcx5FEMOHVmTJDb7ZAwnC/ivo/OQGxg=" crossorigin="anonymous" async="async" defer = "defer"></script>
    <script type = "text/javascript" src = "{{ asset('/js/arrow.min.js') }}"></script>
    <script type = "text/javascript" src = "{{ asset('/js/all.min.js')  }}" async = "async" defer = "defer"></script>  
    </main>
    </body>
</html>
