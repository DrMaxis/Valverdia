@extends('layouts.ui') 
@section('content')
<!-- Register Account Start -->
<div class="register-account">
    <div class="container">
        <div class="row">
            <div class="register-title">
                <h3 class="mb-10">Register a new XenColor account</h3>
                <p class="mb-10">If you already have an account with us, please login on the <a href="/login">login page.</a></p>
            </div>
        </div>
        <!-- Row End -->
        <div class="row">
                <form method="POST" action="{{ route('register') }}">
                        @csrf
                
                    
                <fieldset>
                        <legend>Name & Email</legend>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="name">Name</label>
                        <div class="col-sm-10">
                            <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}"
                                required autofocus> 

                                @if ($errors->has('name'))
                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span> 
                                    @endif
                        </div>
                    </div>

                        <div class="form-group">
                            <label class="control-label col-sm-2" for="email">Email</label>
                            <div class="col-sm-10">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                            
                                @if ($errors->has('email'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif

                            </div>
                        </div>
                </fieldset>

                </div>
            
                <fieldset>
                    <legend>Password</legend>
                    <div class="form-group">
                            <label for="password" class="control-label col-sm-2">Password</label>
                        <div class="col-sm-10">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                        
                                
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif

                            </div>
                    </div>
                    <div class="form-group">
                            <label for="password-confirm" class="control-label col-sm-2">Confirm Password</label>
                        
                        <div class="col-sm-10">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>


                        </div>
                    </div>
                </fieldset>
           
                <div class="buttons newsletter-input">
                    <div class="pull-right">I have read and agree to the <a href="#" class="agree"><b>Privacy Policy</b></a>
                        <input type="checkbox" name="agree" value="1"> &nbsp;
                        <button type="submit"  class="newsletter-btn">Sign Up</button>
                    </div>
                </div>
            </form>
        </div>
        <!-- Row End -->
    </div>
    <!-- Container End -->
</div>
<!-- Register Account End -->
@endsection