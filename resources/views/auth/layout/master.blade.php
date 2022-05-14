<!DOCTYPE html>
<html direction="rtl" dir="rtl" style="direction: rtl" >
<!--begin::Head-->
<head>
    <meta charset="utf-8">
    <title> @yield('title') </title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{mix('dashboard/css/dashboard.css')}}" rel="stylesheet" type="text/css"/>
</head>
<!--end::Head-->

<!--begin::Body-->
<body  id="kt_body"  class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading"  >

<!--begin::Main-->
<div class="d-flex flex-column flex-root">
    <!--begin::Login-->
    <div class="login login-4 login-signin-on d-flex flex-row-fluid" id="kt_login">
        <div class="d-flex flex-center flex-row-fluid bgi-size-cover bgi-position-top bgi-no-repeat" style="background-image: url('{{asset('/dashboard/img/bg.jpg')}}');">
            <div class="login-form text-center p-7 position-relative overflow-hidden">
                <!--begin::Login Header-->
                <div class="d-flex flex-center mb-15">
                    <img src="{{asset('dashboard/img/logo.png')}}" class="max-h-75px" draggable="false">
                </div>
                <!--end::Login Header-->

                <!--begin::Login Sign in form-->
                    @yield('content')
                <!--end::Login Sign in form-->

            </div>
        </div>
    </div>
    <!--end::Login-->
</div>
<!--end::Main-->

<script src="{{asset('./dashboard/js/plugins.js')}}"></script>
<script src="{{asset('./dashboard/js/scripts.js')}}"></script>
<script src="{{asset('./dashboard/js/widgets.js')}}"></script>
<script src="{{mix('dashboard/js/dashboard.js')}}"></script>
</body>
<!--end::Body-->
</html>
