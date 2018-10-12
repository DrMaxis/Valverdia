
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
        <div class="wrapper"> 
            
        @include('partials.preloader')
        @include('inc.header')
        @yield('content')









	
@include('inc.footer')
@include('inc.led_quickview')
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





<script>

        $( document ).ready(function($) {
function changeColor(selector, colors, time) {
/* Params:
 * selector: string,
 * colors: array of color strings,
 * every: integer (in mili-seconds)
 */
var curCol = 0,
    timer = setInterval(function () {
        if (curCol === colors.length) curCol = 0;
        $(selector).css("background-color", colors[curCol]);
        curCol++;
    }, time);
}
$(window).load(function () {
changeColor(".rgb", ["green", "yellow", "blue", "red", "purple", "cyan", "violet"], 1500);
});



var imageWidth = 100;

$(".video-thumbs").width($(".vidImage").length*imageWidth);
  
});
        </script>



<script>
        (function(){
   // Create a Stripe client.
   var stripe = Stripe('pk_test_TYooMQauvdEDq54NiTphI7jx');
   
   // Create an instance of Elements.
   var elements = stripe.elements();
   
   // Custom styling can be passed to options when creating an Element.
   // (Note that this demo uses a wider set of styles than the guide below.)
   var style = {
     base: {
       color: '#32325d',
       lineHeight: '18px',
       fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
       fontSmoothing: 'antialiased',
       fontSize: '16px',
       '::placeholder': {
         color: '#aab7c4'
       }
     },
     invalid: {
       color: '#fa755a',
       iconColor: '#fa755a'
     }
   };
   
   // Create an instance of the card Element.
   var card = elements.create('card', {
       style: style,
       hidePostalCode: true
    });
   
   // Add an instance of the card Element into the `card-element` <div>.
   card.mount('#card-element');
   
   // Handle real-time validation errors from the card Element.
   card.addEventListener('change', function(event) {
     var displayError = document.getElementById('card-errors');
     if (event.error) {
       displayError.textContent = event.error.message;
     } else {
       displayError.textContent = '';
     }
   });
   
   // Handle form submission.
   var form = document.getElementById('payment-form');
   form.addEventListener('submit', function(event) {
     event.preventDefault();

     var options = {
                name: document.getElementById('name_on_card').value,
                address_line1: document.getElementById('address').value,
                address_city: document.getElementById('city').value,
                address_state: document.getElementById('state').value,
                address_zip: document.getElementById('zip').value
              }

     stripe.createToken(card, options).then(function(result) {
       if (result.error) {
         // Inform the user if there was an error.
         var errorElement = document.getElementById('card-errors');
         errorElement.textContent = result.error.message;
       } else {
         // Send the token to your server.
         stripeTokenHandler(result.token);
       }
     });
   });

   function stripeTokenHandler(token) {
              // Insert the token ID into the form so it gets submitted to the server
              var form = document.getElementById('payment-form');
              var hiddenInput = document.createElement('input');
              hiddenInput.setAttribute('type', 'hidden');
              hiddenInput.setAttribute('name', 'stripeToken');
              hiddenInput.setAttribute('value', token.id);
              form.appendChild(hiddenInput);

              // Submit the form
              form.submit();
            }


   })();
   </script>

<!--/-/-/-/-/-/-/-/-/
    END JAVASCRIPT  
-/-/-/-/-/-/-/-/-/-->



    </body>
</html>