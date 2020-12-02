<div class="header-bottom sticky-header">
    <div class="container">
        <div class="header-left">
            <div class="dropdown category-dropdown" style="margin-right: -50px">
                <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static" title="فهرست دسته بندی ها">
                    فهرست دسته بندی ها <i class="icon-angle-down"></i>
                </a>

                <div class="dropdown-menu">
                    <nav class="side-nav">
                        <ul class="menu-vertical sf-arrows" style="margin-right: 0px">
                            <li>
                                <a href="{{ route('site.productCategory.show' , 2) }}">
                                    تخفیف های روزانه
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('site.productCategory.show' , 3) }}">
                                    هدیه ها
                                </a>
                            </li>
                            @foreach($allcategory as $category)
                                <li  >
                                    <a href="{{ route('site.productCategory.show' , $category->id) }}">{{ $category->title }}</a>
                                </li>
                            @endforeach
                        </ul>
                        <!-- End .menu-vertical -->
                    </nav>
                    <!-- End .side-nav -->
                </div>
                <!-- End .dropdown-menu -->
            </div>
            <!-- End .category-dropdown -->
        </div>
        <!-- End .header-left -->

        <div class="header-center">
            <nav class="main-nav">
                <ul class="menu">
                    <li class="megamenu-container">
                        <a href="{{ route('homepage') }}" class="">خانه</a>
                    </li>
                    <li>
                        <a href="{{route('site.shop.index')}}" class="sf-with-ul">فروشگاه</a>

                        <div class="megamenu megamenu-md">
                            <div class="row no-gutters">
                                <div class="col-md-8">
                                    <div class="menu-col">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="menu-title">فروشگاه با سایدبار</div>
                                                <!-- End .menu-title -->
                                                <ul>
                                                    <li><a href="category-list.html">فروشگاه لیست</a></li>
                                                    <li><a href="category-2cols.html">فروشگاه 2 ستونه</a>
                                                    </li>
                                                    <li><a href="category.html">فروشگاه 3 ستونه</a></li>
                                                    <li><a href="category-4cols.html">فروشگاه 4 ستونه</a>
                                                    </li>
                                                    <li><a href="category-market.html"><span>فروشگاه
                                                                            بازار<span
                                                                    class="tip tip-new">جدید</span></span></a>
                                                    </li>
                                                </ul>

                                                <div class="menu-title">فروشگاه بدون سایدبار</div>
                                                <!-- End .menu-title -->
                                                <ul>
                                                    <li><a href="category-boxed.html"><span>فروشگاه با حالت
                                                                            باکس<span
                                                                    class="tip tip-hot">ویژه</span></span></a>
                                                    </li>
                                                    <li><a href="category-fullwidth.html">فروشگاه تمام
                                                            صفحه</a></li>
                                                </ul>
                                            </div>
                                            <!-- End .col-md-6 -->

                                            <div class="col-md-6">
                                                <div class="menu-title">دسته بندی محصولات</div>
                                                <!-- End .menu-title -->
                                                <ul>
                                                    <li><a href="product-category-boxed.html">دسته بندی
                                                            محصولات با حالت باکس</a></li>
                                                    <li><a href="product-category-fullwidth.html"><span>دسته
                                                                            بندی محصولات تمام صفحه<span
                                                                    class="tip tip-new">جدید</span></span></a>
                                                    </li>
                                                </ul>
                                                <div class="menu-title">صفحات فروشگاه</div>
                                                <!-- End .menu-title -->
                                                <ul>
                                                    <li><a href="cart.html">سبد خرید</a></li>
                                                    <li><a href="checkout.html">پرداخت</a></li>
                                                    <li><a href="wishlist.html">لیست علاقه مندی ها</a></li>
                                                    <li><a href="dashboard.html">داشبورد</a></li>
                                                </ul>
                                            </div>
                                            <!-- End .col-md-6 -->
                                        </div>
                                        <!-- End .row -->
                                    </div>
                                    <!-- End .menu-col -->
                                </div>
                                <!-- End .col-md-8 -->

                                <div class="col-md-4">
                                    <div class="banner banner-overlay">
                                        <a href="category.html" class="banner banner-menu">
                                            <img src="{{ url('site/assets/images/menu/banner-1.jpg') }}" alt="بنر">

                                            <div class="banner-content banner-content-top">
                                                <div class="banner-title text-white">آخرین
                                                    <br>شانس<br><span><strong>فروش</strong></span></div>
                                                <!-- End .banner-title -->
                                            </div>
                                            <!-- End .banner-content -->
                                        </a>
                                    </div>
                                    <!-- End .banner banner-overlay -->
                                </div>
                                <!-- End .col-md-4 -->
                            </div>
                            <!-- End .row -->
                        </div>
                        <!-- End .megamenu megamenu-md -->
                    </li>
                    <li>
                        <a href="product.html" class="sf-with-ul">محصول</a>

                        <div class="megamenu megamenu-sm">
                            <div class="row no-gutters">
                                <div class="col-md-6">
                                    <div class="menu-col">
                                        <div class="menu-title">جزئیات محصول</div>
                                        <!-- End .menu-title -->
                                        <ul>
                                            <li><a href="product.html">پیش فرض</a></li>
                                            <li><a href="product-centered.html">توضیحات وسط چین</a></li>
                                            <li><a href="product-extended.html"><span>توضیحات گسترده<span
                                                            class="tip tip-new">جدید</span></span></a></li>
                                            <li><a href="product-gallery.html">گالری</a></li>
                                            <li><a href="product-sticky.html">اطلاعات چسبیده</a></li>
                                            <li><a href="product-sidebar.html">صفحه جمع با سایدبار</a></li>
                                            <li><a href="product-fullwidth.html">تمام صفحه</a></li>
                                            <li><a href="product-masonry.html">اطلاعات چسبیده</a></li>
                                        </ul>
                                    </div>
                                    <!-- End .menu-col -->
                                </div>
                                <!-- End .col-md-6 -->

                                <div class="col-md-6">
                                    <div class="banner banner-overlay">
                                        <a href="category.html">
                                            <img src="assets/images/menu/banner-2.jpg" alt="بنر">

                                            <div class="banner-content banner-content-bottom">
                                                <div class="banner-title text-white">محصولات جدید
                                                    <br><span><strong>بهار 1399</strong></span>
                                                </div>
                                                <!-- End .banner-title -->
                                            </div>
                                            <!-- End .banner-content -->
                                        </a>
                                    </div>
                                    <!-- End .banner -->
                                </div>
                                <!-- End .col-md-6 -->
                            </div>
                            <!-- End .row -->
                        </div>
                        <!-- End .megamenu megamenu-sm -->
                    </li>
                    <li>
                        <a href="#" class="sf-with-ul">صفحات </a>

                        <ul>
                            <li>
                                <a href="about.html" class="sf-with-ul">درباره ما</a>

                                <ul>
                                    <li><a href="about.html">درباره ما 01</a></li>
                                    <li><a href="about-2.html">درباره ما 02</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="contact.html" class="sf-with-ul">تماس با ما</a>

                                <ul>
                                    <li><a href="contact.html">تماس با ما 01</a></li>
                                    <li><a href="contact-2.html">تماس با ما 02</a></li>
                                </ul>
                            </li>
                            <li><a href="login.html">ورود</a></li>
                            <li><a href="faq.html">سوالات متداول</a></li>
                            <li><a href="404.html">خطای 404</a></li>
                            <li><a href="coming-soon.html">به زودی</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="blog.html" class="sf-with-ul">اخبار</a>

                        <ul>
                            <li><a href="blog.html">کلاسیک</a></li>
                            <li><a href="blog-listing.html">لیست</a></li>
                            <li>
                                <a href="#">شبکه بندی</a>
                                <ul>
                                    <li><a href="blog-grid-2cols.html">2 ستونه</a></li>
                                    <li><a href="blog-grid-3cols.html">3 ستونه</a></li>
                                    <li><a href="blog-grid-4cols.html">4 ستونه</a></li>
                                    <li><a href="blog-grid-sidebar.html">با سایدبار</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">سایز های مختلف</a>
                                <ul>
                                    <li><a href="blog-masonry-2cols.html">2 ستونه</a></li>
                                    <li><a href="blog-masonry-3cols.html">3 ستونه</a></li>
                                    <li><a href="blog-masonry-4cols.html">4 ستونه</a></li>
                                    <li><a href="blog-masonry-sidebar.html">با سایدبار</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">ماسک</a>
                                <ul>
                                    <li><a href="blog-mask-grid.html">نوع 1</a></li>
                                    <li><a href="blog-mask-masonry.html">نوع 2</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">پست تکی</a>
                                <ul>
                                    <li><a href="single.html">پیش فرض با سایدبار</a></li>
                                    <li><a href="single-fullwidth.html">تمام صفحه بدون سایدبار</a></li>
                                    <li><a href="single-fullwidth-sidebar.html">تمام صفحه باسایدبار</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="elements-list.html" class="sf-with-ul">عناصر طراحی</a>

                        <ul>
                            <li><a href="elements-products.html">محصولات</a></li>
                            <li><a href="elements-typography.html">تایپوگرافی</a></li>
                            <li><a href="elements-titles.html">عناوین</a></li>
                            <li><a href="elements-banners.html">بنرها</a></li>

                            <li><a href="elements-product-category.html">دسته بندی محصولات</a></li>
                            <li><a href="elements-video-banners.html">بنرهای ویدیویی</a></li>
                            <li><a href="elements-buttons.html">دکمه ها</a></li>
                            <li><a href="elements-accordions.html">آکاردئون</a></li>
                            <li><a href="elements-tabs.html">تب ها</a></li>
                            <li><a href="elements-testimonials.html">توصیف و نقل قول</a></li>
                            <li><a href="elements-blog-posts.html">اخبار</a></li>
                            <li><a href="elements-portfolio.html">نمونه کار</a></li>
                            <li><a href="elements-cta.html">پاسخ به عمل</a></li>
                            <li><a href="elements-icon-boxes.html">باکس های آیکون</a></li>
                        </ul>
                    </li>
                </ul>
                <!-- End .menu -->
            </nav>
            <!-- End .main-nav -->
        </div>
        <!-- End .header-center -->

        <div class="header-right">
            <i class="la la-lightbulb-o"></i>
            <p>خرید<span class="highlight">&nbsp;تا 30 درصد تخفیف</span></p>
        </div>
    </div>
    <!-- End .container -->
</div>
<!-- End .header-bottom -->
