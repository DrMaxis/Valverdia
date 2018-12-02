@extends('layouts.products_ui') 
@section('xcss')
<style>

@media only screen and (min-width: 600px) {
        .loginModal-container {
            margin: 4em auto;
        }

        .loginModal-container .switcher a {
            height: 70px;
            line-height: 70px;
        }
    }

    .searchForm {
        padding: 1.4em;
    }

    .searchForm .fieldset {
        position: relative;
        margin: 1.4em 0;
    }

    .searchForm .fieldset:first-child {
        margin-top: 0;
    }

    .searchForm .fieldset:last-child {
        margin-bottom: 0;
    }

    .searchForm label {
        font-size: 14px;
        font-size: 0.875rem;
    }

    .searchForm label.image-replace {
        /* replace text with an icon */
        display: inline-block;
        position: absolute;
        left: 15px;
        top: 50%;
        bottom: auto;
        -webkit-transform: translateY(-50%);
        transform: translateY(-50%);
        height: 20px;
        width: 20px;
        overflow: hidden;
        text-indent: 100%;
        white-space: nowrap;
        color: transparent;
        text-shadow: none;
        background-repeat: no-repeat;
        background-position: 50% 0;
    }

    .searchForm label.username {
        background-image: url("storage/assets/imgs/username-icon.svg");
    }

    .searchForm label.email {
        background-image: url("storage/assets/imgs/email-icon.svg");
    }

    .searchForm label.password {
        background-image: url("storage/assets/imgs/password-icon.svg");
    }

    .searchForm input {
        padding: 0;
        border-radius: 0.25em;
        background-color: #131212;
        /* animation:  inputshift 3s infinite; */
        color: white;
    }

    .searchForm input.full-width {
        width: 85%;
    }

    .searchForm button.full-width {
        width: 85%;
    }

    .searchForm input.has-padding {
        padding: 12px 20px 12px 50px;
    }

    .searchForm input.has-border {
        border: 1px solid #d2d8d8;
        -webkit-appearance: none;
        -moz-appearance: none;
        -ms-appearance: none;
        -o-appearance: none;
        appearance: none;
    }

    .searchForm input.has-border:focus {
        border-color: #343642;
        -webkit-box-shadow: 0 0 5px rgba(52, 54, 66, 0.1);
        box-shadow: 0 0 5px rgba(52, 54, 66, 0.1);
        outline: none;
    }

    .searchForm input.has-error {
        border: 1px solid #d76666;
    }

    .searchForm input[type=password] {
        /* space left for the HIDE button */
        padding-right: 49px;
    }

    .searchForm input[type=submit] {
        padding: 16px 0;
        cursor: pointer;
        background: #ffffff36;
        color: #fff;
        font-weight: bold;
        border: none;
        -webkit-appearance: none;
        -moz-appearance: none;
        -ms-appearance: none;
        -o-appearance: none;
        appearance: none;
        -webkit-transition: all 0.30s ease-in-out;
        -moz-transition: all 0.30s ease-in-out;
        -ms-transition: all 0.30s ease-in-out;
        -o-transition: all 0.30s ease-in-out;
        margin-left: 143px;
        width: 50%;
    }

    .no-touch .searchForm input[type=submit]:hover,
    .no-touch .searchForm input[type=submit]:focus {
        background: #827b7b85;
        outline: none;
    }

    .searchForm .hide-password {
        display: inline-block;
        position: absolute;
        text-decoration: none;
        right: 0;
        top: 0;
        padding: 6px 15px;
        border-left: 1px solid #d2d8d8;
        top: 50%;
        bottom: auto;
        -webkit-transform: translateY(-50%);
        transform: translateY(-50%);
        font-size: 14px;
        font-size: 0.875rem;
        color: #5a5a5a;
    }

    .searchForm .error-message {
        display: inline-block;
        position: absolute;
        left: -5px;
        bottom: -35px;
        background: rgba(215, 102, 102, 0.9);
        padding: .8em;
        z-index: 2;
        color: #FFF;
        font-size: 13px;
        font-size: 0.8125rem;
        border-radius: 0.25em;
        /* prevent click and touch events */
        pointer-events: none;
        visibility: hidden;
        opacity: 0;
        -webkit-transition: opacity 0.2s 0, visibility 0 0.2s;
        transition: opacity 0.2s 0, visibility 0 0.2s;
    }

    .searchForm .error-message::after {
        /* triangle */
        content: '';
        position: absolute;
        left: 22px;
        bottom: 100%;
        height: 0;
        width: 0;
        border-left: 8px solid transparent;
        border-right: 8px solid transparent;
        border-bottom: 8px solid rgba(215, 102, 102, 0.9);
    }

    .searchForm .error-message.is-visible {
        opacity: 1;
        visibility: visible;
        -webkit-transition: opacity 0.2s 0, visibility 0 0;
        transition: opacity 0.2s 0, visibility 0 0;
    }

    </style>


@endsection
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