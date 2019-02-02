@extends('front.layouts.auth_master')

@section('content')

<div class="container">
    <div class="col-md-6 offset-md-3">
    <div class="login-wrapper">
        <form method="POST" action="{{ route('register') }}">
        {{ csrf_field() }}
            <div class="login-header">
            <h1 class="lo-title">Registration</h1>
            <span class="lo-sub">It's free and will remain!</span>
            </div>
            <div class="login-txt-block">
                <label>Full Name</label>
                <input type="text" name="name" placeholder="John Doe" value="{{ old('name') }}" />
                @if ($errors->has('name'))
                <span class="error-message">                
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
                @endif
            </div>
            <div class="login-txt-block">
                <label>Email </label>
                <input type="email" name="email" placeholder="john@example.com" value="{{ old('email') }}" />
                @if ($errors->has('email'))
                <span class="error-message">  
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif
            </div>
            <div class="login-txt-block">
                <label>Password</label>
                <input type="password" name="password" placeholder="*****" value="{{ old('password') }}" />
                @if ($errors->has('password'))
                <span class="error-message">  
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
                @endif
            </div>

            <div class="login-txt-block">
                <label>Confirm Password</label>
                <input type="password" name="password_confirmation" placeholder="*****" value="{{ old('password_confirmation') }}" />
                @if ($errors->has('password'))
               <span class="error-message">  
                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                </span>
                @endif
            </div>
            
            <div class="login-txt-block">
                <button class="login-btn"> Submit</button>
                <a href="" class="forgot">Login Here</a>
            </div>
        </form>
    </div>
    
    </div>
</div>
@endsection