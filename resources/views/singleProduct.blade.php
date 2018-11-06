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
    const bigImg = document.querySelector('#big-img');
    const images = document.querySelectorAll('#product-thumb');

    images.forEach((element) => element.addEventListener('click', thumbnailClick));

    function thumbnailClick(e) {
        bigImg.src = this.querySelector('img').src;

        

        images.forEach((element) => element.classList.remove('choosen'));
        this.classList.add('choosen');
    }

})();

    </script>


@endsection