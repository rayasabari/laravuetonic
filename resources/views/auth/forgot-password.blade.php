@extends('layouts.guest', ['pageclass' => 'login-forgot-on'])

@section('content')
<div class="login-forgot">
  <div class="mb-20">
    <h3>Forgotten Password ?</h3>
    <p class="opacity-60">Enter your email to reset your password</p>
  </div>
  <form class="form" method="POST" action="{{ route('password.email') }}">
    @csrf
    <div class="form-group">
      <input
        class="h-auto px-8 py-4 mb-3 text-white placeholder-white border-0 form-control opacity-70 bg-dark-o-70 rounded-pill"
        type="text" placeholder="Email" name="email" autocomplete="off" />
        
      <!-- Session Status -->
      <x-auth-session-status :status="session('status')" />

      <!-- Validation Errors -->
      <x-auth-validation-errors :errors="$errors" />
    </div>
    <div class="form-group">
      <button type="submit"
        class="py-3 m-2 btn btn-pill btn-outline-white font-weight-bold opacity-90 px-15">Request</button>
      <a href="/" id="kt_login_forgot_cancel"
        class="py-3 m-2 btn btn-pill btn-outline-white font-weight-bold opacity-70 px-15">Cancel</a>
    </div>
  </form>
</div>
@endsection