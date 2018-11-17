@extends('layouts.ui')
@section('content')
{{-- Title --}}
@include('partials.singleProduct.title')
{{-- Main Product Content --}}
@include('partials.singleProduct.main')
{{-- Product Description --}}
@include('partials.singleProduct.mainDescription')
{{-- Popular Items --}}
@include('partials.singleProduct.popular')
@endsection
@section('xjs')
<script src="{{asset('js/events.js')}}"></script>
<script>
(function() {
    const bigImg = document.querySelector('#primaryImg');
    const images = document.querySelectorAll('.product-finger');

    images.forEach((element) => element.addEventListener('click', thumbnailClick));

    function thumbnailClick(e) {
         bigImg.classList.remove('active');
         bigImg.addEventListener('transitionend', () => {
             bigImg.src = this.querySelector('img').src;
             bigImg.classList.add('active');
         })

         images.forEach((element) => element.classList.remove('chosen'));
         this.classList.add('chosen');
    }

})();

    </script>






<script>

    (function() {

    const classname = document.querySelectorAll('.product-quantity')

    Array.from(classname).forEach(function(element) {
        element.addEventListener('change', function() {
            const id = element.getAttribute('data-id')
            const productQuantity = element.getAttribute('data-productQuantity')
            axios.patch(`/cart/${id}`, {
    quantity: this.value
  
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