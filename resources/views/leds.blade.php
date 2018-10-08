@extends('layouts.led_ui')




@section('content')

@include('partials.leds._title')
<div class="all-categories pb-100">
        <div class="container">
            <div class="row">
@include('partials.leds._products')
@include('partials.leds._categories')
            </div>
        </div>
</div>

@endsection