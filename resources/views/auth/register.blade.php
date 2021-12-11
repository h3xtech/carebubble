@extends('layouts.login')

@section('content')
    <form class="form-signin" method="POST" action="{{ route('register') }}">
      @csrf
      <img class="mb-4" src="/assets/img/logo.png" alt="" width="72" height="72">
      <h2>Register for a Care Giver beta account</h2>
      <label for="inputUDID" class="sr-only">Who refered you to CareBubble</label>
      <select id="referer" type="text" class="form-control @error('referer') is-invalid @enderror" name="referer" value="{{ old('referer') }}">
        <option>Who told you about CareBubble</option>
        <option>Terry</option>
        <option>James</option>
        <option>Ofei</option>
      </select>
      <label for="inputUDID" class="sr-only">Name</label>
      <input id="udid" type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="What is your name?" required autocomplete="name">
      <label for="inputUDID" class="sr-only">UDID</label>
      <input id="udid" type="text" class="form-control @error('udid') is-invalid @enderror" name="udid" placeholder="Please enter your UDID number" required autocomplete="udid" autofocus>
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" id="inputEmail" class="form-control" placeholder="Email address" name="email" required autofocus>
      @error('email')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
      @enderror
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" required>
      @error('password')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
      @enderror
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" class="form-control" placeholder="Confirm Password" name="password_confirmation" required>
      <?php $rand = rand(1,4);?>
      <img src="/captcha/{{$rand}}.gif" />
      <input type="hidden" name="role" value="6" style="width:100%!important;" />
      <label for="inputUDID" class="sr-only">Captcha</label>
      <input id="captcha" type="text" class="form-control @error('captcha') is-invalid @enderror" name="captcha" placeholder="Please enter the text above" required autocomplete="name">
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> I agree to <a href="/page/terms-and-conditions" target="_blank">the terms</a>
        </label>
      </div>
      <input type="hidden" name="connection" value="unassigned" />
      <input type="hidden" name="avatar" value="https://moonvillageassociation.org/wp-content/uploads/2018/06/default-profile-picture1.jpg" />
      <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
      <p class="mt-5 mb-3 text-muted">Already a member? <a href="/login">Login here</a></p>
    </form>
@endsection
