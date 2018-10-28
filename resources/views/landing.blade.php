@extends('layouts.ui')




            
@section('content')
{{-- Hero Slider --}}
@include('partials.landing.heroslider')
{{-- Category Banner --}}
@include('partials.landing.categorybanner')

{{-- Services and Partners + Transparent Product --}}
{{-- @include('partials.landing.servpart') --}}


{{-- New & Featured Products --}}
@include('partials.landing.newproducts')






@endsection


@section('xjs')

<script>

        $( document ).ready(function($) {
function changeColor(selector, colors, time) {
/* Params:
 * selector: string,
 * colors: array of color strings,
 * every: integer (in mili-seconds)
 */
var curCol = 0,
    timer = setInterval(function () {
        if (curCol === colors.length) curCol = 0;
        $(selector).css("background-color", colors[curCol]);
        curCol++;
    }, time);
}
$(window).load(function () {
changeColor(".rgb", ["green", "yellow", "blue", "red", "purple", "cyan", "violet"], 1500);
});


    var imageWidth = 50;
                
                $(".video-thumbs").width($(".vidImage").length*imageWidth);
                  
                });

        </script>


                

@endsection