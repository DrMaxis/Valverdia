
<!--
  @WeatherTeam 2018
  @StudioUnwanted 2018
  Unwanted.kr
-->

<html lang="{{ app()->getLocale() }}">

<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"/>
	<meta name="description" content="JJ International - Delivering Quality and Style around the globe." />
    <meta name="keywords" content="International Shipping, Wholesale, Drop Shipping, Furniture, Patio, Modern, Free Shipping" />
	
	

   <!-- 
         START STYLE DEPENDANTS

-->
	
<link rel="stylesheet" href="{{asset('layouts/css/ui.css')}}">
<link rel="stylesheet" href="{{asset('css/inc/bootstrap/bootstrap.css')}}">
<link rel="stylesheet" href="{{asset('css/inc/bootstrap/bootstrap-grid.css')}}">
<link rel="stylesheet" href="{{asset('css/inc/bootstrap/bootstrap-bundle.css')}}">



  <!-- 
        END STYLE DEPENDANTS

-->
	

    <title>{{config('app.name', 'Valverdia')}}</title>

	</head>
    <body>
        @include('partials.preloader')
        @include('inc.header')









	@yield('content')














<!--

	START JAVASCRIPT DEPENDANTS

-->

<script language="JavaScript" type="text/javascript" src="{{asset('js/inc/jquery/jquery333.js')}}"></script>
{{-- <script language="JavaScript" type="text/javascript" src="{{asset('layouts/js/ui-main.js')}}"></script> --}}
<script language="JavaScript" type="text/javascript" src="{{asset('js/inc/animation/aos.js')}}"></script>
<script language="JavaScript" type="text/javascript" src="{{asset('js/inc/bootstrap/bootstrap.js')}}"></script>
<script language="JavaScript" type="text/javascript" src="{{asset('js/inc/bootstrap/bootstrap.bundle.js')}}"></script>
<script language="JavaScript" type="text/javascript" src="{{asset('js/inc/bootstrap/ui-main.js')}}"></script>
<script language="JavaScript" type="text/javascript" src="{{asset('layouts/inc/plugins.js')}}"></script>

<!--

	END JAVASCRIPT DEPENDANTS


-->



	</body>