<!--
  @WeatherTeam 2018
  @StudioUnwanted 2018
  Unwanted.kr
-->

<html class="no-js" lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <meta name="description" content="JJ International - Delivering Quality and Style around the globe." />
    <meta name="keywords" content="International Shipping, Wholesale, Drop Shipping, Furniture, Patio, Modern, Free Shipping"/>

<script language="JavaScript" type="text/javascript" src="{{asset('js/inc/jquery/modernizr.js')}}"></script>
<script language="JavaScript" type="text/javascript" src="{{asset('js/inc/jquery/pace.min.js')}}"></script>

    <!-- 
         START STYLE DEPENDANTS

-->

    <link rel="stylesheet" href="{{asset('layouts/css/ui.css')}}">
    <link rel="stylesheet" href="{{asset('css/inc/flexslider/flexslider.css')}}">
    <link rel="stylesheet" href="{{asset('css/inc/flexslider/font.css')}}">
    <link rel="stylesheet" href="{{asset('css/inc/hero/discover.css')}}">
    <link rel="stylesheet" href="{{asset('css/inc/bootstrap/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/inc/bootstrap/bootstrap-grid.css')}}">
    <link rel="stylesheet" href="{{asset('css/inc/bootstrap/bootstrap-reboot.css')}}">
    <link rel="stylesheet" href="{{asset('css/pages/landing/landing.css')}}">

    




    <!-- 
        END STYLE DEPENDANTS

-->


    <title>{{config('app.name', 'Valverdia')}}</title>

</head>


<body id="top">

    @include('partials.preloader')
    @include('inc.header')








    <section class="landing section scrollable padder-lg w-f-md">


        @yield('content')


    </section>











    <!--

	START JAVASCRIPT DEPENDANTS

-->
    <script language="JavaScript" type="text/javascript" src="{{asset('js/inc/animation/aos.js')}}"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

    <script language="JavaScript" type="text/javascript" src="{{asset('js/inc/jquery/jquery.waypoints.min.js')}}"></script>

    <script language="JavaScript" type="text/javascript" src="{{asset('layouts/js/ui-landing.js')}}"></script>
    <script language="JavaScript" type="text/javascript" src="{{asset('js/inc/bootstrap/bootstrap.js')}}"></script>
    <script language="JavaScript" type="text/javascript" src="{{asset('js/inc/bootstrap/bootstrap.bundle.js')}}"></script>
    @include('inc.landing.flexslider-footer')
    <!--

	END JAVASCRIPT DEPENDANTS


-->



</body>