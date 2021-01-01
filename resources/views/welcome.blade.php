@extends('layout.guest', ['pageclass' => 'login-signin-on'])

@section('content')
<!--begin::Login Sign in form-->
<div class="login-signin">
  <div class="mb-20">
    <h1 class="text-4xl">Welcome to Laravuetonic</h1>
    <p class="opacity-60 ">Building your apps with Laravel, Vue, and Metronic Themes</p>
  </div>

  <div class="mt-10 text-center form-group">
    <a href="/login"
      class="px-8 py-3 btn btn-pill btn-outline-white opacity-90">Get Started!</a>
  </div>
</div>
<!--end::Login Sign in form-->
@endsection