@extends('layout.guest', ['pageclass' => 'login-signin-on'])

@section('content')
<!--begin::Login Sign in form-->
<div class="login-signin">
  <div class="mb-4">
    <h3>Verify Your Email</h3>
    <p class="opacity-60">Thanks for signing up! Before getting started, could you verify your
      email address by clicking on the link we just emailed to you? If you didn't receive the email, we will
      gladly send you another.</p>
  </div>
  @if (session('status') == 'verification-link-sent')
  <div class="mb-4 text-success">
    {{ __('A new verification link has been sent to the email address you provided during registration. Please check your inbox!') }}
  </div>
  @endif
  <form method="POST" action="{{ route('verification.send') }}" class="mb-20">
    @csrf
    <div>
      <button type="submit" class="px-5 py-3 m-2 btn btn-pill btn-white font-weight-bold opacity-90">
        {{ __('Resend Verification Email') }}
      </button>
    </div>
  </form>
  <form method="POST" action="{{ route('logout') }}">
    @csrf
    <a href="{{ route('logout') }}" onclick="event.preventDefault();
      this.closest('form').submit();"
      class="px-5 py-3 m-2 btn btn-pill btn-outline-white font-weight-bold opacity-70">Sign Out</a>
  </form>
</div>
<!--end::Login Sign in form-->
@endsection