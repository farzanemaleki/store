@extends('site.layout.inc.main')
@section('page-title')
    دسته بندی "نام دسته بندی"
@endsection
@section('main-content')
    <main class="main">
        <div class="page-header text-center" style="background-image: url('{{url('site/assets/images/page-header-bg.jpg')}}')">
            <div class="container">
                <h1 class="page-title">نام دسته بندی<span>اخبار</span></h1>
            </div><!-- End .container -->
        </div><!-- End .page-header -->
        <nav aria-label="breadcrumb" class="breadcrumb-nav mb-3">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('homepage')}}">خانه</a></li>
                    <li class="breadcrumb-item"><a href="#">اخبار</a></li>
                    <li class="breadcrumb-item active" aria-current="page">نام دسته بندی</li>
                </ol>
            </div><!-- End .container -->
        </nav><!-- End .breadcrumb-nav -->

        <div class="page-content">
            <div class="container">
                <nav class="blog-nav">
                    <ul class="menu-cat entry-filter justify-content-center">
                        <li class="active"><a href="#" data-filter="*">همه اخبار<span>9</span></a></li>
                        <li><a href="#" data-filter=".lifestyle">سبک زندگی<span>3</span></a></li>
                        <li><a href="#" data-filter=".shopping">فروشگاه<span>1</span></a></li>
                        <li><a href="#" data-filter=".fashion">مد<span>2</span></a></li>
                        <li><a href="#" data-filter=".travel">سفر<span>4</span></a></li>
                        <li><a href="#" data-filter=".hobbies">سرگرمی<span>2</span></a></li>
                    </ul><!-- End .blog-menu -->
                </nav><!-- End .blog-nav -->
                <!---------blog category content -------->
                <div class="entry-container max-col-3" data-layout="fitRows" style="position: relative; height: 4369.07px;">
                    <div class="entry-item lifestyle shopping col-sm-6 col-lg-4" style="position: absolute; right: 0px; top: 0px;">
                        <article class="entry entry-grid text-center">
                            <figure class="entry-media">
                                <a href="single.html">
                                    <img src="assets/images/blog/grid/3cols/post-1.jpg" alt="توضیحات عکس">
                                </a>
                            </figure><!-- End .entry-media -->

                            <div class="entry-body">
                                <div class="entry-meta">
                                        <span class="entry-author">
                                            نویسنده : <a href="#">مدیر سایت</a>
                                        </span>
                                    <span class="meta-separator">|</span>
                                    <a href="#">22 فروردین 1399</a>
                                    <span class="meta-separator">|</span>
                                    <a href="#">2 دیدگاه</a>
                                </div><!-- End .entry-meta -->

                                <h2 class="entry-title text-center">
                                    <a href="single.html">لورم ایپسوم متن ساختگی با تولید سادگی</a>
                                </h2><!-- End .entry-title -->

                                <div class="entry-cats text-center">
                                    <a href="#">سبک زندگی</a>،
                                    <a href="#">فروشگاه</a>
                                </div><!-- End .entry-cats -->

                                <div class="entry-content text-center">
                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم لورم ایپسوم متن ساختگی با تولید
                                        سادگی نامفهوم لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم لورم ایپسوم متن
                                        ساختگی با تولید سادگی نامفهوم ...</p>
                                    <a href="single.html" class="read-more">ادامه
                                        خواندن</a>
                                </div><!-- End .entry-content -->
                            </div><!-- End .entry-body -->
                        </article><!-- End .entry -->
                    </div><!-- End .entry-item -->

                    <div class="entry-item lifestyle col-sm-6 col-lg-4" style="position: absolute; right: 0px; top: 476.438px;">
                        <article class="entry entry-grid text-center">
                            <figure class="entry-media entry-video">
                                <a href="single.html">
                                    <img src="assets/images/blog/grid/3cols/post-2.jpg" alt="توضیحات عکس">
                                </a>
                            </figure><!-- End .entry-media -->

                            <div class="entry-body">
                                <div class="entry-meta">
                                        <span class="entry-author">
                                            نویسنده : <a href="#">مدیر سایت</a>
                                        </span>
                                    <span class="meta-separator">|</span>
                                    <a href="#">21 فروردین 1399</a>
                                    <span class="meta-separator">|</span>
                                    <a href="#">0 دیدگاه</a>
                                </div><!-- End .entry-meta -->

                                <h2 class="entry-title text-center">
                                    <a href="single.html">لورم ایپسوم متن ساختگی با تولید سادگی</a>
                                </h2><!-- End .entry-title -->

                                <div class="entry-cats text-center">
                                    <a href="#">سبک زندگی</a>
                                </div><!-- End .entry-cats -->

                                <div class="entry-content text-center">
                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم لورم ایپسوم متن ساختگی با تولید
                                        سادگی نامفهوم لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم لورم ایپسوم متن
                                        ساختگی با تولید سادگی نامفهوم ...</p>
                                    <a href="single.html" class="read-more">ادامه
                                        خواندن</a>
                                </div><!-- End .entry-content -->
                            </div><!-- End .entry-body -->
                        </article><!-- End .entry -->
                    </div><!-- End .entry-item -->

                    <div class="entry-item lifestyle fashion col-sm-6 col-lg-4" style="position: absolute; right: 0px; top: 952.876px;">
                        <article class="entry entry-grid text-center">
                            <figure class="entry-media">
                                <div class="owl-carousel owl-simple owl-light owl-nav-inside owl-rtl owl-loaded owl-drag" data-toggle="owl" data-owl-options="{&quot;rtl&quot;: true}">


                                    <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(630px, 0px, 0px); transition: all 0s ease 0s; width: 1890px;"><div class="owl-item cloned" style="width: 315px;"><a href="single.html">
                                                    <img src="assets/images/blog/grid/3cols/post-3.jpg" alt="توضیحات عکس">
                                                </a></div><div class="owl-item cloned" style="width: 315px;"><a href="single.html">
                                                    <img src="assets/images/blog/grid/3cols/post-4.jpg" alt="توضیحات عکس">
                                                </a></div><div class="owl-item active" style="width: 315px;"><a href="single.html">
                                                    <img src="assets/images/blog/grid/3cols/post-3.jpg" alt="توضیحات عکس">
                                                </a></div><div class="owl-item" style="width: 315px;"><a href="single.html">
                                                    <img src="assets/images/blog/grid/3cols/post-4.jpg" alt="توضیحات عکس">
                                                </a></div><div class="owl-item cloned" style="width: 315px;"><a href="single.html">
                                                    <img src="assets/images/blog/grid/3cols/post-3.jpg" alt="توضیحات عکس">
                                                </a></div><div class="owl-item cloned" style="width: 315px;"><a href="single.html">
                                                    <img src="assets/images/blog/grid/3cols/post-4.jpg" alt="توضیحات عکس">
                                                </a></div></div></div><div class="owl-nav"><button type="button" role="presentation" class="owl-prev"><i class="icon-angle-left"></i></button><button type="button" role="presentation" class="owl-next"><i class="icon-angle-right"></i></button></div><div class="owl-dots"><button role="button" class="owl-dot active"><span></span></button><button role="button" class="owl-dot"><span></span></button></div></div><!-- End .owl-carousel -->
                            </figure><!-- End .entry-media -->

                            <div class="entry-body">
                                <div class="entry-meta">
                                        <span class="entry-author">
                                            نویسنده : <a href="#">مدیر سایت</a>
                                        </span>
                                    <span class="meta-separator">|</span>
                                    <a href="#">18 فروردین 1399</a>
                                    <span class="meta-separator">|</span>
                                    <a href="#">3 دیدگاه</a>
                                </div><!-- End .entry-meta -->

                                <h2 class="entry-title text-center">
                                    <a href="single.html">لورم ایپسوم متن ساختگی.</a>
                                </h2><!-- End .entry-title -->

                                <div class="entry-cats text-center">
                                    <a href="#">مد</a>،
                                    <a href="#">سبک زندگی</a>
                                </div><!-- End .entry-cats -->

                                <div class="entry-content text-center">
                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم لورم ایپسوم متن ساختگی با تولید
                                        سادگی نامفهوم لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم لورم ایپسوم متن
                                        ساختگی با تولید سادگی نامفهوم ... </p>
                                    <a href="single.html" class="read-more">ادامه
                                        خواندن</a>
                                </div><!-- End .entry-content -->
                            </div><!-- End .entry-body -->
                        </article><!-- End .entry -->
                    </div><!-- End .entry-item -->

                    <div class="entry-item travel col-sm-6 col-lg-4" style="position: absolute; right: 0px; top: 1469.88px;">
                        <article class="entry entry-grid text-center">
                            <figure class="entry-media">
                                <a href="single.html">
                                    <img src="assets/images/blog/grid/3cols/post-4.jpg" alt="توضیحات عکس">
                                </a>
                            </figure><!-- End .entry-media -->

                            <div class="entry-body">
                                <div class="entry-meta">
                                        <span class="entry-author">
                                            نویسنده : <a href="#">مدیر سایت</a>
                                        </span>
                                    <span class="meta-separator">|</span>
                                    <a href="#">15 فروردین 1399</a>
                                    <span class="meta-separator">|</span>
                                    <a href="#">4 دیدگاه</a>
                                </div><!-- End .entry-meta -->

                                <h2 class="entry-title text-center">
                                    <a href="single.html">لورم ایپسوم متن ساختگی</a>
                                </h2><!-- End .entry-title -->

                                <div class="entry-cats text-center">
                                    <a href="#">سفر</a>
                                </div><!-- End .entry-cats -->

                                <div class="entry-content text-center">
                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم لورم ایپسوم متن ساختگی با تولید
                                        سادگی نامفهوم لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم لورم ایپسوم متن
                                        ساختگی با تولید سادگی نامفهوم ... </p>
                                    <a href="single.html" class="read-more">ادامه
                                        خواندن</a>
                                </div><!-- End .entry-content -->
                            </div><!-- End .entry-body -->
                        </article><!-- End .entry -->
                    </div><!-- End .entry-item -->

                    <div class="entry-item travel hobbies col-sm-6 col-lg-4" style="position: absolute; right: 0px; top: 1946.31px;">
                        <article class="entry entry-grid text-center">
                            <figure class="entry-media">
                                <a href="single.html">
                                    <img src="assets/images/blog/grid/3cols/post-5.jpg" alt="توضیحات عکس">
                                </a>
                            </figure><!-- End .entry-media -->

                            <div class="entry-body">
                                <div class="entry-meta">
                                        <span class="entry-author">
                                            نویسنده : <a href="#">مدیر سایت</a>
                                        </span>
                                    <span class="meta-separator">|</span>
                                    <a href="#">11 فروردین 1399</a>
                                    <span class="meta-separator">|</span>
                                    <a href="#">2 دیدگاه</a>
                                </div><!-- End .entry-meta -->

                                <h2 class="entry-title text-center">
                                    <a href="single.html">لورم ایپسوم متن ساختگی با تولید سادگی</a>
                                </h2><!-- End .entry-title -->

                                <div class="entry-cats text-center">
                                    <a href="#">سفر</a>،
                                    <a href="#">سرگرمی</a>
                                </div><!-- End .entry-cats -->

                                <div class="entry-content text-center">
                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم لورم ایپسوم متن ساختگی با تولید
                                        سادگی نامفهوم لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم لورم ایپسوم متن
                                        ساختگی با تولید سادگی نامفهوم ... </p>
                                    <a href="single.html" class="read-more">ادامه
                                        خواندن</a>
                                </div><!-- End .entry-content -->
                            </div><!-- End .entry-body -->
                        </article><!-- End .entry -->
                    </div><!-- End .entry-item -->

                    <div class="entry-item hobbies col-sm-6 col-lg-4" style="position: absolute; right: 0px; top: 2422.75px;">
                        <article class="entry entry-grid text-center">
                            <figure class="entry-media">
                                <a href="single.html">
                                    <img src="assets/images/blog/grid/3cols/post-6.jpg" alt="توضیحات عکس">
                                </a>
                            </figure><!-- End .entry-media -->

                            <div class="entry-body">
                                <div class="entry-meta">
                                        <span class="entry-author">
                                            نویسنده : <a href="#">مدیر سایت</a>
                                        </span>
                                    <span class="meta-separator">|</span>
                                    <a href="#">10 فروردین 1399</a>
                                    <span class="meta-separator">|</span>
                                    <a href="#">4 دیدگاه</a>
                                </div><!-- End .entry-meta -->

                                <h2 class="entry-title text-center">
                                    <a href="single.html">لورم ایپسوم متن ساختگی</a>
                                </h2><!-- End .entry-title -->

                                <div class="entry-cats text-center">
                                    <a href="#">سرگرمی</a>
                                </div><!-- End .entry-cats -->

                                <div class="entry-content text-center">
                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم لورم ایپسوم متن ساختگی با تولید
                                        سادگی نامفهوم لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم لورم ایپسوم متن
                                        ساختگی با تولید سادگی نامفهوم ... </p>
                                    <a href="single.html" class="read-more">ادامه
                                        خواندن</a>
                                </div><!-- End .entry-content -->
                            </div><!-- End .entry-body -->
                        </article><!-- End .entry -->
                    </div><!-- End .entry-item -->

                    <div class="entry-item travel col-sm-6 col-lg-4" style="position: absolute; right: 0px; top: 2899.19px;">
                        <article class="entry entry-grid text-center">
                            <figure class="entry-media">
                                <div class="owl-carousel owl-simple owl-light owl-nav-inside owl-rtl owl-loaded owl-drag" data-toggle="owl" data-owl-options="{&quot;rtl&quot;: true}">


                                    <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(630px, 0px, 0px); transition: all 0s ease 0s; width: 1890px;"><div class="owl-item cloned" style="width: 315px;"><a href="single.html">
                                                    <img src="assets/images/blog/grid/3cols/post-7.jpg" alt="توضیحات عکس">
                                                </a></div><div class="owl-item cloned" style="width: 315px;"><a href="single.html">
                                                    <img src="assets/images/blog/grid/3cols/post-6.jpg" alt="توضیحات عکس">
                                                </a></div><div class="owl-item active" style="width: 315px;"><a href="single.html">
                                                    <img src="assets/images/blog/grid/3cols/post-7.jpg" alt="توضیحات عکس">
                                                </a></div><div class="owl-item" style="width: 315px;"><a href="single.html">
                                                    <img src="assets/images/blog/grid/3cols/post-6.jpg" alt="توضیحات عکس">
                                                </a></div><div class="owl-item cloned" style="width: 315px;"><a href="single.html">
                                                    <img src="assets/images/blog/grid/3cols/post-7.jpg" alt="توضیحات عکس">
                                                </a></div><div class="owl-item cloned" style="width: 315px;"><a href="single.html">
                                                    <img src="assets/images/blog/grid/3cols/post-6.jpg" alt="توضیحات عکس">
                                                </a></div></div></div><div class="owl-nav"><button type="button" role="presentation" class="owl-prev"><i class="icon-angle-left"></i></button><button type="button" role="presentation" class="owl-next"><i class="icon-angle-right"></i></button></div><div class="owl-dots"><button role="button" class="owl-dot active"><span></span></button><button role="button" class="owl-dot"><span></span></button></div></div><!-- End .owl-carousel -->
                            </figure><!-- End .entry-media -->

                            <div class="entry-body">
                                <div class="entry-meta">
                                        <span class="entry-author">
                                            نویسنده : <a href="#">مدیر سایت</a>
                                        </span>
                                    <span class="meta-separator">|</span>
                                    <a href="#">11 فروردین 1399</a>
                                    <span class="meta-separator">|</span>
                                    <a href="#">3 دیدگاه</a>
                                </div><!-- End .entry-meta -->

                                <h2 class="entry-title text-center">
                                    <a href="single.html">لورم ایپسوم متن ساختگی.</a>
                                </h2><!-- End .entry-title -->

                                <div class="entry-cats text-center">
                                    <a href="#">سفر</a>
                                </div><!-- End .entry-cats -->

                                <div class="entry-content text-center">
                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم لورم ایپسوم متن ساختگی با تولید
                                        سادگی نامفهوم لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم لورم ایپسوم متن
                                        ساختگی با تولید سادگی نامفهوم ... </p>
                                    <a href="single.html" class="read-more">ادامه
                                        خواندن</a>
                                </div><!-- End .entry-content -->
                            </div><!-- End .entry-body -->
                        </article><!-- End .entry -->
                    </div><!-- End .entry-item -->

                    <div class="entry-item fashion col-sm-6 col-lg-4" style="position: absolute; right: 0px; top: 3416.19px;">
                        <article class="entry entry-grid text-center">
                            <figure class="entry-media">
                                <a href="single.html">
                                    <img src="assets/images/blog/grid/3cols/post-8.jpg" alt="توضیحات عکس">
                                </a>
                            </figure><!-- End .entry-media -->

                            <div class="entry-body">
                                <div class="entry-meta">
                                        <span class="entry-author">
                                            نویسنده : <a href="#">مدیر سایت</a>
                                        </span>
                                    <span class="meta-separator">|</span>
                                    <a href="#">8 فروردین 1399</a>
                                    <span class="meta-separator">|</span>
                                    <a href="#">0 دیدگاه</a>
                                </div><!-- End .entry-meta -->

                                <h2 class="entry-title text-center">
                                    <a href="single.html">لورم ایپسوم متن ساختگی </a>
                                </h2><!-- End .entry-title -->

                                <div class="entry-cats text-center">
                                    <a href="#">مد</a>
                                </div><!-- End .entry-cats -->

                                <div class="entry-content text-center">
                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم لورم ایپسوم متن ساختگی با تولید
                                        سادگی نامفهوم لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم لورم ایپسوم متن
                                        ساختگی با تولید سادگی نامفهوم ... </p>
                                    <a href="single.html" class="read-more">ادامه
                                        خواندن</a>
                                </div><!-- End .entry-content -->
                            </div><!-- End .entry-body -->
                        </article><!-- End .entry -->
                    </div><!-- End .entry-item -->

                    <div class="entry-item travel col-sm-6 col-lg-4" style="position: absolute; right: 0px; top: 3892.63px;">
                        <article class="entry entry-grid text-center">
                            <figure class="entry-media">
                                <a href="single.html">
                                    <img src="assets/images/blog/grid/3cols/post-9.jpg" alt="توضیحات عکس">
                                </a>
                            </figure><!-- End .entry-media -->

                            <div class="entry-body">
                                <div class="entry-meta">
                                        <span class="entry-author">
                                            نویسنده : <a href="#">مدیر سایت</a>
                                        </span>
                                    <span class="meta-separator">|</span>
                                    <a href="#">7 فروردین 1399</a>
                                    <span class="meta-separator">|</span>
                                    <a href="#">5 دیدگاه</a>
                                </div><!-- End .entry-meta -->

                                <h2 class="entry-title text-center">
                                    <a href="single.html">لورم ایپسوم متن ساختگی با تولید سادگی</a>
                                </h2><!-- End .entry-title -->

                                <div class="entry-cats text-center">
                                    <a href="#">سفر</a>
                                </div><!-- End .entry-cats -->

                                <div class="entry-content text-center">
                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم لورم ایپسوم متن ساختگی با تولید
                                        سادگی نامفهوم لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم لورم ایپسوم متن
                                        ساختگی با تولید سادگی نامفهوم ...</p>
                                    <a href="single.html" class="read-more">ادامه
                                        خواندن</a>
                                </div><!-- End .entry-content -->
                            </div><!-- End .entry-body -->
                        </article><!-- End .entry -->
                    </div><!-- End .entry-item -->
                </div><!-- End .entry-container -->
                <!---------------------pagination----------->
                <nav aria-label="Page navigation">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled">
                            <a class="page-link page-link-prev" href="#" aria-label="Previous" tabindex="-1" aria-disabled="true">
                                <span aria-hidden="true"><i class="icon-long-arrow-right"></i></span>قبلی
                            </a>
                        </li>
                        <li class="page-item active" aria-current="page"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item">
                            <a class="page-link page-link-next" href="#" aria-label="Next">
                                بعدی<span aria-hidden="true"><i class="icon-long-arrow-left"></i></span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div><!-- End .container -->
        </div>
    </main>
@endsection
