@extends('layouts.ui-landing')




@section('content')





{{--  Hero slider   --}}

<section class="s-home page-hero" data-parallax="scroll" data-image-src="{{asset('storage/inc/hero.png')}}" style="background:#fff no-repeat center center;"  data-natural-width=1200 data-natural-height=735 data-position-y=center>

    

    
{{-- 
         @include('inc.landing.flexslider')  --}}

        

     <!-- end home-content -->

    

</section> <!-- end s-home -->







{{-- discover slider --}}
<section id="about" class="s-about target-section">

      
<div class="discover">

    @include('inc.landing.discover')

</div>  

        

  </section>





{{-- Services and Partners --}}
<section clas="sp-section">
<div class="servpart row m-t-lg m-b-lg">


</div>

</section>
{{-- Trending Products--}}






{{-- New Products --}}




{{-- Suggestion --}}







@endsection