<x-guest-layout>
  <div class="login-forgot">
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
  </div>
</x-guest-layout>