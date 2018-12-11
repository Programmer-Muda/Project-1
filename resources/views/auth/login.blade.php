@extends('layouts.master')

@section('main')
<center>

  <form method="POST" action="{{ route('login') }}">
    @csrf

    <div class="topbar">Login</div>
    <div class="tabel">
      <div class="form-group">
        <label for="email1">Email address</label>
        <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" id="email1" placeholder="Enter email" required value="{{ old('email') }}">

        @if ($errors->has('email'))
          <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('email') }}</strong>
          </span>
        @endif

      </div>
      <div class="form-group">
        <label for="Password1">Password</label>
        <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" id="Password1" placeholder="Password" required>
        @if ($errors->has('password'))
            <span class="invalid-feedback" role="alert">
              <strong>{{ $errors->first('password') }}</strong>
            </span>
        @endif
      </div>

      <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="Check" {{ old('remember') ? 'checked' : '' }}>
        <label class="form-check-label" for="Check">Check me</label>
      </div>
      <button type="submit" class="btn btn-primary">Masuk :3</button>
    </div>
  </form>

  <div class="registered">
    <p>Not registered? <a href="/register">sign up now</a></p>
  </div>

</center>
@endsection