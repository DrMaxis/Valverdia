<!--
  @WeatherTeam 2018
  @StudioUnwanted 2018
  Unwanted.kr
-->

<html class="no-js" lang="{{ app()->getLocale() }}">
    @include('inc.head') @yield('xcss')

<body>
    <section class="vbox">


        <!--/-/-/-/-/-/-/-/-/
    Begin UI-Container  
-/-/-/-/-/-/-/-/-/-->
        {{--
        <div class="wrapper"> --}}
    @include('partials.preloader')
    @include('inc.header')
            <section>
                <section class="hbox stretch">

                    <section id="content">
                        <section class="hbox stretch">
                            <section>
                                <section class="vbox">
                                    <section class="scrollable padder-lg w-f-md" id="bjax-target">
                                        <a href="#" class="pull-right text-muted m-t-lg" data-toggle="class:fa-spin"><i class="icon-refresh i-lg  inline" id="refresh"></i></a>
                                        <h2 class="font-thin m-b">Discover </h2>
                                        <div class="row row-sm">
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
 <script type="text/javascript" src="{{asset('js/jquery.meanmenu.min.js')}}"></script>
  <!--/-/-/-/-/-/-/-/-/ 
    Scroll to Top
-/-/-/-/-/-/-/-/-/-->
 <script type="text/javascript" src="{{asset('js/jquery.scrollUp.js')}}"></script>
 <!--/-/-/-/-/-/-/-/-/ 
    Owl Carousel
-/-/-/-/-/-/-/-/-/-->
<script type="text/javascript" src="{{asset('js/owl.carousel.min.js')}}"></script>
<!--/-/-/-/-/-/-/-/-/ 
    W0W 
-/-/-/-/-/-/-/-/-/-->
 <script type="text/javascript" src="{{asset('js/wow.min.js')}}"></script>
<!--/-/-/-/-/-/-/-/-/ 
    Price Slider
-/-/-/-/-/-/-/-/-/-->
<script type="text/javascript" src="{{asset('js/jquery-ui.js')}}"></script>
<!--/-/-/-/-/-/-/-/-/ 
    Elevated Zoom
-/-/-/-/-/-/-/-/-/-->
<script type="text/javascript" src="{{asset('js/jquery.elevateZoom-3.0.8.min.js')}}"></script>
<!--/-/-/-/-/-/-/-/-/ 
    Slider
-/-/-/-/-/-/-/-/-/-->
<script type="text/javascript" src="{{asset('js/jquery.nivo.slider.js')}}"></script>
 <!--/-/-/-/-/-/-/-/-/ 
    BootStrap
-/-/-/-/-/-/-/-/-/-->
<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
<!--/-/-/-/-/-/-/-/-/ 
    Extendable Plugins
-/-/-/-/-/-/-/-/-/-->
 <script type="text/javascript" src="{{asset('js/plugins.js')}}"></script>
 <!--/-/-/-/-/-/-/-/-/ 
    Main
-/-/-/-/-/-/-/-/-/-->
 <script type="text/javascript" src="{{asset('js/main.js')}}"></script>
<!--/-/-/-/-/-/-/-/-/ 
    Wave
-/-/-/-/-/-/-/-/-/-->
 <script type="text/javascript" src="{{asset('js/wave.js')}}"></script>





                                        @yield('xjs')


                                        <!--/-/-/-/-/-/-/-/-/
    END JAVASCRIPT  
-/-/-/-/-/-/-/-/-/-->


                                    </section>
                                </section>
                            </section>
                        </section>
                    </section>
                </section>
            </section>
</body>

</html>