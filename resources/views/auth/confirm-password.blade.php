@extends('layout.guest', ['pageclass' => 'login-forgot-on'])

@section('content')
<div class="login-forgot">
  <div class="mb-20">
    <h3>Confirm Password</h3>
    <p class="opacity-60">
      This is a secure area of the application. Please confirm your password before continuing.
    </p>
  </div>
  <form class="form" method="POST" action="{{ route('password.confirm') }}">
    @csrf
    <div class="form-group">
      <input
        class="h-auto px-8 py-4 mb-3 text-white placeholder-white border-0 form-control opacity-70 bg-dark-o-70 rounded-pill"
        type="password" placeholder="Passwrod" name="password" required autocomplete="current-password" />

      <!-- Session Status -->
      <x-auth-session-status :status="session('status')" />

      <!-- Validation Errors -->
      @if ($errors->any())
      <div class="text-warning">
        {{ __('Incorrect password!') }}
      </div>
      @endif
    </div>
    <div class="form-group">
      <button type="submit"
        class="py-3 m-2 btn btn-pill btn-outline-white font-weight-bold opacity-90 px-15">Confirm</button>
    </div>
  </form>
</div>
@endsection