
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


  <!-- 
        END STYLE DEPENDANTS

-->
	

    <title>{{config('app.name', 'Valverdia')}}</title>

	</head>
    <body>
        @include('inc.navbar')









	@yield('content')














<!--

	START JAVASCRIPT DEPENDANTS

-->

<script language="JavaScript" type="text/javascript" src="{{asset('js/inc/js/jquery.js')}}"></script>
<script language="JavaScript" type="text/javascript" src="{{asset('layouts/js/ui-main.js')}}"></script>

<!--

	END JAVASCRIPT DEPENDANTS


-->



	</body>