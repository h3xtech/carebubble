@extends('layouts.login')

@section('content')
<form method="POST" action="{{ route('login') }}">
    @csrf
    <div class="form-group">
        <label class="control-label" for="username">Username</label>
        <input type="text" placeholder="example@gmail.com" title="Please enter you username" required="" value="" name="email" id="username" class="form-control">
        <span class="help-block small">Your unique username to app</span>
        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="form-group">
        <label class="control-label" for="password">Password</label>
        <input type="password" title="Please enter your password" placeholder="******" required="" value="" name="password" id="password" class="form-control">
        <span class="help-block small">Your strong password</span>
        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div>
        <button class="btn btn-primary">Login</button>
        <a class="btn btn-warning" href="register.html">Register</a>
    </div>
</form>

@endsection
