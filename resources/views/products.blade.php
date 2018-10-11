@extends('layouts.led_ui') 
@section('content') 
    {{-- Title --}}
    @include('partials.products.title')
<div class="all-categories pb-100">
    <div class="container">
        <div class="row">

    {{-- Products --}}
    @include('partials.products.products') 
    {{-- Categories --}}
    @include('partials.products.categories')
        </div>
    </div>
</div>
@endsection