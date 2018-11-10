@extends('layouts.products_ui')
@section('content')
@include('partials.cart.title')

@include('partials.cart.data')
@endsection

@section('xjs')

<script src="{{asset('js/events.js')}}"></script>

<script>

    (function() {

    const classname = document.querySelectorAll('.product-quantity')

    Array.from(classname).forEach(function(element) {
        element.addEventListener('change', function() {
            const id = element.getAttribute('data-id')
            const productQuantity = element.getAttribute('data-productQuantity')
                    axios.patch(`/cart/${id}`, {
                        quantity: this.value,
                        productQuantity: productQuantity
                    })
  .then(function (response) {
    window.location.href = '{{ route('cart') }}'
  })
  .catch(function (error) {
    window.location.href = '{{ route('cart') }}'
  });
        })
    })
    })();

    </script>
@endsection
