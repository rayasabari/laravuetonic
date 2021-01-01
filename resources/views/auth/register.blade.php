@extends('layout.guest', ['pageclass' => 'login-signup-on'])

@section('content')

<!--begin::Login Sign up form-->
<div class="login-signup">
  <div class="mb-20">
    <h3>Sign Up</h3>
    <p class="opacity-60">Enter your details to create your account</p>
  </div>
  <form class="text-center form" id="kt_login_signup_form" method="POST" action="/register">
    @csrf
    <div class="form-group">
      <input
        class="h-auto px-8 py-4 text-white placeholder-white border-0 form-control opacity-70 bg-dark-o-70 rounded-pill"
        type="text" id="name" placeholder="Fullname" name="name" :value="old('name')" required autofocus/>
    </div>
    <div class="form-group">
      <input
        class="h-auto px-8 py-4 text-white placeholder-white border-0 form-control opacity-70 bg-dark-o-70 rounded-pill"
        type="email" id="email" placeholder="Email" name="email" :value="old('email')" autocomplete="off" required/>
    </div>
    <div class="form-group">
      <input
        class="h-auto px-8 py-4 text-white placeholder-white border-0 form-control opacity-70 bg-dark-o-70 rounded-pill"
        type="password" id="password" placeholder="Password" name="password" required autocomplete="new-password"/>
    </div>
    <div class="form-group">
      <input
        class="h-auto px-8 py-4 mb-3 text-white placeholder-white border-0 form-control opacity-70 bg-dark-o-70 rounded-pill"
        type="password" id="password_confirmation" placeholder="Confirm Password" name="password_confirmation" />
        
      <!-- Validation Errors -->
      <x-auth-validation-errors :errors="$errors" />
    </div>
    {{-- <div class="px-8 text-left form-group">
      <div class="checkbox-inline">
        <label class="m-0 text-white checkbox checkbox-outline checkbox-white">
          <input type="checkbox" name="agree" />
          <span></span>I Agree the
          <a href="#" class="ml-1 text-white font-weight-bold">terms and
            conditions</a>.</label>
      </div>
      <div class="text-center form-text text-muted"></div>
    </div> --}}
    <div class="form-group">
      <button id="kt_login_signup_submit" type="submit"
        class="py-3 m-2 btn btn-pill btn-outline-white font-weight-bold opacity-90 px-15">Sign
        Up</button>
      <a id="kt_login_signup_cancel"
        href="/" class="py-3 m-2 btn btn-pill btn-outline-white font-weight-bold opacity-70 px-15">Cancel</a>
    </div>
  </form>
</div>
<!--end::Login Sign up form-->
@endsection