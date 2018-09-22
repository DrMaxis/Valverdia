@extends('layouts.ui-landing')




@section('content')

{{--  Hero slider   --}}

<div class="opening-hero">

@include('inc.landing.flexslider') 

</div>


{{-- discover slider --}}


<div class="discover">

    @include('inc.landing.discover')

</div>



{{-- Services and Partners --}}



{{-- Trending Products--}}




{{-- New Products --}}




{{-- Suggestion --}}







@endsection