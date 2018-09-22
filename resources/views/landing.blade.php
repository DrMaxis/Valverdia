@extends('layouts.ui-landing')




@section('content')

{{--  Hero slider   --}}
<section class="display-block">
<div class="opening-hero row">

@include('inc.landing.flexslider') 

</div>
</section>


{{-- discover slider --}}

<section class="display-block">
<div class="discover">

    @include('inc.landing.discover')

</div>
</section>


<div class="servpart row m-t-lg m-b-lg">

{{-- Services and Partners --}}



</div>


{{-- Trending Products--}}




{{-- New Products --}}




{{-- Suggestion --}}







@endsection