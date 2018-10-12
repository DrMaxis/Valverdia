@extends('layouts.products_ui')

@section('content')

{{-- Title --}}
@include('partials.checkout.title')
{{-- Sub Heading (Checkoutarea Title) --}}
@include('partials.checkout.subheader')
{{-- Checkout Area Table --}}
@include('partials.checkout.checkoutarea')
@endsection

@section('xtra-js')
