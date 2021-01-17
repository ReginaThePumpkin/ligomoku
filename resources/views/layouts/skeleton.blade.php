<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <!-- Title -->
        <title>Ligomoku | @yield('title')</title>
        <!-- Meta content -->
        <meta content="@yield('description-page')" name='description'>
        <meta content="Allegue" name="author" />
        <meta content='Gomoku online, Gomocup, IA, Play Gomoku online, ligomoku' name='keywords'>
        <meta content='width=device-width, initial-scale=1' name='viewport'>
        <meta property="og:title" content="@yield('titule-og')">
        <meta property="og:url" content="https://ligomoku.com">
        <meta property="og:type" content="website">
        <meta property="og:description" content="@yield('description-og')">
        <!--meta property="og:image" content="images/og.png"-->
        <meta property="og:site_name" content="Ligomoku - Play gomoku online">
        <meta name="twitter:card" content="@yield('description-tc')">
        <meta name="twitter:title" content="Ligomoku - Play gomoku online">
        <meta name="twitter:url" content="https://ligomoku.com">
        <meta name="twitter:description" content="@yield('description-td')">
        <!--meta name="twitter:image:src" content="https://omri.org.mx/images/og.png"-->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="canonical" href="https://ligomoku.com" />
        <!-- Favicon -->
        <link rel='shortcut icon' href="{{ asset('public/favicon.ico') }}"/>
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800" rel="stylesheet" media="print" onload="this.media='all'">
        <!-- Style Sheets -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
        <link href="{{asset('css/bootstrap.min.css')}}" rel='stylesheet'>
        <link href="{{asset('css/style.css')}}" rel='stylesheet'>
        <link href="{{asset('css/board.css')}}" rel='stylesheet'>

        <!-- FAVICON AND APPLE TOUCH -->
        <link rel="icon" href="{{asset('favicon.ico')}}" type="image/x-icon">
        <link rel='shortcut icon' href="{{asset('favicon.ico')}}"/>
        <link rel="apple-touch-icon" sizes="180x180" href="{{asset('favicon.ico')}}">

        <!-- BEGIN SCRIPTS -->
        <script language="JavaScript" type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}" defer></script>
        
    </head>
    <body>
    	@yield('content')
    </body>
</html>