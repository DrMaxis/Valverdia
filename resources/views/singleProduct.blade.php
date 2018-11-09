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


@endsection