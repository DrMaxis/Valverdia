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