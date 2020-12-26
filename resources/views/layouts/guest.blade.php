<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" {{ Metronic::printAttrs('html') }} {{ Metronic::printClasses('html') }}>

<!--begin::Head-->
<head>
  <meta charset="utf-8" />

  {{-- Title Section --}}
  <title>{{ config('app.name') }} | @yield('title', $page_title ?? 'Login')</title>

  {{-- Meta Data --}}
  <meta name="description" content="@yield('page_description', $page_description ?? '')"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>

  {{-- Favicon --}}
  <link rel="shortcut icon" href="{{ asset('media/logos/favicon.ico') }}" />

  {{-- Fonts --}}
  {{ Metronic::getGoogleFontsInclude() }}

  {{-- Global Theme Styles (used by all pages) --}}
  @foreach(config('layout.resources.css') as $style)
    <link href="{{ config('layout.self.rtl') ? asset(Metronic::rtlCssPath($style)) : asset($style) }}" rel="stylesheet" type="text/css"/>
  @endforeach

  {{-- Layout Themes (used by all pages) --}}
  @foreach (Metronic::initThemes() as $theme)
    <link href="{{ config('layout.self.rtl') ? asset(Metronic::rtlCssPath($theme)) : asset($theme) }}" rel="stylesheet" type="text/css"/>
  @endforeach

  {{-- Includable CSS --}}
  @yield('styles')

  <!--begin::Page Custom Styles(used by this page)-->
  <link href="{{ asset('css/pages/login/classic/login-3.css') }}" rel="stylesheet" type="text/css" />
  <!--end::Page Custom Styles-->

</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body"
  class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
  <!--begin::Main-->
  <div class="d-flex flex-column flex-root">
    <!--begin::Login-->
    <div class="login login-3 login-signin-on d-flex flex-row-fluid" id="kt_login">
      <div class="d-flex flex-center bgi-size-cover bgi-no-repeat flex-row-fluid"
        style="background-image: url({{ asset('media/bg/bg-1.jpg') }});">
        <div class="login-form text-center text-white p-7 position-relative overflow-hidden">
          <!--begin::Login Header-->
          <div class="d-flex flex-center mb-15">
            <a href="#">
              <img src="{{ asset('media/logos/logo-letter-9.png') }}" class="max-h-100px" alt="" />
            </a>
          </div>
          <!--end::Login Header-->
          {{ $slot }}
        </div>
      </div>
    </div>
    <!--end::Login-->
  </div>
  <!--end::Main-->
  <script>
    var HOST_URL = "{{ route('dashboard') }}";
  </script>
  <!--begin::Global Config(global config for global JS scripts)-->
  <script>
    var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1400 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#3699FF", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#8950FC", "warning": "#FFA800", "danger": "#F64E60", "light": "#E4E6EF", "dark": "#181C32" }, "light": { "white": "#ffffff", "primary": "#E1F0FF", "secondary": "#EBEDF3", "success": "#C9F7F5", "info": "#EEE5FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#3F4254", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#EBEDF3", "gray-300": "#E4E6EF", "gray-400": "#D1D3E0", "gray-500": "#B5B5C3", "gray-600": "#7E8299", "gray-700": "#5E6278", "gray-800": "#3F4254", "gray-900": "#181C32" } }, "font-family": "Poppins" };
  </script>
  <!--end::Global Config-->
  <!--begin::Global Theme Bundle(used by all pages)-->
  <script src="{{ asset('plugins/global/plugins.bundle.js') }}"></script>
  <script src="{{ asset('plugins/custom/prismjs/prismjs.bundle.js') }}"></script>
  <script src="{{ asset('js/scripts.bundle.js') }}"></script>
  <!--end::Global Theme Bundle-->
  <!--begin::Page Scripts(used by this page)-->
  <script src="{{ asset('js/pages/custom/login/login-general.js') }}"></script>
  <!--end::Page Scripts-->
</body>
<!--end::Body-->

</html>