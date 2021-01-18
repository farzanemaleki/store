<footer class="footer">
    <div class="cta bg-image bg-dark pt-4 pb-5 mb-0" style="background-image: url({{url('site/assets/images/demos/demo-4/bg-5.jpg')}});">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-10 col-md-8 col-lg-6">
                    <div class="cta-heading text-center">
                        <h3 class="cta-title text-white">دریافت آخرین پیشنهادات</h3>
                        <!-- End .cta-title -->
                        <p class="cta-desc text-white text-center">و دریافت <span class="font-weight-normal">کد
                                        تخفیف 20 هزار تومانی</span> برای اولین خرید</p>
                        <!-- End .cta-desc -->
                    </div>
                    <!-- End .text-center -->

                    <form action="#">
                        <div class="input-group input-group-round">
                            <input type="email" class="form-control form-control-white" placeholder="آدرس ایمیل خود را وارد کنید" aria-label="Email Adress" required>
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit"><span>عضویت</span><i
                                        class="icon-long-arrow-left"></i></button>
                            </div>
                            <!-- .End .input-group-append -->
                        </div>
                        <!-- .End .input-group -->
                    </form>
                </div>
                <!-- End .col-sm-10 col-md-8 col-lg-6 -->
            </div>
            <!-- End .row -->
        </div>
        <!-- End .container -->
    </div>
    <!-- End .cta -->
    <div class="footer-top mt-5">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-3">
                    <div class="widget">
                        <h4 class="widget-title">لینک های مفید</h4>
                        <!-- End .widget-title -->

                        <ul class="widget-list">
                            <li><a href="about.html">درباره ما</a></li>
                            <li><a href="#">خدمات</a></li>
                            <li><a href="#">نحوه خرید</a></li>
                            <li><a href="faq.html">سوالات متداول</a></li>
                            <li><a href="contact.html">تماس با ما</a></li>
                        </ul>
                        <!-- End .widget-list -->
                    </div>
                    <!-- End .widget -->
                </div>
                <!-- End .col-sm-6 col-lg-3 -->

                <div class="col-sm-6 col-lg-3">
                    <div class="widget">
                        <h4 class="widget-title">خدمات مشتری</h4>
                        <!-- End .widget-title -->

                        <ul class="widget-list">
                            <li><a href="#">شیوه پرداخت</a></li>
                            <li><a href="#">گارانتی بازگشت وجه</a></li>
                            <li><a href="#">شیوه ارسال محصولات</a></li>
                            <li><a href="#">قوانین و مقررات</a></li>
                            <li><a href="#">خط مشی</a></li>
                        </ul>
                        <!-- End .widget-list -->
                    </div>
                    <!-- End .widget -->
                </div>
                <!-- End .col-sm-6 col-lg-3 -->

                <div class="col-sm-6 col-lg-3">
                    <div class="widget">
                        <h4 class="widget-title">حساب کاربری</h4>
                        <!-- End .widget-title -->

                        <ul class="widget-list">
                            <li><a href="#">ورود</a></li>
                            <li><a href="cart.html">سبد خرید</a></li>
                            <li><a href="#">لیست علاقه مندی ها</a></li>
                            <li><a href="#">پیگیری سفارشات</a></li>
                            <li><a href="#">راهنما</a></li>
                        </ul>
                        <!-- End .widget-list -->
                    </div>
                    <!-- End .widget -->
                </div>
                <div class="col-sm-6 col-lg-3">
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
