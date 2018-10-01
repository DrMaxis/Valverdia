
<!--
  @WeatherTeam 2018
  @StudioUnwanted 2018
  Unwanted.kr
-->

<html class="no-js" lang="{{ app()->getLocale() }}">


@include('inc.head')


    <body>
<!--/-/-/-/-/-/-/-/-/
    Begin UI-Container  
-/-/-/-/-/-/-/-/-/-->
        <div class="ui-container"> 
            
        @include('partials.preloader')
        @include('partials.newsPopup')
        @include('inc.header')
        @yield('content')









	
@include('inc.footer')
</div>
<!--/-/-/-/-/-/-/-/-/
    End UI-Container  
-/-/-/-/-/-/-/-/-/-->
    













<!--/-/-/-/-/-/-/-/-/
    Begin JAVASCRIPT  
-/-/-/-/-/-/-/-/-/-->


<!--/-/-/-/-/-/-/-/-/ 
    jquery 1.12.4 
-/-/-/-/-/-/-/-/-/-->
<script type="text/javascript" src="{{asset('js/vendor/jquery.js')}}"></script>


<!--/-/-/-/-/-/-/-/-/ 
    Mobile Menu  
-/-/-/-/-/-/-/-/-/-->
<script src="{{asset('js/jquery.meanmenu.min.js')}}"></script>
<!--/-/-/-/-/-/-/-/-/ 
    Scroll to Top
-/-/-/-/-/-/-/-/-/-->
<script src="{{asset('js/jquery.scrollUp.js')}}"></script>
<!--/-/-/-/-/-/-/-/-/ 
    Owl Carousel
-/-/-/-/-/-/-/-/-/-->
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<!--/-/-/-/-/-/-/-/-/ 
    W0W 
-/-/-/-/-/-/-/-/-/-->
<script src="{{asset('js/wow.min.js')}}"></script>
<!--/-/-/-/-/-/-/-/-/ 
    Price Slider
-/-/-/-/-/-/-/-/-/-->
<script src="{{asset('js/priceslider.js')}}"></script>
<!--/-/-/-/-/-/-/-/-/ 
    Elevated Zoom
-/-/-/-/-/-/-/-/-/-->
<script src="{{asset('js/jquery.elevateZoom-3.0.8.min.js')}}"></script>
<!--/-/-/-/-/-/-/-/-/ 
    Slider
-/-/-/-/-/-/-/-/-/-->
<script src="{{asset('js/jquery.nivo.slider.js')}}"></script>
<!--/-/-/-/-/-/-/-/-/ 
    BootStrap
-/-/-/-/-/-/-/-/-/-->
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<!--/-/-/-/-/-/-/-/-/ 
    Extendable Plugins
-/-/-/-/-/-/-/-/-/-->
<script src="{{asset('js/plugins.js')}}"></script>
<!--/-/-/-/-/-/-/-/-/ 
    Main
-/-/-/-/-/-/-/-/-/-->
<script src="{{asset('js/main.js')}}"></script>



<!--/-/-/-/-/-/-/-/-/
    END JAVASCRIPT  
-/-/-/-/-/-/-/-/-/-->



	</body>