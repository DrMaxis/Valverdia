@extends('layouts.ui') 
@section('xcss')
<style>
    /** LOGIN FORM STYLES SCSS 
*
*
* REFER TO //forms.test.css 
*

**/



    .checkbox input[type=checkbox] {
        position: absolute;
        margin-left: -115px
    }

    .full-width.buttonGlitch {
        width: 75px;
        padding: 8px 0;
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
        transition: all 0.30s ease-in-out;
    }

    .buttonGlitch.buttonGlitch-active {
        -webkit-filter: url("#filter");
        filter: url("#filter");
    }

    .loginContainer {
        position: absolute;
        top: 58%;
        -webkit-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        overflow: hidden;
        -webkit-animation: fade 5s infinite;
        animation: fade 5s infinite;
        width: 80%;
        height: 100%;
        margin: 0 auto;
        left: 48%;
        -webkit-filter: url(#glitch);
        filter: url(#glitch);
    }

    .logoContainer img {
        -webkit-animation: fade 5s infinite;
        animation: fade 5s infinite;
    }

    .loginNav {
        width: 90%;
        max-width: 240px;
        margin: 0 auto;
        height: 100%;
        cursor: pointer;
    }

    .loginNav ul {
        position: absolute;
        width: 100%;
        top: 40%;
        margin: 0;
        padding: 0;
    }

    .loginNav li {
        list-style: none;
        float: left;
    }

    .loginNav a {
        display: block;
        height: 50px;
        margin: 10px;
        padding: 2px 25px;
        text-decoration: none;
        border-radius: 30px;
        line-height: 45px;
        color: #FFF;
        -webkit-transition: all 0.30s ease-in-out;
        -moz-transition: all 0.30s ease-in-out;
        -ms-transition: all 0.30s ease-in-out;
        -o-transition: all 0.30s ease-in-out;
    }

    .loginNav li:nth-child(1) a {
        background: #ffffff36;
        border: 2px solid #fff;
    }

    .loginNav li:nth-child(1) a:hover {
        background: #827b7b85;
        /* color: #d83d3d; */
    }

    .loginNav li:nth-child(2) a {
        background: #827b7b85;
        border: 2px solid #ffffff;
    }

    .loginNav li:nth-child(2) a:hover {
        background: #ffffff36;
        border: 2px solid #ffffff;
    }

    .loginModal {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        /* background: rgba(127, 37, 37, 0.9); */
        z-index: 3;
        overflow-y: auto;
        cursor: pointer;
        visibility: hidden;
        opacity: 0;
        -webkit-transition: opacity 0.3s 0, visibility 0 0.3s;
        transition: opacity 0.3s 0, visibility 0 0.3s;
        /* animation: textshift 25s infinite; */
        -webkit-filter: url(#glitch);
        filter: url(#glitch);
    }

    .loginModal.is-visible {
        visibility: visible;
        opacity: 1;
        -webkit-transition: opacity 0.3s 0, visibility 0 0;
        transition: opacity 0.3s 0, visibility 0 0;
    }

    .loginModal.is-visible .loginModal-container {
        -webkit-transform: translateY(0);
        transform: translateY(0);
    }

    .loginModal-container {
        position: relative;
        width: 90%;
        max-width: 600px;
        background: #000;
        margin: 3em auto 4em;
        cursor: auto;
        border-radius: 0.25em;
        -webkit-transform: translateY(-30px);
        transform: translateY(-30px);
        transition-property: -webkit-transform;
        -webkit-transition-property: -webkit-transform;
        transition-property: transform;
        transition-property: transform, -webkit-transform;
        -webkit-transition-duration: 0.3s;
        transition-duration: 0.3s;
    }

    .loginModal-container .switcher:after {
        content: "";
        display: table;
        clear: both;
    }

    .loginModal-container .switcher li {
        width: 50%;
        float: left;
        text-align: center;
        list-style: none;
    }

    .loginModal-container .switcher li:first-child a {
        border-radius: .25em 0 0 0;
    }

    .loginModal-container .switcher li:last-child a {
        border-radius: 0 .25em 0 0;
    }

    .loginModal-container .switcher a {
        display: block;
        width: 100%;
        height: 50px;
        line-height: 50px;
        background: #000000;
        color: #809191;
        text-decoration: none;
    }

    .loginModal-container .switcher a.selected {
        background: #000;
        color: #505260;
    }

    @media only screen and (min-width: 600px) {
        .loginModal-container {
            margin: 4em auto;
        }

        .loginModal-container .switcher a {
            height: 70px;
            line-height: 70px;
        }
    }

    .loginForm {
        padding: 1.4em;
    }

    .loginForm .fieldset {
        position: relative;
        margin: 1.4em 0;
    }

    .loginForm .fieldset:first-child {
        margin-top: 0;
    }

    .loginForm .fieldset:last-child {
        margin-bottom: 0;
    }

    .loginForm label {
        font-size: 14px;
        font-size: 0.875rem;
    }

    .loginForm label.image-replace {
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

    .loginForm label.username {
        background-image: url("storage/assets/imgs/username-icon.svg");
    }

    .loginForm label.email {
        background-image: url("storage/assets/imgs/email-icon.svg");
    }

    .loginForm label.password {
        background-image: url("storage/assets/imgs/password-icon.svg");
    }

    .loginForm input {
        padding: 0;
        border-radius: 0.25em;
        background-color: #131212;
        /* animation:  inputshift 3s infinite; */
        color: white;
    }

    .loginForm input.full-width {
        width: 85%;
    }

    .loginForm button.full-width {
        width: 85%;
    }

    .loginForm input.has-padding {
        padding: 12px 20px 12px 50px;
    }

    .loginForm input.has-border {
        border: 1px solid #d2d8d8;
        -webkit-appearance: none;
        -moz-appearance: none;
        -ms-appearance: none;
        -o-appearance: none;
        appearance: none;
    }

    .loginForm input.has-border:focus {
        border-color: #343642;
        -webkit-box-shadow: 0 0 5px rgba(52, 54, 66, 0.1);
        box-shadow: 0 0 5px rgba(52, 54, 66, 0.1);
        outline: none;
    }

    .loginForm input.has-error {
        border: 1px solid #d76666;
    }

    .loginForm input[type=password] {
        /* space left for the HIDE button */
        padding-right: 49px;
    }

    .loginForm input[type=submit] {
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

    .no-touch .loginForm input[type=submit]:hover,
    .no-touch .loginForm input[type=submit]:focus {
        background: #827b7b85;
        outline: none;
    }

    .loginForm .hide-password {
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

    .loginForm .error-message {
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

    .loginForm .error-message::after {
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

    .loginForm .error-message.is-visible {
        opacity: 1;
        visibility: visible;
        -webkit-transition: opacity 0.2s 0, visibility 0 0;
        transition: opacity 0.2s 0, visibility 0 0;
    }

   
   

    @media only screen and (min-width: 600px) {

.loginForm {
            padding: 2em;
        }

        .loginForm .fieldset {
            margin: 12px 0;
        }

        .loginForm .fieldset:first-child {
            margin-top: 0;
        }

        .loginForm .fieldset:last-child {
            margin-bottom: 0;
        }

        .loginForm input.has-padding {
            padding: 16px 20px 16px 50px;
            -webkit-transition: all 0.2s cubic-bezier(0.25, 0.46, 0.45, 0.94);
            transition: all 0.2s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        }

        .loginForm input[type=submit] {
            padding: 16px 0;
        }

        .form-bottom-message {
            position: absolute;
            width: 100%;
            left: 0;
            bottom: -40px;
            text-align: center;
            font-size: 14px;
            font-size: 0.875rem;
        }

        .form-message {
            padding: 2em 2em 0;
        }

        .form-bottom-message a {
            color: #FFF;
            text-decoration: none;
            border-bottom: 1px solid rgba(255, 255, 255, 0);
            padding: 0 0 0 2px;
            -webkit-transition: all 0.30s ease-in-out;
            -moz-transition: all 0.30s ease-in-out;
            -ms-transition: all 0.30s ease-in-out;
            -o-transition: all 0.30s ease-in-out;
        }

        .form-bottom-message a:hover {
            -webkit-animation: borderslide-3px .5s;
            animation: borderslide-3px .5s;
            border-bottom: 1px solid white;
            padding-bottom: 3px;
        }

        @-webkit-keyframes borderslide-3px {
            0% {
                padding-bottom: 1px;
            }

            50% {
                padding-bottom: 3px;
            }
        }

        @keyframes borderslide-3px {
            0% {
                padding-bottom: 1px;
            }

            50% {
                padding-bottom: 3px;
            }
        }

        @-webkit-keyframes borderslide-2px {
            0% {
                padding-bottom: 1px;
            }

            50% {
                padding-bottom: 2px;
            }
        }

        @keyframes borderslide-2px {
            0% {
                padding-bottom: 1px;
            }

            50% {
                padding-bottom: 2px;
            }
        }

        .close-form {
            /* form X button on top right */
            display: block;
            position: absolute;
            width: 40px;
            height: 40px;
            right: 0;
            top: -40px;
            text-indent: 100%;
            white-space: nowrap;
            overflow: hidden;
        }
    }


    }
</style>
@endsection
 
@section('content')
<!-- LogIn Page Start -->
<div class="log-in pb-100">
    <div class="container">


        <div class="row">
            <!-- New Customer Start -->
            <div class="col-sm-6">
                <div class="well" style="border: 0.25rem solid #ff0000; filter: url(#glitch);">
                    <div class="return-customer">
                        <h3 class="mb-10">Already Found Your Xen?</h3>
                        <p> Login Here </p>


                        {{--
                        <form action="{{route('login')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label class="control-label">Enter you email address here...</label>
                                <input type="text" name="email" placeholder="Enter you email address here..." id="input-email" class="form-control" value="{{old('email')}}">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Password</label>
                                <input type="text" name="password" placeholder="Password" id="input-password" class="form-control" value="{{old('password')}}">
                            </div>
                            <p class="lost-password"><a href="forgot-password.html">Forgot password?</a></p>
                            <button type="submit" class="return-customer-btn">Login</button>
                        </form> --}}

                        <form class="loginForm" method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="fieldset">
                                <label for="email" class="image-replace email" for="email">{{ __('E-Mail Address') }}</label>


                                <input id="email" type="email" class="full-width has-padding has-border" placeholder="Email" name="email" value="{{ old('email') }}"
                                    required autofocus> @if ($errors->has('email'))
                                <span style="display:block;">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span> @endif

                            </div>

                            <div class="fieldset">
                                <label for="password" class="image-replace password">{{ __('Password') }}</label>


                                <input id="password" type="password" class="full-width has-padding has-border" placeholder="Password" name="password" required
                                    autofocus> @if ($errors->has('password'))
                                <span style="display:block;">

                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span> @endif

                            </div>

                            <div class="fieldset">

                                <div class="checkbox">
                                    <label>
                                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                            </label>
                                </div>

                            </div>

                            <div class="fieldset">

                                <button type="submit" class="customer-btn">
                                            {{ __('Login') }}
                                        </button>


                                <div class="form-bottom-message">
                                    <a href="#0">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                </div>
                            </div>

                        </form>



                    </div>
                </div>
            </div>
            <!-- New Customer End -->
            <!-- Returning Customer Start -->
            <div class="col-sm-6">
                <div class="well" style="border: 0.25rem solid #0008ff;filter: url(#glitch);">
                    <div class="new-customer">
                        <h3>Register as a new Customer</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque pellentesque ultrices orci,
                            in feugiat ligula ullamcorper eu.</p>
                        <a class="customer-btn" href="{{route('register')}}">continue</a>
                    </div>
                </div>
                <div class="well" style="border: 0.25rem solid #04ff00;filter: url(#glitch);" >
                    <div class="new-customer">
                        <h3>Continue as Guest</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque pellentesque ultrices orci,
                            in feugiat ligula ullamcorper eu.</p>
                        <a class="customer-btn" href="{{route('guest-checkout')}}">Continue</a>
                    </div>
                </div>
            </div>
            <!-- Returning Customer End -->
        </div>
        <!-- Row End -->
    </div>
    <!-- Container End -->
</div>
<!-- LogIn Page End -->
@endsection

