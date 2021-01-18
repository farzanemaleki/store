<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>فروشگاه | @yield('page-title')</title>
    <meta name="keywords" content="HTML5 Template">
    <meta name="description" content="Molla - Bootstrap eCommerce Template">
    <meta name="author" content="p-themes">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{url('site/assets/images/icons/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{url('site/assets/images/icons/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{url('site/assets/images/icons/favicon-16x16.png')}}">
    <link rel="manifest" href="{{url('site/assets/images/icons/site.html')}}">
    <link rel="mask-icon" href="{{url('site/assets/images/icons/safari-pinned-tab.svg')}}" color="#666666">
    <link rel="shortcut icon" href="{{url('site/assets/images/icons/favicon.ico')}}">
    <meta name="apple-mobile-web-app-title" content="Molla">
    <meta name="application-name" content="Molla">
    <meta name="msapplication-TileColor" content="#cc9966">
    <meta name="msapplication-config" content="assets/images/icons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet"
          href="{{url('site/assets/vendor/line-awesome/line-awesome/line-awesome/css/line-awesome.min.css')}}">
    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="{{url('site/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('site/assets/css/bootstrap-rtl.min.css')}}">
    <link rel="stylesheet" href="{{url('site/assets/css/plugins/owl-carousel/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{url('site/assets/css/plugins/magnific-popup/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{url('site/assets/css/plugins/jquery.countdown.css')}}">
@yield('header_styles')
<!-- Main CSS File -->
    <link rel="stylesheet" href="{{url('site/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{url('site/assets/css/skins/skin-demo-4.css')}}">
    <link rel="stylesheet" href="{{url('site/assets/css/demos/demo-4.css')}}">
</head>
<body>
<div class="page-wrapper">
    <header class="header header-intro-clearance header-4">
        @include('site.layout.header.header-top')

        @include('site.layout.header.header-middle')

        @include('site.layout.header.header-bottom')
    </header>
    <!-- End .header -->

    <main class="main">
        @yield('main-content')
    </main>
</div>

@include('site.layout.widgets.scrollToTop')

@include('site.layout.widgets.mobileMenu')

@include('site.layout.widgets.signInSignUpModal')

@include('site.layout.footer.footerTop')
@yield('footerMiddle')
@include('site.layout.footer.footerBottom')

{{--<div class="container newsletter-popup-container mfp-hide" id="newsletter-popup-form">--}}
{{--    <div class="row justify-content-center">--}}
{{--        <div class="col-10">--}}
{{--            <div class="row no-gutters bg-white newsletter-popup-content">--}}
{{--                <div class="col-xl-3-5col col-lg-7 banner-content-wrap">--}}
{{--                    <div class="banner-content text-center">--}}
{{--                        <img src="{{url('site/assets/images/popup/newsletter/logo.png')}}" class="logo" alt="logo" width="60"--}}
{{--                             height="15">--}}
{{--                        <h2 class="banner-title">دریافت <span>25<light>%</light></span> تخفیف</h2>--}}
{{--                        <p>با عضویت در خبرنامه فروشگاه ما، یک تخفیف 25 درصدی دریافت کنید و از جدیدترین تخفیف ها مطلع--}}
{{--                            شوید</p>--}}
{{--                        <form action="#">--}}
{{--                            <div class="input-group input-group-round">--}}
{{--                                <input type="email" class="form-control form-control-white" placeholder="ایمیل شما"--}}
{{--                                       aria-label="Email Adress" required>--}}
{{--                                <div class="input-group-append">--}}
{{--                                    <button class="btn" type="submit"><span>تایید</span></button>--}}
{{--                                </div><!-- .End .input-group-append -->--}}
{{--                            </div><!-- .End .input-group -->--}}
{{--                        </form>--}}
{{--                        <div class="custom-control custom-checkbox">--}}
{{--                            <input type="checkbox" class="custom-control-input" id="register-policy-2" required>--}}
{{--                            <label class="custom-control-label" for="register-policy-2">این پنجره را دوباره--}}
{{--                                نشان نده</label>--}}
{{--                        </div><!-- End .custom-checkbox -->--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-xl-2-5col col-lg-5 ">--}}
{{--                    <img src="{{url('site/assets/images/popup/newsletter/img-1.jpg')}}" class="newsletter-img" alt="newsletter">--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
<!-- Plugins JS File -->
<script src="{{url('site/assets/js/jquery.min.js')}}"></script>
<script src="{{url('site/assets/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{url('site/assets/js/jquery.hoverIntent.min.js')}}"></script>
<script src="{{url('site/assets/js/jquery.waypoints.min.js')}}"></script>
<script src="{{url('site/assets/js/superfish.min.js')}}"></script>
<script src="{{url('site/assets/js/owl.carousel.min.js')}}"></script>
<script src="{{url('site/assets/js/bootstrap-input-spinner.js')}}"></script>
<script src="{{url('site/assets/js/jquery.plugin.min.js')}}"></script>
<script src="{{url('site/assets/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{url('site/assets/js/jquery.countdown.min.js')}}"></script>
@yield('footer_scripts')
<!-- Main JS File -->
<script src="{{url('site/assets/js/main.js')}}"></script>
<script src="{{url('site/assets/js/demos/demo-4.js')}}"></script>
</body>

</html>
