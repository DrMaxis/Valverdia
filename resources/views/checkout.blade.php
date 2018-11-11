@extends('layouts.products_ui') 
@section('extra-css')
<style>
  .mt-32 {
    margin-top: 32px;
  }
</style>
@endsection
 
@section('content') {{-- Title --}}
  @include('partials.checkout.title') {{-- Sub Heading (Checkoutarea Title)
--}}
  @include('partials.checkout.subheader') {{-- Checkout Area Table --}}
  @include('partials.checkout.checkoutarea')
@endsection


@section('xjs')
<script src="https://js.braintreegateway.com/web/dropin/1.13.0/js/dropin.min.js"></script>
<script>
  (function(){
   // Create a Stripe client.
   var stripe = Stripe('pk_test_mMsfkIO9oSdbzRyWVLhgvslc');
   
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


// Disable the submit button to prevent repeated clicks
document.getElementById('complete-order').disabled = true;


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

         // Enable the submit button
         document.getElementById('complete-order').disabled = false;

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

// PayPal Stuff
var form = document.querySelector('#paypal-payment-form');
            var client_token = "{{ $paypalToken }}";
            braintree.dropin.create({
              authorization: client_token,
              selector: '#bt-dropin',
              paypal: {
                flow: 'vault'
              }
            }, function (createErr, instance) {
              if (createErr) {
                console.log('Create Error', createErr);
                return;
              }
              // remove credit card option
              var elem = document.querySelector('.braintree-option__card');
              elem.parentNode.removeChild(elem);
              form.addEventListener('submit', function (event) {
                event.preventDefault();
                instance.requestPaymentMethod(function (err, payload) {
                  if (err) {
                    console.log('Request Payment Method Error', err);
                    return;
                  }
                  // Add the nonce to the form and submit
                  document.querySelector('#nonce').value = payload.nonce;
                  form.submit();
                });
              });
            });

   })();
</script>
@endsection