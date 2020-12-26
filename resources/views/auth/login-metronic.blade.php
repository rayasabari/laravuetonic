<x-guest-layout>
  <!--begin::Login Sign in form-->
  <div class="login-signin">
    <div class="mb-20">
      <h3>Sign In To Admin</h3>
      <p class="opacity-60 font-weight-bold">Enter your details to login to your account:</p>
    </div>
    <form class="form" id="kt_login_signin_form2" method="POST" action="{{ route('login') }}">
      @csrf
      <div class="form-group">
        <input
          class="form-control h-auto text-white placeholder-white opacity-70 bg-dark-o-70 rounded-pill border-0 py-4 px-8 mb-5"
          id="email" type="email" placeholder="Email" name="email" :value="old('email')" autocomplete="off" />
      </div>
      <div class="form-group">
        <input
          class="form-control h-auto text-white placeholder-white opacity-70 bg-dark-o-70 rounded-pill border-0 py-4 px-8 mb-5"
          type="password" placeholder="Password" name="password" id="password" class="block mt-1 w-full" type="password"
          wire:name="password" required autocomplete="current-password" />
      </div>
      <div class="form-group d-flex flex-wrap justify-content-between align-items-center px-8">
        <div class="checkbox-inline">
          <label class="checkbox checkbox-outline checkbox-white text-white m-0">
            <input type="checkbox" name="remember" />
            <span></span>Remember me</label>
        </div>
        <a href="{{ route('password.request') }}" id="kt_login_forgot" class="text-white font-weight-bold">
          {{ __('Forgot password ?') }}
        </a>
      </div>
      <div class="form-group text-center mt-10">
        <button id="kt_login_signin_submit2" type="submit"
          class="btn btn-pill btn-outline-white font-weight-bold opacity-90 px-15 py-3">Sign
          In</button>
      </div>
    </form>
    <div class="mt-10">
      <span class="opacity-70 mr-4">Don't have an account yet?</span>
      <a href="javascript:;" id="kt_login_signup" class="text-white font-weight-bold">Sign Up</a>
    </div>
  </div>
  <!--end::Login Sign in form-->
  <!--begin::Login Sign up form-->
  <div class="login-signup">
    <div class="mb-20">
      <h3>Sign Up</h3>
      <p class="opacity-60">Enter your details to create your account</p>
    </div>
    <form class="form text-center" id="kt_login_signup_form">
      <div class="form-group">
        <input
          class="form-control h-auto text-white placeholder-white opacity-70 bg-dark-o-70 rounded-pill border-0 py-4 px-8"
          type="text" placeholder="Fullname" name="fullname" />
      </div>
      <div class="form-group">
        <input
          class="form-control h-auto text-white placeholder-white opacity-70 bg-dark-o-70 rounded-pill border-0 py-4 px-8"
          type="text" placeholder="Email" name="email" autocomplete="off" />
      </div>
      <div class="form-group">
        <input
          class="form-control h-auto text-white placeholder-white opacity-70 bg-dark-o-70 rounded-pill border-0 py-4 px-8"
          type="password" placeholder="Password" name="password" />
      </div>
      <div class="form-group">
        <input
          class="form-control h-auto text-white placeholder-white opacity-70 bg-dark-o-70 rounded-pill border-0 py-4 px-8"
          type="password" placeholder="Confirm Password" name="cpassword" />
      </div>
      <div class="form-group text-left px-8">
        <div class="checkbox-inline">
          <label class="checkbox checkbox-outline checkbox-white text-white m-0">
            <input type="checkbox" name="agree" />
            <span></span>I Agree the
            <a href="#" class="text-white font-weight-bold ml-1">terms and
              conditions</a>.</label>
        </div>
        <div class="form-text text-muted text-center"></div>
      </div>
      <div class="form-group">
        <button id="kt_login_signup_submit"
          class="btn btn-pill btn-outline-white font-weight-bold opacity-90 px-15 py-3 m-2">Sign
          Up</button>
        <button id="kt_login_signup_cancel"
          class="btn btn-pill btn-outline-white font-weight-bold opacity-70 px-15 py-3 m-2">Cancel</button>
      </div>
    </form>
  </div>
  <!--end::Login Sign up form-->
  <!--begin::Login forgot password form-->
  {{-- <div class="login-forgot">
    <div class="mb-20">
      <h3>Forgotten Password ?</h3>
      <p class="opacity-60">Enter your email to reset your password</p>
    </div>
    <form class="form" id="kt_login_forgot_form">
      <div class="form-group mb-10">
        <input
          class="form-control h-auto text-white placeholder-white opacity-70 bg-dark-o-70 rounded-pill border-0 py-4 px-8"
          type="text" placeholder="Email" name="email" autocomplete="off" />
      </div>
      <div class="form-group">
        <button id="kt_login_forgot_submit"
          class="btn btn-pill btn-outline-white font-weight-bold opacity-90 px-15 py-3 m-2">Request</button>
        <button id="kt_login_forgot_cancel"
          class="btn btn-pill btn-outline-white font-weight-bold opacity-70 px-15 py-3 m-2">Cancel</button>
      </div>
    </form>
  </div> --}}
  <!--end::Login forgot password form-->
</x-guest-layout>