@extends('layouts.ui')




@section('content')
{{-- Hero Slider --}}
@include('partials.landing.heroslider')
{{-- Category Banner --}}
@include('partials.landing.categorybanner')
{{-- Services and Partners + Transparent Product --}}
@include('partials.landing.servpart')
{{-- New & Featured Products --}}
@include('partials.landing.newproducts')






@endsection