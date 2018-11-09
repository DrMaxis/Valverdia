@extends('layouts.ui')

@section('content')
  <!-- LogIn Page Start -->
  <div class="log-in pb-100">
        <div class="container">
            <div class="row">
                <!-- New Customer Start -->
                <div class="col-sm-6">
                    <div class="well">
                        <div class="new-customer">
                            <h3>NEW CUSTOMER</h3>
                            <p class="mtb-10"><strong>Register</strong></p>
                            <p>By creating an account you will be able to shop faster, be up to date on an order's status, and keep track of the orders you have previously made</p>
                            <a class="customer-btn" href="{{route('register')}}">continue</a>
                        </div>
                    </div>
                    <div class="well">
                            <div class="new-customer">
                                <h3>GUEST CHECKOUT</h3>
                                <a class="customer-btn" href="{{route('guest-checkout')}}">Continue</a>
                            </div>
                        </div>
                </div>
                <!-- New Customer End -->
                <!-- Returning Customer Start -->
                <div class="col-sm-6">
                    <div class="well">
                        <div class="return-customer">
                            <h3 class="mb-10">RETURNING CUSTOMER</h3>
                            <p class="mb-10"><strong>I am a returning customer</strong></p>
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
                            </form>
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
