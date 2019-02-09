@extends('front.layouts.auth_master')

@section('content')

<div class="container">
    <div class="col-md-6 offset-md-3">
    <div class="login-wrapper">
        <form method="POST" action="{{ route('login') }}">
        {{ csrf_field() }}
            <div class="login-header">
            <h1 class="lo-title">Login</h1>
            <span class="lo-sub"></span>
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
                <button class="login-btn"> Login</button>
                <a href="/register" class="forgot">Register</a>
            </div>
        </form>
    </div>
    
    </div>
</div>
@endsection