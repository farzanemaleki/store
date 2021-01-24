<footer class="footer">

    <!-- End .cta -->
    <div class="footer-top mt-5 pt-3">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="widget">
                        <h4 class="widget-title">لینک های مفید</h4>
                        <!-- End .widget-title -->

                        <ul class="widget-list">
                            <li><a href="{{route('site.aboutUs.index')}}">درباره ما</a></li>
                            <li><a href="{{route('site.Q&A.index')}}">سوالات متداول</a></li>
                            <li><a href="{{route('site.contactUs.index')}}">تماس با ما</a></li>
                        </ul>
                        <!-- End .widget-list -->
                    </div>
                    <!-- End .widget -->
                </div>
                <!-- End .col-sm-4 -->

                <div class="col-sm-4">
                    <div class="widget">
                        <h4 class="widget-title">حساب کاربری</h4>
                        <!-- End .widget-title -->

                        <ul class="widget-list">
                            <li><a href="{{route('login')}}">ورود</a></li>
                            <li><a href="
                            @if(Auth::guest())
                                    {{route('login')}}
                                @else
                                    {{route('user.account.index')}}
                            @endif
                                    ">صفحه شما</a></li>
                            <li><a href="{{route('site.cart.index')}}">سبد خرید</a></li>
                        </ul>
                        <!-- End .widget-list -->
                    </div>
                    <!-- End .widget -->
                </div>
                <div class="col-sm-4">
                    <div class="widget widget-about">
                        <img src="{{url('')}}{{$siteInfo->company_logo}}" class="footer-logo" alt="Footer Logo" width="50" height="15">


                        <span class="social-label text-dark mb-5">{{$siteInfo->company_name}} را در شبکه‌های اجتماعی دنبال کنید:</span>
                        <div class="social-icons social-icons-color m-5 text-center">
                            @foreach($allsocialMedia as $media)
                            <a href="{{$media->address}}" target="_blank">
                                <img src="{{url('')}}{{$media->icon}}" alt="{{$media->title}}" width="50" height="50" />
                            </a>
                            @endforeach
                        </div>
                        <!-- End .soial-icons -->

                        <!-- End .widget-call -->
                    </div>
                    <!-- End .widget about-widget -->
                </div>
                <!-- End .col-sm-6 col-lg-3 -->
                <!-- End .col-sm-6 col-lg-3 -->
            </div>
            <!-- End .row -->
        </div>
        <!-- End .container -->
    </div>
    <!-- End .footer-middle -->

</footer>
<!-- End .footer -->
