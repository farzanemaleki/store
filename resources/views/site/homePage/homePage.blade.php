@extends('site.layout.inc.main')
@section('page-title')
    صفحه اصلی
@stop
@section('main-content')
    <div class="page-wrapper">
        <header class="header header-intro-clearance header-4">
            <div class="header-top">
                <div class="container">
                    <div class="header-left">
                        <a href="tel:#"><i class="icon-phone"></i>تلفن تماس : 02155667788</a>
                    </div><!-- End .header-left -->

                    <div class="header-right">

                        <ul class="top-menu">
                            <li>
                                <a href="#">لینک ها</a>
                                <ul>
                                    <li>
                                        <div class="header-dropdown">
                                            <a href="#">فارسی</a>
                                            <div class="header-menu">
                                                <ul>
                                                    <li><a href="#">انگلیسی</a></li>
                                                    <li><a href="#">فرانسوی</a></li>
                                                    <li><a href="#">ترکی استانبولی</a></li>
                                                </ul>
                                            </div><!-- End .header-menu -->
                                        </div>
                                    </li>
                                    @auth()
                                        <li><a href="/home" >فرزانه ملکی خوش آمدید</a></li>
                                        @else()
                                    <li><a href="#signin-modal" data-toggle="modal">ورود / ثبت نام</a></li>
                                        @endauth
                                </ul>
                            </li>
                        </ul><!-- End .top-menu -->
                    </div><!-- End .header-right -->

                </div><!-- End .container -->
            </div><!-- End .header-top -->

            <div class="header-middle">
                <div class="container">
                    <div class="header-left">
                        <button class="mobile-menu-toggler">
                            <span class="sr-only">فهرست</span>
                            <i class="icon-bars"></i>
                        </button>

                        <a href="index10.html" class="logo">
                            <img src="{{url('site/assets/images/demos/demo-4/logo.png')}}" alt="Molla Logo" width="105" height="25">
                        </a>
                    </div><!-- End .header-left -->

                    <div class="header-center">
                        <div class="header-search header-search-extended header-search-visible d-none d-lg-block">
                            <a href="#" class="search-toggle" role="button"><i class="icon-search"></i></a>
                            <form action="#" method="get">
                                <div class="header-search-wrapper search-wrapper-wide">
                                    <label for="q" class="sr-only">جستجو</label>
                                    <button class="btn btn-primary" type="submit"><i class="icon-search"></i></button>
                                    <input type="search" class="form-control" name="q" id="q"
                                           placeholder="جستجوی محصولات ..." required>
                                </div><!-- End .header-search-wrapper -->
                            </form>
                        </div><!-- End .header-search -->
                    </div>

                    <div class="header-right">
                        <div class="dropdown compare-dropdown">
                            <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false" data-display="static"
                               title="مقایسه کردن محصولات" aria-label="Compare Products">
                                <div class="icon">
                                    <i class="icon-random"></i>
                                </div>
                                <p>مقایسه</p>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right">
                                <ul class="compare-products">
                                    <li class="compare-product">
                                        <a href="#" class="btn-remove" title="حذف محصول"><i class="icon-close"></i></a>
                                        <h4 class="compare-product-title"><a href="product.html">گوشی سامسونگ مدل S9</a>
                                        </h4>
                                    </li>
                                    <li class="compare-product">
                                        <a href="#" class="btn-remove" title="حذف محصول"><i class="icon-close"></i></a>
                                        <h4 class="compare-product-title"><a href="product.html">گوشی سامسونگ مدل S8</a>
                                        </h4>
                                    </li>
                                </ul>

                                <div class="compare-actions">
                                    <a href="#" class="action-link">حذف همه</a>
                                    <a href="#" class="btn btn-outline-primary-2"><span>مقایسه</span><i
                                            class="icon-long-arrow-left"></i></a>
                                </div>
                            </div><!-- End .dropdown-menu -->
                        </div><!-- End .compare-dropdown -->

                        <div class="wishlist">
                            <a href="wishlist.html" title="لیست محصولات مورد علاقه شما">
                                <div class="icon">
                                    <i class="icon-heart-o"></i>
                                    <span class="wishlist-count badge">3</span>
                                </div>
                                <p>مورد علاقه</p>
                            </a>
                        </div><!-- End .compare-dropdown -->

                        <div class="dropdown cart-dropdown">
                            <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false" data-display="static">
                                <div class="icon">
                                    <i class="icon-shopping-cart"></i>
                                    <span class="cart-count">2</span>
                                </div>
                                <p>سبد خرید</p>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right">
                                <div class="dropdown-cart-products">
                                    <div class="product">
                                        <div class="product-cart-details">
                                            <h4 class="product-title">
                                                <a href="product.html">کتونی ورزشی مخصوص دویدن رنگ بژ</a>
                                            </h4>

                                            <span class="cart-product-info">
                                                <span class="cart-product-qty">1 x </span>
                                                <span class="cart-product-qty d-inline-block  text-warning">x</span>
                                                84,000 تومان
                                            </span>
                                        </div><!-- End .product-cart-details -->

                                        <figure class="product-image-container">
                                            <a href="product.html" class="product-image">
                                                <img src="{{url('site/assets/images/products/cart/product-1.jpg')}}" alt="محصول">
                                            </a>
                                        </figure>
                                        <a href="#" class="btn-remove" title="حذف محصول"><i class="icon-close"></i></a>
                                    </div><!-- End .product -->

                                    <div class="product">
                                        <div class="product-cart-details">
                                            <h4 class="product-title">
                                                <a href="product.html">لباس زنانه آبی</a>
                                            </h4>

                                            <span class="cart-product-info">
                                                <span class="cart-product-qty">1 x </span>
                                                <span class="cart-product-qty d-inline-block  text-warning">x</span>
                                                28,000 تومان
                                            </span>
                                        </div><!-- End .product-cart-details -->

                                        <figure class="product-image-container">
                                            <a href="product.html" class="product-image">
                                                <img src="{{url('site/assets/images/products/cart/product-2.jpg')}}" alt="محصول">
                                            </a>
                                        </figure>
                                        <a href="#" class="btn-remove" title="حذف محصول"><i class="icon-close"></i></a>
                                    </div><!-- End .product -->
                                </div><!-- End .cart-product -->

                                <div class="dropdown-cart-total">
                                    <span>مجموع : </span>

                                    <span class="cart-total-price">112,000 تومان</span>
                                </div><!-- End .dropdown-cart-total -->

                                <div class="dropdown-cart-action">
                                    <a href="cart.html" class="btn btn-primary">مشاهده سبد خرید</a>
                                    <a href="checkout.html" class="btn btn-outline-primary-2"><span>پرداخت</span><i
                                            class="icon-long-arrow-left"></i></a>
                                </div><!-- End .dropdown-cart-total -->
                            </div><!-- End .dropdown-menu -->
                        </div><!-- End .cart-dropdown -->
                    </div><!-- End .header-right -->
                </div><!-- End .container -->
            </div><!-- End .header-middle -->

            <div class="header-bottom sticky-header">
                <div class="container">
                    <div class="header-left">
                        <div class="dropdown category-dropdown">
                            <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false" data-display="static"
                               title="فهرست دسته بندی ها">
                                فهرست دسته بندی ها <i class="icon-angle-down"></i>
                            </a>

                            <div class="dropdown-menu">
                                <nav class="side-nav">
                                    <ul class="menu-vertical sf-arrows">
                                        <li class="item-lead"><a href="#">تخفیف های روزانه</a></li>
                                        <li class="item-lead"><a href="#">هدیه ها</a></li>
                                        <li><a href="#">تخت خواب</a></li>
                                        <li><a href="#">روشنایی</a></li>
                                        <li><a href="#">مبل</a></li>
                                        <li><a href="#">حافظه های ذخیره سازی</a></li>
                                        <li><a href="#">میز و صندلی</a></li>
                                        <li><a href="#">وسایل تزیینی </a></li>
                                        <li><a href="#">کابینت آشپزخانه</a></li>
                                        <li><a href="#">قهوه</a></li>
                                        <li><a href="#">لوازم تعمیرات </a></li>
                                    </ul><!-- End .menu-vertical -->
                                </nav><!-- End .side-nav -->
                            </div><!-- End .dropdown-menu -->
                        </div><!-- End .category-dropdown -->
                    </div><!-- End .header-left -->

                    <div class="header-center">
                        <nav class="main-nav">
                            <ul class="menu sf-arrows">
                                <li class="megamenu-container active">
                                    <a href="index10.html" class="sf-with-ul">خانه</a>

                                    <div class="megamenu demo">
                                        <div class="menu-col">
                                            <div class="menu-title">دمو خود را انتخاب کنید</div><!-- End .menu-title -->

                                            <div class="demo-list">
                                                <div class="demo-item">
                                                    <a href="index10.html">
                                                        <span class="demo-bg"
                                                              style="background-image:url(' {{url('site/assets/images/menu/demos/3.jpg')}}');"></span>
                                                        <span class="demo-title">01 - فروشگاه لوازم الکترونیکی</span>
                                                    </a>

                                                </div><!-- End .demo-item -->

                                                <div class="demo-item">
                                                    <a href="index-2-2.html">
                                                        <span class="demo-bg"
                                                              style="background-image:url(' {{url('site/assets/images/menu/demos/2.jpg')}}');"></span>
                                                        <span class="demo-title">02 - فروشگاه مبلمان</span>
                                                    </a>
                                                </div><!-- End .demo-item -->

                                                <div class="demo-item">
                                                    <a href="index-3.html">
                                                        <span class="demo-bg"
                                                              style="background-image:url('{{url('site/assets/images/menu/demos/1.jpg')}}') ;"></span>
                                                        <span class="demo-title">03 - فروشگاه مبلمان</span>
                                                    </a>
                                                </div><!-- End .demo-item -->

                                                <div class="demo-item">
                                                    <a href="index-4.html">
                                                        <span class="demo-bg"
                                                              style="background-image:url('{{url('site/assets/images/menu/demos/4.jpg')}}') ;"></span>
                                                        <span class="demo-title">04 - فروشگاه لوازم الکترونیکی</span>
                                                    </a>
                                                </div><!-- End .demo-item -->

                                                <div class="demo-item">
                                                    <a href="index-5.html">
                                                        <span class="demo-bg"
                                                              style="background-image:url('{{url('site/assets/images/menu/demos/5.jpg')}}') ;"></span>
                                                        <span class="demo-title">05 - فروشگاه مد و لباس</span>
                                                    </a>
                                                </div><!-- End .demo-item -->

                                                <div class="demo-item">
                                                    <a href="index-6.html">
                                                        <span class="demo-bg"
                                                              style="background-image:url('{{url('site/assets/images/menu/demos/6.jpg')}}') ;"></span>
                                                        <span class="demo-title">06 - فروشگاه مد و لباس</span>
                                                    </a>
                                                </div><!-- End .demo-item -->

                                                <div class="demo-item">
                                                    <a href="index-7.html">
                                                        <span class="demo-bg"
                                                              style="background-image:url('{{url('site/assets/images/menu/demos/7.jpg')}}') ;"></span>
                                                        <span class="demo-title">07 - فروشگاه مد و لباس</span>
                                                    </a>
                                                </div><!-- End .demo-item -->

                                                <div class="demo-item">
                                                    <a href="index-8.html">
                                                        <span class="demo-bg"
                                                              style="background-image:url(' {{url('site/assets/images/menu/demos/8.jpg')}}');"></span>
                                                        <span class="demo-title">08 - فروشگاه مد و لباس</span>
                                                    </a>
                                                </div><!-- End .demo-item -->

                                                <div class="demo-item">
                                                    <a href="index-9.html">
                                                        <span class="demo-bg"
                                                              style="background-image:url('{{url('site/assets/images/menu/demos/9.jpg')}}') ;"></span>
                                                        <span class="demo-title">09 - فروشگاه مد و لباس</span>
                                                    </a>
                                                </div><!-- End .demo-item -->

                                                <div class="demo-item">
                                                    <a href="index-10.html">
                                                        <span class="demo-bg"
                                                              style="background-image:url('{{url('site/assets/images/menu/demos/10.jpg')}}') ;"></span>
                                                        <span class="demo-title">10 - فروشگاه کفش</span>
                                                    </a>
                                                </div><!-- End .demo-item -->

                                                <div class="demo-item hidden">
                                                    <a href="index-11.html">
                                                        <span class="demo-bg"
                                                              style="background-image:url('{{url('site/assets/images/menu/demos/11.jpg')}}') ;"></span>
                                                        <span class="demo-title">11 - فروشگاه مبل</span>
                                                    </a>
                                                </div><!-- End .demo-item -->

                                                <div class="demo-item hidden">
                                                    <a href="index-12.html">
                                                        <span class="demo-bg"
                                                              style="background-image:url('{{url('site/assets/images/menu/demos/12.jpg')}}') ;"></span>
                                                        <span class="demo-title">12 - فروشگاه مد</span>
                                                    </a>
                                                </div><!-- End .demo-item -->

                                                <div class="demo-item hidden">
                                                    <a href="index-13.html">
                                                        <span class="demo-bg"
                                                              style="background-image:url('{{url('site/assets/images/menu/demos/13.jpg')}}') ;"></span>
                                                        <span class="demo-title">13 - بازار</span>
                                                    </a>
                                                </div><!-- End .demo-item -->

                                                <div class="demo-item hidden">
                                                    <a href="index-14.html">
                                                        <span class="demo-bg"
                                                              style="background-image:url('{{url('site/assets/images/menu/demos/14.jpg')}}') ;"></span>
                                                        <span class="demo-title">14 - بازار تمام عرض</span>
                                                    </a>
                                                </div><!-- End .demo-item -->

                                                <div class="demo-item hidden">
                                                    <a href="index-15.html">
                                                        <span class="demo-bg"
                                                              style="background-image:url('{{url('site/assets/images/menu/demos/15.jpg')}}') ;"></span>
                                                        <span class="demo-title">15 - مد و زیبایی</span>
                                                    </a>
                                                </div><!-- End .demo-item -->

                                                <div class="demo-item hidden">
                                                    <a href="index-16.html">
                                                        <span class="demo-bg"
                                                              style="background-image:url('{{url('site/assets/images/menu/demos/16.jpg')}}') ;"></span>
                                                        <span class="demo-title">16 - مد و زیبایی</span>
                                                    </a>
                                                </div><!-- End .demo-item -->

                                                <div class="demo-item hidden">
                                                    <a href="index-17.html">
                                                        <span class="demo-bg"
                                                              style="background-image:url('{{url('site/assets/images/menu/demos/17.jpg')}}') ;"></span>
                                                        <span class="demo-title">17 - فروشگاه مد و لباس</span>
                                                    </a>
                                                </div><!-- End .demo-item -->

                                                <div class="demo-item hidden">
                                                    <a href="index-18.html">
                                                        <span class="demo-bg"
                                                              style="background-image:url('{{url('site/assets/images/menu/demos/18.jpg')}}') ;"></span>
                                                        <span class="demo-title">18 - فروشگاه مد و لباس (با سایدبار)</span>
                                                    </a>
                                                </div><!-- End .demo-item -->

                                                <div class="demo-item hidden">
                                                    <a href="index-19.html">
                                                        <span class="demo-bg"
                                                              style="background-image:url('{{url('site/assets/images/menu/demos/19.jpg')}}');"></span>
                                                        <span class="demo-title">19 - فروشگاه بازی</span>
                                                    </a>
                                                </div><!-- End .demo-item -->

                                                <div class="demo-item hidden">
                                                    <a href="index-20.html">
                                                        <span class="demo-bg"
                                                              style="background-image:url('{{url('site/assets/images/menu/demos/20.jpg')}}') ;"></span>
                                                        <span class="demo-title">20 - فروشگاه کتاب</span>
                                                    </a>
                                                </div><!-- End .demo-item -->

                                                <div class="demo-item hidden">
                                                    <a href="index-21.html">
                                                        <span class="demo-bg"
                                                              style="background-image:url('{{url('site/assets/images/menu/demos/21.jpg')}}') ;"></span>
                                                        <span class="demo-title">21 - فروشگاه ورزشی</span>
                                                    </a>
                                                </div><!-- End .demo-item -->

                                                <div class="demo-item hidden">
                                                    <a href="index-22.html">
                                                        <span class="demo-bg"
                                                              style="background-image:url(' {{url('site/assets/images/menu/demos/22.jpg')}}');"></span>
                                                        <span class="demo-title">22 - فروشگاه ابزار</span>
                                                    </a>
                                                </div><!-- End .demo-item -->

                                                <div class="demo-item hidden">
                                                    <a href="index-23.html">
                                                        <span class="demo-bg"
                                                              style="background-image:url('{{url('site/assets/images/menu/demos/23.jpg')}}');"></span>
                                                        <span class="demo-title">23 - -فروشگاه مد با نوبار سمت راست</span>
                                                    </a>
                                                </div><!-- End .demo-item -->

                                                <div class="demo-item hidden">
                                                    <a href="index-24.html">
                                                        <span class="demo-bg"
                                                              style="background-image:url(' {{url('site/assets/images/menu/demos/24.jpg')}}');"></span>
                                                        <span class="demo-title">24 - فروشگاه ورزشی</span>
                                                    </a>
                                                </div><!-- End .demo-item -->

                                            </div><!-- End .demo-list -->

                                            <div class="megamenu-action text-center">
                                                <a href="demo.html" class="btn btn-outline-primary-2 view-all-demos"><span>مشاهده همه دمو ها</span><i class="icon-long-arrow-left"></i></a>
                                            </div><!-- End .text-center -->
                                        </div><!-- End .menu-col -->
                                    </div><!-- End .megamenu -->
                                </li>
                                <li>
                                    <a href="category.html" class="sf-with-ul">فروشگاه</a>

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
                                                        </div><!-- End .col-md-6 -->

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
                                                        </div><!-- End .col-md-6 -->
                                                    </div><!-- End .row -->
                                                </div><!-- End .menu-col -->
                                            </div><!-- End .col-md-8 -->

                                            <div class="col-md-4">
                                                <div class="banner banner-overlay">
                                                    <a href="category.html" class="banner banner-menu">
                                                        <img src="{{url('site/assets/images/menu/banner-1.jpg')}}" alt="بنر">

                                                        <div class="banner-content banner-content-top">
                                                            <div class="banner-title text-white">آخرین
                                                                <br>شانس<br><span><strong>فروش</strong></span></div>
                                                            <!-- End .banner-title -->
                                                        </div><!-- End .banner-content -->
                                                    </a>
                                                </div><!-- End .banner banner-overlay -->
                                            </div><!-- End .col-md-4 -->
                                        </div><!-- End .row -->
                                    </div><!-- End .megamenu megamenu-md -->
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
                                                </div><!-- End .menu-col -->
                                            </div><!-- End .col-md-6 -->

                                            <div class="col-md-6">
                                                <div class="banner banner-overlay">
                                                    <a href="category.html">
                                                        <img src="{{url('site/assets/images/menu/banner-2.jpg')}}" alt="بنر">

                                                        <div class="banner-content banner-content-bottom">
                                                            <div class="banner-title text-white">محصولات
                                                                جدید<br><span><strong>بهار 1399</strong></span>
                                                            </div><!-- End .banner-title -->
                                                        </div><!-- End .banner-content -->
                                                    </a>
                                                </div><!-- End .banner -->
                                            </div><!-- End .col-md-6 -->
                                        </div><!-- End .row -->
                                    </div><!-- End .megamenu megamenu-sm -->
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
                            </ul><!-- End .menu -->
                        </nav><!-- End .main-nav -->
                    </div><!-- End .header-center -->

                    <div class="header-right">
                        <i class="la la-lightbulb-o"></i>
                        <p>خرید<span class="highlight">&nbsp;تا 30 درصد تخفیف</span></p>
                    </div>
                </div><!-- End .container -->
            </div><!-- End .header-bottom -->
        </header><!-- End .header -->

        <main class="main">
            <div class="intro-slider-container mb-5">
                <div class="intro-slider owl-carousel owl-theme owl-nav-inside owl-light" data-toggle="owl"
                     data-owl-options='{
                        "dots": true,
                        "nav": false,
                        "responsive": {
                            "1200": {
                                "nav": true,
                                "dots": false
                            }
                        }
                    }'>
                    <div class="intro-slide"
                         style="background-image:url('{{url('site/assets/images/demos/demo-4/slider/slide-1.png')}}') ">
                        <div class="container intro-content">
                            <div class="row justify-content-end">
                                <div class="col-auto col-sm-7 col-md-6 col-lg-5">
                                    <h3 class="intro-subtitle text-third">پیشنهاد و تبلیغات</h3>
                                    <!-- End .h3 intro-subtitle -->
                                    <h1 class="intro-title">Beats by</h1>
                                    <h1 class="intro-title">Dre Studio 3</h1><!-- End .intro-title -->

                                    <div class="intro-price" dir="rtl">
                                        <sup class="intro-old-price">349,000</sup>
                                        <span class="text-third">
                                            279,000 تومان
                                        </span>
                                    </div><!-- End .intro-price -->

                                    <a href="category.html" class="btn btn-primary btn-round">
                                        <i class="icon-long-arrow-left"></i>
                                        <span>خرید</span>
                                    </a>
                                </div><!-- End .col-lg-11 offset-lg-1 -->
                            </div><!-- End .row -->
                        </div><!-- End .intro-content -->
                    </div><!-- End .intro-slide -->

                    <div class="intro-slide"
                         style="background-image:url(' {{url('site/assets/images/demos/demo-4/slider/slide-2.png')}}')">
                        <div class="container intro-content">
                            <div class="row justify-content-end">
                                <div class="col-auto col-sm-7 col-md-6 col-lg-5">
                                    <h3 class="intro-subtitle text-primary">محصول جدید</h3>
                                    <!-- End .h3 intro-subtitle -->
                                    <h1 class="intro-title">Apple iPad Pro <br>12.9 Inch, 64GB </h1>
                                    <!-- End .intro-title -->

                                    <div class="intro-price" dir="rtl">
                                        <sup>امروز : </sup>
                                        <span class="text-primary">
                                            999,000 تومان
                                        </span>
                                    </div><!-- End .intro-price -->

                                    <a href="category.html" class="btn btn-primary btn-round">
                                        <i class="icon-long-arrow-left"></i>
                                        <span>خرید</span>
                                    </a>
                                </div><!-- End .col-md-6 offset-md-6 -->
                            </div><!-- End .row -->
                        </div><!-- End .intro-content -->
                    </div><!-- End .intro-slide -->
                </div><!-- End .intro-slider owl-carousel owl-simple -->

                <span class="slider-loader"></span><!-- End .slider-loader -->
            </div><!-- End .intro-slider-container -->

            <div class="container">
                <h2 class="title text-center mb-4">دسته بندی های محبوب</h2><!-- End .title text-center -->

                <div class="cat-blocks-container">
                    <div class="row">

                        @foreach($allProducts as $product)
                        <div class="col-6 col-sm-4 col-lg-2">
                            <a href="#" class="cat-block">
                                <figure>
                                    <span>
                                        <img src="{{ url('') }}{{$product->image }}" alt="{{$product->title}}">
                                    </span>
                                </figure>

                                <h3 class="cat-block-title">{{$product->title}}</h3><!-- End .cat-block-title -->
                            </a>
                        </div><!-- End .col-sm-4 col-lg-2 -->
                        @endforeach

                    </div><!-- End .row -->
                </div><!-- End .cat-blocks-container -->
            </div><!-- End .container -->

            <div class="mb-4"></div><!-- End .mb-4 -->

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6 col-lg-4">
                        <div class="banner banner-overlay banner-overlay-light">
                            <a href="#">
                                <img src="{{url('site/assets/images/demos/demo-4/banners/banner-1.png')}}" alt="بنر">
                            </a>

                            <div class="banner-content">
                                <h4 class="banner-subtitle"><a href="#">تخفیف گوشی هوشمند</a></h4>
                                <!-- End .banner-subtitle -->
                                <h3 class="banner-title"><a href="#">15,000 تومان <strong>برای <br>Samsung Galaxy
                                            Note9</strong></a></h3><!-- End .banner-title -->
                                <a href="#" class="banner-link">خرید<i class="icon-long-arrow-left"></i></a>
                            </div><!-- End .banner-content -->
                        </div><!-- End .banner -->
                    </div><!-- End .col-md-4 -->

                    <div class="col-md-6 col-lg-4">
                        <div class="banner banner-overlay banner-overlay-light">
                            <a href="#">
                                <img src="{{url('site/assets/images/demos/demo-4/banners/banner-2.jpg')}}" alt="بنر">
                            </a>

                            <div class="banner-content">
                                <h4 class="banner-subtitle"><a href="#">پیشهاد روزانه</a></h4>
                                <!-- End .banner-subtitle -->
                                <h3 class="banner-title"><a href="#"><strong>هندزفری Bose </strong> <br>30% تخفیف</a>
                                </h3><!-- End .banner-title -->
                                <a href="#" class="banner-link">خرید<i class="icon-long-arrow-left"></i></a>
                            </div><!-- End .banner-content -->
                        </div><!-- End .banner -->
                    </div><!-- End .col-md-4 -->

                    <div class="col-md-6 col-lg-4">
                        <div class="banner banner-overlay banner-overlay-light">
                            <a href="#">
                                <img src="{{url('site/assets/images/demos/demo-4/banners/banner-3.png')}}" alt="بنر">
                            </a>

                            <div class="banner-content">
                                <h4 class="banner-subtitle"><a href="#">تخفیف شگفت انگیز</a></h4>
                                <!-- End .banner-subtitle -->
                                <h3 class="banner-title"><a href="#"><strong>GoPro - Fusion 360</strong> <br>70,000
                                        تومان</a></h3><!-- End .banner-title -->
                                <a href="#" class="banner-link">خرید<i class="icon-long-arrow-left"></i></a>
                            </div><!-- End .banner-content -->
                        </div><!-- End .banner -->
                    </div><!-- End .col-lg-4 -->
                </div><!-- End .row -->
            </div><!-- End .container -->

            <div class="mb-3"></div><!-- End .mb-5 -->

            <div class="container new-arrivals">
                <div class="heading heading-flex mb-3">
                    <div class="heading-left">
                        <h2 class="title">محصولات جدید</h2><!-- End .title -->
                    </div><!-- End .heading-left -->

                    <div class="heading-right">
                        <ul class="nav nav-pills nav-border-anim justify-content-center" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="new-all-link" data-toggle="tab" href="#new-all-tab"
                                   role="tab" aria-controls="new-all-tab" aria-selected="true">همه</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="new-tv-link" data-toggle="tab" href="#new-tv-tab" role="tab"
                                   aria-controls="new-tv-tab" aria-selected="false">تلویزیون</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="new-computers-link" data-toggle="tab" href="#new-computers-tab"
                                   role="tab" aria-controls="new-computers-tab" aria-selected="false">کامپیوتر</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="new-phones-link" data-toggle="tab" href="#new-phones-tab"
                                   role="tab" aria-controls="new-phones-tab" aria-selected="false">موبایل و تب لت</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="new-watches-link" data-toggle="tab" href="#new-watches-tab"
                                   role="tab" aria-controls="new-watches-tab" aria-selected="false">ساعت هوشمند</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="new-acc-link" data-toggle="tab" href="#new-acc-tab" role="tab"
                                   aria-controls="new-acc-tab" aria-selected="false">لوازم جانبی</a>
                            </li>
                        </ul>
                    </div><!-- End .heading-right -->
                </div><!-- End .heading -->

                <div class="tab-content tab-content-carousel just-action-icons-sm">
                    <div class="tab-pane p-0 fade show active" id="new-all-tab" role="tabpanel"
                         aria-labelledby="new-all-link">
                        <div class="owl-carousel owl-full carousel-equal-height carousel-with-shadow" data-toggle="owl"
                             data-owl-options='{
                                "nav": true,
                                "dots": true,
                                "margin": 20,
                                "loop": false,
                                "responsive": {
                                    "0": {
                                        "items":2
                                    },
                                    "480": {
                                        "items":2
                                    },
                                    "768": {
                                        "items":3
                                    },
                                    "992": {
                                        "items":4
                                    },
                                    "1200": {
                                        "items":5
                                    }
                                }
                            }'>
                            <div class="product product-2">
                                <figure class="product-media">
                                    <span class="product-label label-circle label-top">برتر</span>
                                    <a href="product.html">
                                        <img src="{{url('site/assets/images/demos/demo-4/products/product-1.jpg')}}" alt="تصویر محصول"
                                             class="product-image">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist"
                                           title="افزودن به لیست علاقه مندی"></a>
                                    </div><!-- End .product-action -->

                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart" title="افزودن به سبد خرید"><span>افزودن
                                                به
                                                سبد خرید</span></a>
                                        <a href="popup/quickView.html" class="btn-product btn-quickview"
                                           title="مشاهده سریع محصول"><span>مشاهده سریع</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">لپ تاپ</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="product.html">لپ تاپ MacBook Pro - 13 اینچ</a>
                                    </h3><!-- End .product-title -->
                                    <div class="product-price">
                                        1,199,000 تومان
                                    </div><!-- End .product-price -->
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 100%;"></div>
                                            <!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <span class="ratings-text">( 4 دیدگاه )</span>
                                    </div><!-- End .rating-container -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->

                            <div class="product product-2">
                                <figure class="product-media">
                                    <a href="product.html">
                                        <img src="{{url('site/assets/images/demos/demo-4/products/product-2.jpg')}}" alt="تصویر محصول"
                                             class="product-image">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist"
                                           title="افزودن به لیست علاقه مندی"></a>
                                    </div><!-- End .product-action -->

                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart" title="افزودن به سبد خرید"><span>افزودن
                                                به
                                                سبد خرید</span></a>
                                        <a href="popup/quickView.html" class="btn-product btn-quickview"
                                           title="مشاهده سریع محصول"><span>مشاهده سریع</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">لوازم صوتی</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="product.html">اسپیکر بلوتوث</a></h3>
                                    <!-- End .product-title -->
                                    <div class="product-price">
                                        79,000 تومان
                                    </div><!-- End .product-price -->
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <span class="ratings-text">( 6 دیدگاه )</span>
                                    </div><!-- End .rating-container -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->

                            <div class="product product-2">
                                <figure class="product-media">
                                    <span class="product-label label-circle label-new">جدید</span>
                                    <a href="product.html">
                                        <img src="{{url('site/assets/images/demos/demo-4/products/product-3.jpg')}}" alt="تصویر محصول"
                                             class="product-image">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist"
                                           title="افزودن به لیست علاقه مندی"></a>
                                    </div><!-- End .product-action -->

                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart" title="افزودن به سبد خرید"><span>افزودن
                                                به
                                                سبد خرید</span></a>
                                        <a href="popup/quickView.html" class="btn-product btn-quickview"
                                           title="مشاهده سریع محصول"><span>مشاهده سریع</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">تب لت</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="product.html">آیپد پرو اپل - سایز 11 اینچ - حافظه
                                            256 گیگ</a></h3><!-- End .product-title -->
                                    <div class="product-price">
                                        899,000 تومان
                                    </div><!-- End .product-price -->
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <span class="ratings-text">( 4 دیدگاه )</span>
                                    </div><!-- End .rating-container -->

                                    <div class="product-nav product-nav-dots">
                                        <a href="#" style="background: #edd2c8;"><span class="sr-only">Color
                                                name</span></a>
                                        <a href="#" style="background: #eaeaec;"><span class="sr-only">Color
                                                name</span></a>
                                        <a href="#" class="active" style="background: #333333;"><span
                                                class="sr-only">Color name</span></a>
                                    </div><!-- End .product-nav -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->

                            <div class="product product-2">
                                <figure class="product-media">
                                    <span class="product-label label-circle label-top">برتر</span>
                                    <span class="product-label label-circle label-sale">فروش ویژه</span>
                                    <a href="product.html">
                                        <img src="{{url('site/assets/images/demos/demo-4/products/product-4.jpg')}}" alt="تصویر محصول"
                                             class="product-image">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist"
                                           title="افزودن به لیست علاقه مندی"></a>
                                    </div><!-- End .product-action -->

                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart" title="افزودن به سبد خرید"><span>افزودن
                                                به
                                                سبد خرید</span></a>
                                        <a href="popup/quickView.html" class="btn-product btn-quickview"
                                           title="مشاهده سریع محصول"><span>مشاهده سریع</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">موبایل</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="product.html">گوشی Google - مدل Pixel 3 XL -
                                            حافظه 128 گیگ</a></h3>
                                    <!-- End .product-title -->
                                    <div class="product-price">
                                        <span class="new-price">35,000 تومان</span>
                                        <span class="old-price">41,000</span>
                                    </div><!-- End .product-price -->
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 100%;"></div>
                                            <!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <span class="ratings-text">( 10 دیدگاه )</span>
                                    </div><!-- End .rating-container -->

                                    <div class="product-nav product-nav-dots">
                                        <a href="#" class="active" style="background: #edd2c8;"><span
                                                class="sr-only">Color name</span></a>
                                        <a href="#" style="background: #eaeaec;"><span class="sr-only">Color
                                                name</span></a>
                                        <a href="#" style="background: #333333;"><span class="sr-only">Color
                                                name</span></a>
                                    </div><!-- End .product-nav -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->

                            <div class="product product-2">
                                <figure class="product-media">
                                    <span class="product-label label-circle label-top">برتر</span>
                                    <a href="product.html">
                                        <img src="{{url('site/assets/images/demos/demo-4/products/product-5.jpg')}}" alt="تصویر محصول"
                                             class="product-image">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist"
                                           title="افزودن به لیست علاقه مندی"></a>
                                    </div><!-- End .product-action -->

                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart" title="افزودن به سبد خرید"><span>افزودن
                                                به
                                                سبد خرید</span></a>
                                        <a href="popup/quickView.html" class="btn-product btn-quickview"
                                           title="مشاهده سریع محصول"><span>مشاهده سریع</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">تلویزیون و سینما خانگی</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="product.html">تلویزون LED سامسونگ - سایز 55
                                            اینچ</a></h3><!-- End .product-title -->
                                    <div class="product-price">
                                        899,000 تومان
                                    </div><!-- End .product-price -->
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <span class="ratings-text">( 5 دیدگاه )</span>
                                    </div><!-- End .rating-container -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->

                            <div class="product product-2">
                                <figure class="product-media">
                                    <span class="product-label label-circle label-top">برتر</span>
                                    <a href="product.html">
                                        <img src="{{url('site/assets/images/demos/demo-4/products/product-1.jpg')}}" alt="تصویر محصول"
                                             class="product-image">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist"
                                           title="افزودن به لیست علاقه مندی"></a>
                                    </div><!-- End .product-action -->

                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart" title="افزودن به سبد خرید"><span>افزودن
                                                به
                                                سبد خرید</span></a>
                                        <a href="popup/quickView.html" class="btn-product btn-quickview"
                                           title="مشاهده سریع محصول"><span>مشاهده سریع</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">لپ تاپ</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="product.html">لپ تاپ MacBook Pro - 13 اینچ</a>
                                    </h3><!-- End .product-title -->
                                    <div class="product-price">
                                        1,199,000 تومان
                                    </div><!-- End .product-price -->
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 100%;"></div>
                                            <!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <span class="ratings-text">( 4 دیدگاه )</span>
                                    </div><!-- End .rating-container -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->
                        </div><!-- End .owl-carousel -->
                    </div><!-- .End .tab-pane -->
                    <div class="tab-pane p-0 fade" id="new-tv-tab" role="tabpanel" aria-labelledby="new-tv-link">
                        <div class="owl-carousel owl-full carousel-equal-height carousel-with-shadow" data-toggle="owl"
                             data-owl-options='{
                                "nav": true,
                                "dots": true,
                                "margin": 20,
                                "loop": false,
                                "responsive": {
                                    "0": {
                                        "items":2
                                    },
                                    "480": {
                                        "items":2
                                    },
                                    "768": {
                                        "items":3
                                    },
                                    "992": {
                                        "items":4
                                    },
                                    "1200": {
                                        "items":5
                                    }
                                }
                            }'>
                            <div class="product product-2">
                                <figure class="product-media">
                                    <span class="product-label label-circle label-new">جدید</span>
                                    <a href="product.html">
                                        <img src="{{url('site/assets/images/demos/demo-4/products/product-3.jpg')}}" alt="تصویر محصول"
                                             class="product-image">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist"
                                           title="افزودن به لیست علاقه مندی"></a>
                                    </div><!-- End .product-action -->

                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart" title="افزودن به سبد خرید"><span>افزودن
                                                به
                                                سبد خرید</span></a>
                                        <a href="popup/quickView.html" class="btn-product btn-quickview"
                                           title="مشاهده سریع محصول"><span>مشاهده سریع</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">تب لت</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="product.html">آیپد پرو اپل - سایز 11 اینچ - حافظه
                                            256 گیگ</a></h3><!-- End .product-title -->
                                    <div class="product-price">
                                        899,000 تومان
                                    </div><!-- End .product-price -->
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <span class="ratings-text">( 4 دیدگاه )</span>
                                    </div><!-- End .rating-container -->

                                    <div class="product-nav product-nav-dots">
                                        <a href="#" style="background: #edd2c8;"><span class="sr-only">Color
                                                name</span></a>
                                        <a href="#" style="background: #eaeaec;"><span class="sr-only">Color
                                                name</span></a>
                                        <a href="#" class="active" style="background: #333333;"><span
                                                class="sr-only">Color name</span></a>
                                    </div><!-- End .product-nav -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->

                            <div class="product product-2">
                                <figure class="product-media">
                                    <a href="product.html">
                                        <img src="{{url('site/assets/images/demos/demo-4/products/product-2.jpg')}}" alt="تصویر محصول"
                                             class="product-image">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist"
                                           title="افزودن به لیست علاقه مندی"></a>
                                    </div><!-- End .product-action -->

                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart" title="افزودن به سبد خرید"><span>افزودن
                                                به
                                                سبد خرید</span></a>
                                        <a href="popup/quickView.html" class="btn-product btn-quickview"
                                           title="مشاهده سریع محصول"><span>مشاهده سریع</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">لوازم صوتی</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="product.html">اسپیکر بلوتوث</a></h3>
                                    <!-- End .product-title -->
                                    <div class="product-price">
                                        79,000 تومان
                                    </div><!-- End .product-price -->
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <span class="ratings-text">( 6 دیدگاه )</span>
                                    </div><!-- End .rating-container -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->

                            <div class="product product-2">
                                <figure class="product-media">
                                    <span class="product-label label-circle label-top">برتر</span>
                                    <span class="product-label label-circle label-sale">فروش ویژه</span>
                                    <a href="product.html">
                                        <img src="{{url('site/assets/images/demos/demo-4/products/product-4.jpg')}}" alt="تصویر محصول"
                                             class="product-image">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist"
                                           title="افزودن به لیست علاقه مندی"></a>
                                    </div><!-- End .product-action -->

                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart" title="افزودن به سبد خرید"><span>افزودن
                                                به
                                                سبد خرید</span></a>
                                        <a href="popup/quickView.html" class="btn-product btn-quickview"
                                           title="مشاهده سریع محصول"><span>مشاهده سریع</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">موبایل</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="product.html">گوشی Google - مدل Pixel 3 XL -
                                            حافظه 128 گیگ</a></h3>
                                    <!-- End .product-title -->
                                    <div class="product-price">
                                        <span class="new-price">35,000 تومان</span>
                                        <span class="old-price">41,000</span>
                                    </div><!-- End .product-price -->
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 100%;"></div>
                                            <!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <span class="ratings-text">( 10 دیدگاه )</span>
                                    </div><!-- End .rating-container -->

                                    <div class="product-nav product-nav-dots">
                                        <a href="#" class="active" style="background: #edd2c8;"><span
                                                class="sr-only">Color name</span></a>
                                        <a href="#" style="background: #eaeaec;"><span class="sr-only">Color
                                                name</span></a>
                                        <a href="#" style="background: #333333;"><span class="sr-only">Color
                                                name</span></a>
                                    </div><!-- End .product-nav -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->

                            <div class="product product-2">
                                <figure class="product-media">
                                    <span class="product-label label-circle label-top">برتر</span>
                                    <a href="product.html">
                                        <img src="{{url('site/assets/images/demos/demo-4/products/product-5.jpg')}}" alt="تصویر محصول"
                                             class="product-image">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist"
                                           title="افزودن به لیست علاقه مندی"></a>
                                    </div><!-- End .product-action -->

                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart" title="افزودن به سبد خرید"><span>افزودن
                                                به
                                                سبد خرید</span></a>
                                        <a href="popup/quickView.html" class="btn-product btn-quickview"
                                           title="مشاهده سریع محصول"><span>مشاهده سریع</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">تلویزیون و سینما خانگی</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="product.html">تلویزون LED سامسونگ - سایز 55
                                            اینچ</a></h3><!-- End .product-title -->
                                    <div class="product-price">
                                        899,000 تومان
                                    </div><!-- End .product-price -->
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <span class="ratings-text">( 5 دیدگاه )</span>
                                    </div><!-- End .rating-container -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->

                            <div class="product product-2">
                                <figure class="product-media">
                                    <span class="product-label label-circle label-top">برتر</span>
                                    <a href="product.html">
                                        <img src="{{url('site/assets/images/demos/demo-4/products/product-1.jpg')}}" alt="تصویر محصول"
                                             class="product-image">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist"
                                           title="افزودن به لیست علاقه مندی"></a>
                                    </div><!-- End .product-action -->

                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart" title="افزودن به سبد خرید"><span>افزودن
                                                به
                                                سبد خرید</span></a>
                                        <a href="popup/quickView.html" class="btn-product btn-quickview"
                                           title="مشاهده سریع محصول"><span>مشاهده سریع</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">لپ تاپ</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="product.html">لپ تاپ MacBook Pro - 13 اینچ</a>
                                    </h3><!-- End .product-title -->
                                    <div class="product-price">
                                        1,199,000 تومان
                                    </div><!-- End .product-price -->
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 100%;"></div>
                                            <!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <span class="ratings-text">( 4 دیدگاه )</span>
                                    </div><!-- End .rating-container -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->
                        </div><!-- End .owl-carousel -->
                    </div><!-- .End .tab-pane -->
                    <div class="tab-pane p-0 fade" id="new-computers-tab" role="tabpanel"
                         aria-labelledby="new-computers-link">
                        <div class="owl-carousel owl-full carousel-equal-height carousel-with-shadow" data-toggle="owl"
                             data-owl-options='{
                                "nav": true,
                                "dots": true,
                                "margin": 20,
                                "loop": false,
                                "responsive": {
                                    "0": {
                                        "items":2
                                    },
                                    "480": {
                                        "items":2
                                    },
                                    "768": {
                                        "items":3
                                    },
                                    "992": {
                                        "items":4
                                    },
                                    "1200": {
                                        "items":5
                                    }
                                }
                            }'>
                            <div class="product product-2">
                                <figure class="product-media">
                                    <span class="product-label label-circle label-top">برتر</span>
                                    <a href="product.html">
                                        <img src="{{url('site/assets/images/demos/demo-4/products/product-5.jpg')}}" alt="تصویر محصول"
                                             class="product-image">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist"
                                           title="افزودن به لیست علاقه مندی"></a>
                                    </div><!-- End .product-action -->

                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart" title="افزودن به سبد خرید"><span>افزودن
                                                به
                                                سبد خرید</span></a>
                                        <a href="popup/quickView.html" class="btn-product btn-quickview"
                                           title="مشاهده سریع محصول"><span>مشاهده سریع</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">تلویزیون و سینما خانگی</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="product.html">تلویزون LED سامسونگ - سایز 55
                                            اینچ</a></h3><!-- End .product-title -->
                                    <div class="product-price">
                                        899,000 تومان
                                    </div><!-- End .product-price -->
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <span class="ratings-text">( 5 دیدگاه )</span>
                                    </div><!-- End .rating-container -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->

                            <div class="product product-2">
                                <figure class="product-media">
                                    <span class="product-label label-circle label-top">برتر</span>
                                    <a href="product.html">
                                        <img src="{{url('site/assets/images/demos/demo-4/products/product-1.jpg')}}" alt="تصویر محصول"
                                             class="product-image">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist"
                                           title="افزودن به لیست علاقه مندی"></a>
                                    </div><!-- End .product-action -->

                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart" title="افزودن به سبد خرید"><span>افزودن
                                                به
                                                سبد خرید</span></a>
                                        <a href="popup/quickView.html" class="btn-product btn-quickview"
                                           title="مشاهده سریع محصول"><span>مشاهده سریع</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">لپ تاپ</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="product.html">لپ تاپ MacBook Pro - 13 اینچ</a>
                                    </h3><!-- End .product-title -->
                                    <div class="product-price">
                                        1,199,000 تومان
                                    </div><!-- End .product-price -->
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 100%;"></div>
                                            <!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <span class="ratings-text">( 4 دیدگاه )</span>
                                    </div><!-- End .rating-container -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->

                            <div class="product product-2">
                                <figure class="product-media">
                                    <span class="product-label label-circle label-new">جدید</span>
                                    <a href="product.html">
                                        <img src="{{url('site/assets/images/demos/demo-4/products/product-3.jpg')}}" alt="تصویر محصول"
                                             class="product-image">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist"
                                           title="افزودن به لیست علاقه مندی"></a>
                                    </div><!-- End .product-action -->

                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart" title="افزودن به سبد خرید"><span>افزودن
                                                به
                                                سبد خرید</span></a>
                                        <a href="popup/quickView.html" class="btn-product btn-quickview"
                                           title="مشاهده سریع محصول"><span>مشاهده سریع</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">تب لت</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="product.html">آیپد پرو اپل - سایز 11 اینچ - حافظه
                                            256 گیگ</a></h3><!-- End .product-title -->
                                    <div class="product-price">
                                        899,000 تومان
                                    </div><!-- End .product-price -->
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <span class="ratings-text">( 4 دیدگاه )</span>
                                    </div><!-- End .rating-container -->

                                    <div class="product-nav product-nav-dots">
                                        <a href="#" style="background: #edd2c8;"><span class="sr-only">Color
                                                name</span></a>
                                        <a href="#" style="background: #eaeaec;"><span class="sr-only">Color
                                                name</span></a>
                                        <a href="#" class="active" style="background: #333333;"><span
                                                class="sr-only">Color name</span></a>
                                    </div><!-- End .product-nav -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->

                            <div class="product product-2">
                                <figure class="product-media">
                                    <a href="product.html">
                                        <img src="{{url('site/assets/images/demos/demo-4/products/product-2.jpg')}}" alt="تصویر محصول"
                                             class="product-image">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist"
                                           title="افزودن به لیست علاقه مندی"></a>
                                    </div><!-- End .product-action -->

                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart" title="افزودن به سبد خرید"><span>افزودن
                                                به
                                                سبد خرید</span></a>
                                        <a href="popup/quickView.html" class="btn-product btn-quickview"
                                           title="مشاهده سریع محصول"><span>مشاهده سریع</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">لوازم صوتی</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="product.html">اسپیکر بلوتوث</a></h3>
                                    <!-- End .product-title -->
                                    <div class="product-price">
                                        79,000 تومان
                                    </div><!-- End .product-price -->
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <span class="ratings-text">( 6 دیدگاه )</span>
                                    </div><!-- End .rating-container -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->

                            <div class="product product-2">
                                <figure class="product-media">
                                    <span class="product-label label-circle label-top">برتر</span>
                                    <span class="product-label label-circle label-sale">فروش ویژه</span>
                                    <a href="product.html">
                                        <img src="{{url('site/assets/images/demos/demo-4/products/product-4.jpg')}}" alt="تصویر محصول"
                                             class="product-image">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist"
                                           title="افزودن به لیست علاقه مندی"></a>
                                    </div><!-- End .product-action -->

                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart" title="افزودن به سبد خرید"><span>افزودن
                                                به
                                                سبد خرید</span></a>
                                        <a href="popup/quickView.html" class="btn-product btn-quickview"
                                           title="مشاهده سریع محصول"><span>مشاهده سریع</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">موبایل</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="product.html">گوشی Google - مدل Pixel 3 XL -
                                            حافظه 128 گیگ</a></h3>
                                    <!-- End .product-title -->
                                    <div class="product-price">
                                        <span class="new-price">35,000 تومان</span>
                                        <span class="old-price">41,000</span>
                                    </div><!-- End .product-price -->
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 100%;"></div>
                                            <!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <span class="ratings-text">( 10 دیدگاه )</span>
                                    </div><!-- End .rating-container -->

                                    <div class="product-nav product-nav-dots">
                                        <a href="#" class="active" style="background: #edd2c8;"><span
                                                class="sr-only">Color name</span></a>
                                        <a href="#" style="background: #eaeaec;"><span class="sr-only">Color
                                                name</span></a>
                                        <a href="#" style="background: #333333;"><span class="sr-only">Color
                                                name</span></a>
                                    </div><!-- End .product-nav -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->
                        </div><!-- End .owl-carousel -->
                    </div><!-- .End .tab-pane -->
                    <div class="tab-pane p-0 fade" id="new-phones-tab" role="tabpanel"
                         aria-labelledby="new-phones-link">
                        <div class="owl-carousel owl-full carousel-equal-height carousel-with-shadow" data-toggle="owl"
                             data-owl-options='{
                                "nav": true,
                                "dots": true,
                                "margin": 20,
                                "loop": false,
                                "responsive": {
                                    "0": {
                                        "items":2
                                    },
                                    "480": {
                                        "items":2
                                    },
                                    "768": {
                                        "items":3
                                    },
                                    "992": {
                                        "items":4
                                    },
                                    "1200": {
                                        "items":5
                                    }
                                }
                            }'>
                            <div class="product product-2">
                                <figure class="product-media">
                                    <span class="product-label label-circle label-top">برتر</span>
                                    <a href="product.html">
                                        <img src="{{url('site/assets/images/demos/demo-4/products/product-1.jpg')}}" alt="تصویر محصول"
                                             class="product-image">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist"
                                           title="افزودن به لیست علاقه مندی"></a>
                                    </div><!-- End .product-action -->

                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart" title="افزودن به سبد خرید"><span>افزودن
                                                به
                                                سبد خرید</span></a>
                                        <a href="popup/quickView.html" class="btn-product btn-quickview"
                                           title="مشاهده سریع محصول"><span>مشاهده سریع</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">لپ تاپ</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="product.html">لپ تاپ MacBook Pro - 13 اینچ</a>
                                    </h3><!-- End .product-title -->
                                    <div class="product-price">
                                        1,199,000 تومان
                                    </div><!-- End .product-price -->
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 100%;"></div>
                                            <!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <span class="ratings-text">( 4 دیدگاه )</span>
                                    </div><!-- End .rating-container -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->

                            <div class="product product-2">
                                <figure class="product-media">
                                    <a href="product.html">
                                        <img src="{{url('site/assets/images/demos/demo-4/products/product-2.jpg')}}" alt="تصویر محصول"
                                             class="product-image">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist"
                                           title="افزودن به لیست علاقه مندی"></a>
                                    </div><!-- End .product-action -->

                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart" title="افزودن به سبد خرید"><span>افزودن
                                                به
                                                سبد خرید</span></a>
                                        <a href="popup/quickView.html" class="btn-product btn-quickview"
                                           title="مشاهده سریع محصول"><span>مشاهده سریع</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">لوازم صوتی</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="product.html">اسپیکر بلوتوث</a></h3>
                                    <!-- End .product-title -->
                                    <div class="product-price">
                                        79,000 تومان
                                    </div><!-- End .product-price -->
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <span class="ratings-text">( 6 دیدگاه )</span>
                                    </div><!-- End .rating-container -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->

                            <div class="product product-2">
                                <figure class="product-media">
                                    <span class="product-label label-circle label-new">جدید</span>
                                    <a href="product.html">
                                        <img src="site/images/demos/demo-4/products/product-3.jpg" alt="تصویر محصول"
                                             class="product-image">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist"
                                           title="افزودن به لیست علاقه مندی"></a>
                                    </div><!-- End .product-action -->

                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart" title="افزودن به سبد خرید"><span>افزودن
                                                به
                                                سبد خرید</span></a>
                                        <a href="popup/quickView.html" class="btn-product btn-quickview"
                                           title="مشاهده سریع محصول"><span>مشاهده سریع</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">تب لت</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="product.html">آیپد پرو اپل - سایز 11 اینچ - حافظه
                                            256 گیگ</a></h3><!-- End .product-title -->
                                    <div class="product-price">
                                        899,000 تومان
                                    </div><!-- End .product-price -->
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <span class="ratings-text">( 4 دیدگاه )</span>
                                    </div><!-- End .rating-container -->

                                    <div class="product-nav product-nav-dots">
                                        <a href="#" style="background: #edd2c8;"><span class="sr-only">Color
                                                name</span></a>
                                        <a href="#" style="background: #eaeaec;"><span class="sr-only">Color
                                                name</span></a>
                                        <a href="#" class="active" style="background: #333333;"><span
                                                class="sr-only">Color name</span></a>
                                    </div><!-- End .product-nav -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->

                            <div class="product product-2">
                                <figure class="product-media">
                                    <span class="product-label label-circle label-top">برتر</span>
                                    <a href="product.html">
                                        <img src="{{url('site/assets/images/demos/demo-4/products/product-5.jpg')}}" alt="تصویر محصول"
                                             class="product-image">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist"
                                           title="افزودن به لیست علاقه مندی"></a>
                                    </div><!-- End .product-action -->

                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart" title="افزودن به سبد خرید"><span>افزودن
                                                به
                                                سبد خرید</span></a>
                                        <a href="popup/quickView.html" class="btn-product btn-quickview"
                                           title="مشاهده سریع محصول"><span>مشاهده سریع</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">تلویزیون و سینما خانگی</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="product.html">تلویزون LED سامسونگ - سایز 55
                                            اینچ</a></h3><!-- End .product-title -->
                                    <div class="product-price">
                                        899,000 تومان
                                    </div><!-- End .product-price -->
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <span class="ratings-text">( 5 دیدگاه )</span>
                                    </div><!-- End .rating-container -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->

                            <div class="product product-2">
                                <figure class="product-media">
                                    <span class="product-label label-circle label-top">برتر</span>
                                    <a href="product.html">
                                        <img src="{{url('site/assets/images/demos/demo-4/products/product-1.jpg')}}" alt="تصویر محصول"
                                             class="product-image">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist"
                                           title="افزودن به لیست علاقه مندی"></a>
                                    </div><!-- End .product-action -->

                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart" title="افزودن به سبد خرید"><span>افزودن
                                                به
                                                سبد خرید</span></a>
                                        <a href="popup/quickView.html" class="btn-product btn-quickview"
                                           title="مشاهده سریع محصول"><span>مشاهده سریع</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">لپ تاپ</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="product.html">لپ تاپ MacBook Pro - 13 اینچ</a>
                                    </h3><!-- End .product-title -->
                                    <div class="product-price">
                                        1,199,000 تومان
                                    </div><!-- End .product-price -->
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 100%;"></div>
                                            <!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <span class="ratings-text">( 4 دیدگاه )</span>
                                    </div><!-- End .rating-container -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->

                            <div class="product product-2">
                                <figure class="product-media">
                                    <span class="product-label label-circle label-top">برتر</span>
                                    <span class="product-label label-circle label-sale">فروش ویژه</span>
                                    <a href="product.html">
                                        <img src="{{url('site/assets/images/demos/demo-4/products/product-4.jpg')}}" alt="تصویر محصول"
                                             class="product-image">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist"
                                           title="افزودن به لیست علاقه مندی"></a>
                                    </div><!-- End .product-action -->

                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart" title="افزودن به سبد خرید"><span>افزودن
                                                به
                                                سبد خرید</span></a>
                                        <a href="popup/quickView.html" class="btn-product btn-quickview"
                                           title="مشاهده سریع محصول"><span>مشاهده سریع</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">موبایل</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="product.html">گوشی Google - مدل Pixel 3 XL -
                                            حافظه 128 گیگ</a></h3>
                                    <!-- End .product-title -->
                                    <div class="product-price">
                                        <span class="new-price">35,000 تومان</span>
                                        <span class="old-price">41,000</span>
                                    </div><!-- End .product-price -->
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 100%;"></div>
                                            <!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <span class="ratings-text">( 10 دیدگاه )</span>
                                    </div><!-- End .rating-container -->

                                    <div class="product-nav product-nav-dots">
                                        <a href="#" class="active" style="background: #edd2c8;"><span
                                                class="sr-only">Color name</span></a>
                                        <a href="#" style="background: #eaeaec;"><span class="sr-only">Color
                                                name</span></a>
                                        <a href="#" style="background: #333333;"><span class="sr-only">Color
                                                name</span></a>
                                    </div><!-- End .product-nav -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->
                        </div><!-- End .owl-carousel -->
                    </div><!-- .End .tab-pane -->
                    <div class="tab-pane p-0 fade" id="new-watches-tab" role="tabpanel"
                         aria-labelledby="new-watches-link">
                        <div class="owl-carousel owl-full carousel-equal-height carousel-with-shadow" data-toggle="owl"
                             data-owl-options='{
                                "nav": true,
                                "dots": true,
                                "margin": 20,
                                "loop": false,
                                "responsive": {
                                    "0": {
                                        "items":2
                                    },
                                    "480": {
                                        "items":2
                                    },
                                    "768": {
                                        "items":3
                                    },
                                    "992": {
                                        "items":4
                                    },
                                    "1200": {
                                        "items":5
                                    }
                                }
                            }'>
                            <div class="product product-2">
                                <figure class="product-media">
                                    <span class="product-label label-circle label-top">برتر</span>
                                    <span class="product-label label-circle label-sale">فروش ویژه</span>
                                    <a href="product.html">
                                        <img src="{{url('site/assets/images/demos/demo-4/products/product-4.jpg')}}" alt="تصویر محصول"
                                             class="product-image">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist"
                                           title="افزودن به لیست علاقه مندی"></a>
                                    </div><!-- End .product-action -->

                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart" title="افزودن به سبد خرید"><span>افزودن
                                                به
                                                سبد خرید</span></a>
                                        <a href="popup/quickView.html" class="btn-product btn-quickview"
                                           title="مشاهده سریع محصول"><span>مشاهده سریع</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">موبایل</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="product.html">گوشی Google - مدل Pixel 3 XL -
                                            حافظه 128 گیگ</a></h3>
                                    <!-- End .product-title -->
                                    <div class="product-price">
                                        <span class="new-price">35,000 تومان</span>
                                        <span class="old-price">41,000</span>
                                    </div><!-- End .product-price -->
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 100%;"></div>
                                            <!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <span class="ratings-text">( 10 دیدگاه )</span>
                                    </div><!-- End .rating-container -->

                                    <div class="product-nav product-nav-dots">
                                        <a href="#" class="active" style="background: #edd2c8;"><span
                                                class="sr-only">Color name</span></a>
                                        <a href="#" style="background: #eaeaec;"><span class="sr-only">Color
                                                name</span></a>
                                        <a href="#" style="background: #333333;"><span class="sr-only">Color
                                                name</span></a>
                                    </div><!-- End .product-nav -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->

                            <div class="product product-2">
                                <figure class="product-media">
                                    <span class="product-label label-circle label-top">برتر</span>
                                    <a href="product.html">
                                        <img src="site/images/demos/demo-4/products/product-1.jpg" alt="تصویر محصول"
                                             class="product-image">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist"
                                           title="افزودن به لیست علاقه مندی"></a>
                                    </div><!-- End .product-action -->

                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart" title="افزودن به سبد خرید"><span>افزودن
                                                به
                                                سبد خرید</span></a>
                                        <a href="popup/quickView.html" class="btn-product btn-quickview"
                                           title="مشاهده سریع محصول"><span>مشاهده سریع</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">لپ تاپ</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="product.html">لپ تاپ MacBook Pro - 13 اینچ</a>
                                    </h3><!-- End .product-title -->
                                    <div class="product-price">
                                        1,199,000 تومان
                                    </div><!-- End .product-price -->
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 100%;"></div>
                                            <!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <span class="ratings-text">( 4 دیدگاه )</span>
                                    </div><!-- End .rating-container -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->

                            <div class="product product-2">
                                <figure class="product-media">
                                    <a href="product.html">
                                        <img src="{{url('site/assets/images/demos/demo-4/products/product-2.jpg')}}" alt="تصویر محصول"
                                             class="product-image">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist"
                                           title="افزودن به لیست علاقه مندی"></a>
                                    </div><!-- End .product-action -->

                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart" title="افزودن به سبد خرید"><span>افزودن
                                                به
                                                سبد خرید</span></a>
                                        <a href="popup/quickView.html" class="btn-product btn-quickview"
                                           title="مشاهده سریع محصول"><span>مشاهده سریع</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">لوازم صوتی</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="product.html">اسپیکر بلوتوث</a></h3>
                                    <!-- End .product-title -->
                                    <div class="product-price">
                                        79,000 تومان
                                    </div><!-- End .product-price -->
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <span class="ratings-text">( 6 دیدگاه )</span>
                                    </div><!-- End .rating-container -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->

                            <div class="product product-2">
                                <figure class="product-media">
                                    <span class="product-label label-circle label-new">جدید</span>
                                    <a href="product.html">
                                        <img src="{{url('site/assets/images/demos/demo-4/products/product-3.jpg')}}" alt="تصویر محصول"
                                             class="product-image">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist"
                                           title="افزودن به لیست علاقه مندی"></a>
                                    </div><!-- End .product-action -->

                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart" title="افزودن به سبد خرید"><span>افزودن
                                                به
                                                سبد خرید</span></a>
                                        <a href="popup/quickView.html" class="btn-product btn-quickview"
                                           title="مشاهده سریع محصول"><span>مشاهده سریع</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">تب لت</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="product.html">آیپد پرو اپل - سایز 11 اینچ - حافظه
                                            256 گیگ</a></h3><!-- End .product-title -->
                                    <div class="product-price">
                                        899,000 تومان
                                    </div><!-- End .product-price -->
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <span class="ratings-text">( 4 دیدگاه )</span>
                                    </div><!-- End .rating-container -->

                                    <div class="product-nav product-nav-dots">
                                        <a href="#" style="background: #edd2c8;"><span class="sr-only">Color
                                                name</span></a>
                                        <a href="#" style="background: #eaeaec;"><span class="sr-only">Color
                                                name</span></a>
                                        <a href="#" class="active" style="background: #333333;"><span
                                                class="sr-only">Color name</span></a>
                                    </div><!-- End .product-nav -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->
                        </div><!-- End .owl-carousel -->
                    </div><!-- .End .tab-pane -->
                    <div class="tab-pane p-0 fade" id="new-acc-tab" role="tabpanel" aria-labelledby="new-acc-link">
                        <div class="owl-carousel owl-full carousel-equal-height carousel-with-shadow" data-toggle="owl"
                             data-owl-options='{
                                "nav": true,
                                "dots": true,
                                "margin": 20,
                                "loop": false,
                                "responsive": {
                                    "0": {
                                        "items":2
                                    },
                                    "480": {
                                        "items":2
                                    },
                                    "768": {
                                        "items":3
                                    },
                                    "992": {
                                        "items":4
                                    },
                                    "1200": {
                                        "items":5
                                    }
                                }
                            }'>
                            <div class="product product-2">
                                <figure class="product-media">
                                    <span class="product-label label-circle label-top">برتر</span>
                                    <a href="product.html">
                                        <img src="{{url('site/assets/images/demos/demo-4/products/product-1.jpg')}}" alt="تصویر محصول"
                                             class="product-image">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist"
                                           title="افزودن به لیست علاقه مندی"></a>
                                    </div><!-- End .product-action -->

                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart" title="افزودن به سبد خرید"><span>افزودن
                                                به
                                                سبد خرید</span></a>
                                        <a href="popup/quickView.html" class="btn-product btn-quickview"
                                           title="مشاهده سریع محصول"><span>مشاهده سریع</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">لپ تاپ</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="product.html">لپ تاپ MacBook Pro - 13 اینچ</a>
                                    </h3><!-- End .product-title -->
                                    <div class="product-price">
                                        1,199,000 تومان
                                    </div><!-- End .product-price -->
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 100%;"></div>
                                            <!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <span class="ratings-text">( 4 دیدگاه )</span>
                                    </div><!-- End .rating-container -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->

                            <div class="product product-2">
                                <figure class="product-media">
                                    <span class="product-label label-circle label-top">برتر</span>
                                    <a href="product.html">
                                        <img src="{{url('site/assets/images/demos/demo-4/products/product-5.jpg')}}" alt="تصویر محصول"
                                             class="product-image">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist"
                                           title="افزودن به لیست علاقه مندی"></a>
                                    </div><!-- End .product-action -->

                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart" title="افزودن به سبد خرید"><span>افزودن
                                                به
                                                سبد خرید</span></a>
                                        <a href="popup/quickView.html" class="btn-product btn-quickview"
                                           title="مشاهده سریع محصول"><span>مشاهده سریع</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">تلویزیون و سینما خانگی</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="product.html">تلویزون LED سامسونگ - سایز 55
                                            اینچ</a></h3><!-- End .product-title -->
                                    <div class="product-price">
                                        899,000 تومان
                                    </div><!-- End .product-price -->
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <span class="ratings-text">( 5 دیدگاه )</span>
                                    </div><!-- End .rating-container -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->

                            <div class="product product-2">
                                <figure class="product-media">
                                    <span class="product-label label-circle label-top">برتر</span>
                                    <a href="product.html">
                                        <img src="{{url('site/assets/images/demos/demo-4/products/product-1.jpg')}}" alt="تصویر محصول"
                                             class="product-image">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist"
                                           title="افزودن به لیست علاقه مندی"></a>
                                    </div><!-- End .product-action -->

                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart" title="افزودن به سبد خرید"><span>افزودن
                                                به
                                                سبد خرید</span></a>
                                        <a href="popup/quickView.html" class="btn-product btn-quickview"
                                           title="مشاهده سریع محصول"><span>مشاهده سریع</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">لپ تاپ</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="product.html">لپ تاپ MacBook Pro - 13 اینچ</a>
                                    </h3><!-- End .product-title -->
                                    <div class="product-price">
                                        1,199,000 تومان
                                    </div><!-- End .product-price -->
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 100%;"></div>
                                            <!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <span class="ratings-text">( 4 دیدگاه )</span>
                                    </div><!-- End .rating-container -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->

                            <div class="product product-2">
                                <figure class="product-media">
                                    <a href="product.html">
                                        <img src="{{url('site/assets/images/demos/demo-4/products/product-2.jpg')}}" alt="تصویر محصول"
                                             class="product-image">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist"
                                           title="افزودن به لیست علاقه مندی"></a>
                                    </div><!-- End .product-action -->

                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart" title="افزودن به سبد خرید"><span>افزودن
                                                به
                                                سبد خرید</span></a>
                                        <a href="popup/quickView.html" class="btn-product btn-quickview"
                                           title="مشاهده سریع محصول"><span>مشاهده سریع</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">لوازم صوتی</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="product.html">اسپیکر بلوتوث</a></h3>
                                    <!-- End .product-title -->
                                    <div class="product-price">
                                        79,000 تومان
                                    </div><!-- End .product-price -->
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <span class="ratings-text">( 6 دیدگاه )</span>
                                    </div><!-- End .rating-container -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->

                            <div class="product product-2">
                                <figure class="product-media">
                                    <span class="product-label label-circle label-new">جدید</span>
                                    <a href="product.html">
                                        <img src="{{url('site/assets/images/demos/demo-4/products/product-3.jpg')}}" alt="تصویر محصول"
                                             class="product-image">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist"
                                           title="افزودن به لیست علاقه مندی"></a>
                                    </div><!-- End .product-action -->

                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart" title="افزودن به سبد خرید"><span>افزودن
                                                به
                                                سبد خرید</span></a>
                                        <a href="popup/quickView.html" class="btn-product btn-quickview"
                                           title="مشاهده سریع محصول"><span>مشاهده سریع</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">تب لت</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="product.html">آیپد پرو اپل - سایز 11 اینچ - حافظه
                                            256 گیگ</a></h3><!-- End .product-title -->
                                    <div class="product-price">
                                        899,000 تومان
                                    </div><!-- End .product-price -->
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <span class="ratings-text">( 4 دیدگاه )</span>
                                    </div><!-- End .rating-container -->

                                    <div class="product-nav product-nav-dots">
                                        <a href="#" style="background: #edd2c8;"><span class="sr-only">Color
                                                name</span></a>
                                        <a href="#" style="background: #eaeaec;"><span class="sr-only">Color
                                                name</span></a>
                                        <a href="#" class="active" style="background: #333333;"><span
                                                class="sr-only">Color name</span></a>
                                    </div><!-- End .product-nav -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->
                        </div><!-- End .owl-carousel -->
                    </div><!-- .End .tab-pane -->
                </div><!-- End .tab-content -->
            </div><!-- End .container -->

            <div class="mb-6"></div><!-- End .mb-6 -->

            <div class="container">
                <div class="cta cta-border mb-5" style="background-image:url('{{url('site/assets/images/demos/demo-4/bg-1.jpg')}}') ;">
                    <img src="{{url('site/assets/images/demos/demo-4/camera.png')}}" alt="camera" class="cta-img">
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <div class="cta-content">
                                <div class="cta-text text-right text-white">
                                    <p>پیشنهاد ویژه امروز <br><strong> HERO7 Black</strong></p>
                                </div><!-- End .cta-text -->
                                <a href="#" class="btn btn-primary btn-round"><span>خرید - 429,000 تومان</span><i
                                        class="icon-long-arrow-left"></i></a>
                            </div><!-- End .cta-content -->
                        </div><!-- End .col-md-12 -->
                    </div><!-- End .row -->
                </div><!-- End .cta -->
            </div><!-- End .container -->

            <div class="container">
                <div class="heading text-center mb-3">
                    <h2 class="title text-center">پیشنهاد و تخفیف</h2><!-- End .title -->
                    <p class="title-desc text-center">پیشنهادهای شگفت انگیز امروز</p><!-- End .title-desc -->
                </div><!-- End .heading -->

                <div class="row">
                    <div class="col-lg-6 deal-col">
                        <div class="deal" style="background-image:url('{{url('site/assets/images/demos/demo-4/deal/bg-1.jpg')}}') ;">
                            <div class="deal-top">
                                <h2>پیشنهاد امروز</h2>
                                <h4>تعداد محدود </h4>
                            </div><!-- End .deal-top -->

                            <div class="deal-content">
                                <h3 class="product-title"><a href="product.html">اسپیکر خانگی هوشمند</a></h3>
                                <!-- End .product-title -->

                                <div class="product-price">
                                    <span class="new-price">129,000 تومان</span>
                                    <span class="old-price">150,000</span>
                                </div><!-- End .product-price -->

                                <a href="product.html" class="btn btn-link"><span>خرید</span><i
                                        class="icon-long-arrow-left"></i></a>
                            </div><!-- End .deal-content -->

                            <div class="deal-bottom">
                                <div class="deal-countdown daily-deal-countdown" data-until="+10h"></div>
                                <!-- End .deal-countdown -->
                            </div><!-- End .deal-bottom -->
                        </div><!-- End .deal -->
                    </div><!-- End .col-lg-6 -->

                    <div class="col-lg-6 deal-col">
                        <div class="deal" style="background-image:url('{{url('site/assets/images/demos/demo-4/deal/bg-2.jpg')}}') ;">
                            <div class="deal-top">
                                <h2>پیشنهاد ویژه برای شما</h2>
                                <h4>وارد شوید و پیشنهادهای ویژه مخصوص خود را مشاهده کنید</h4>
                            </div><!-- End .deal-top -->

                            <div class="deal-content">
                                <h3 class="product-title"><a href="product.html">شارژر بی سیم آیفون / اندروید</a></h3>
                                <!-- End .product-title -->

                                <div class="product-price">
                                    <span class="new-price">299,000 تومان</span>
                                </div><!-- End .product-price -->

                                <a href="login.html" class="btn btn-link"><span>وارد شوید و پول خود را ذخیره
                                        کنید</span><i class="icon-long-arrow-left"></i></a>
                            </div><!-- End .deal-content -->

                            <div class="deal-bottom">
                                <div class="deal-countdown offer-countdown" data-until="+11d"></div>
                                <!-- End .deal-countdown -->
                            </div><!-- End .deal-bottom -->
                        </div><!-- End .deal -->
                    </div><!-- End .col-lg-6 -->
                </div><!-- End .row -->

                <div class="more-container text-center mt-1 mb-5">
                    <a href="#" class="btn btn-outline-dark-2 btn-round btn-more"><span>مشاهده تخفیف های بیشتر</span><i
                            class="icon-long-arrow-left"></i></a>
                </div><!-- End .more-container -->
            </div><!-- End .container -->

            <div class="container">
                <hr class="mb-0">
                <div class="owl-carousel mt-5 mb-5 owl-simple" data-toggle="owl" data-owl-options='{
                        "nav": false,
                        "dots": false,
                        "margin": 30,
                        "loop": false,
                        "responsive": {
                            "0": {
                                "items":2
                            },
                            "420": {
                                "items":3
                            },
                            "600": {
                                "items":4
                            },
                            "900": {
                                "items":5
                            },
                            "1024": {
                                "items":6
                            }
                        }
                    }'>
                    <a href="#" class="brand">
                        <img src="{{url('site/assets/images/brands/1.png')}}" alt="نام برند">
                    </a>

                    <a href="#" class="brand">
                        <img src="{{url('site/assets/images/brands/2.png')}}" alt="نام برند">
                    </a>

                    <a href="#" class="brand">
                        <img src="{{url('site/assets/images/brands/3.png')}}" alt="نام برند">
                    </a>

                    <a href="#" class="brand">
                        <img src="{{url('site/assets/images/brands/4.png')}}" alt="نام برند">
                    </a>

                    <a href="#" class="brand">
                        <img src="{{url('site/assets/images/brands/5.png')}}" alt="نام برند">
                    </a>

                    <a href="#" class="brand">
                        <img src="{{url('site/assets/images/brands/6.png')}}" alt="نام برند">
                    </a>
                </div><!-- End .owl-carousel -->
            </div><!-- End .container -->

            <div class="bg-light pt-5 pb-6">
                <div class="container trending-products">
                    <div class="heading heading-flex mb-3">
                        <div class="heading-left">
                            <h2 class="title">محصولات برتر</h2><!-- End .title -->
                        </div><!-- End .heading-left -->

                        <div class="heading-right">
                            <ul class="nav nav-pills nav-border-anim justify-content-center" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="trending-top-link" data-toggle="tab"
                                       href="#trending-top-tab" role="tab" aria-controls="trending-top-tab"
                                       aria-selected="true">محبوب ترین</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="trending-best-link" data-toggle="tab"
                                       href="#trending-best-tab" role="tab" aria-controls="trending-best-tab"
                                       aria-selected="false">بیش ترین فروش</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="trending-sale-link" data-toggle="tab"
                                       href="#trending-sale-tab" role="tab" aria-controls="trending-sale-tab"
                                       aria-selected="false">جدیدترین</a>
                                </li>
                            </ul>
                        </div><!-- End .heading-right -->
                    </div><!-- End .heading -->

                    <div class="row">
                        <div class="col-xl-5col d-none d-xl-block">
                            <div class="banner">
                                <a href="#">
                                    <img src="{{url('site/assets/images/demos/demo-4/banners/banner-4.jpg')}}" alt="بنر">
                                </a>
                            </div><!-- End .banner -->
                        </div><!-- End .col-xl-5col -->

                        <div class="col-xl-4-5col">
                            <div class="tab-content tab-content-carousel just-action-icons-sm">
                                <div class="tab-pane p-0 fade show active" id="trending-top-tab" role="tabpanel"
                                     aria-labelledby="trending-top-link">
                                    <div class="owl-carousel owl-full carousel-equal-height carousel-with-shadow"
                                         data-toggle="owl" data-owl-options='{
                                            "nav": true,
                                            "dots": false,
                                            "margin": 20,
                                            "loop": false,
                                            "responsive": {
                                                "0": {
                                                    "items":2
                                                },
                                                "480": {
                                                    "items":2
                                                },
                                                "768": {
                                                    "items":3
                                                },
                                                "992": {
                                                    "items":4
                                                }
                                            }
                                        }'>
                                        <div class="product product-2">
                                            <figure class="product-media">
                                                <span class="product-label label-circle label-top">برتر</span>
                                                <a href="product.html">
                                                    <img src="{{url('site/assets/images/demos/demo-4/products/product-6.jpg')}}"
                                                         alt="تصویر محصول" class="product-image">
                                                </a>

                                                <div class="product-action-vertical">
                                                    <a href="#" class="btn-product-icon btn-wishlist"
                                                       title="افزودن به لیست علاقه مندی"></a>
                                                </div><!-- End .product-action -->

                                                <div class="product-action">
                                                    <a href="#" class="btn-product btn-cart"
                                                       title="افزودن به سبد خرید"><span>افزودن به سبد خرید</span></a>
                                                    <a href="popup/quickView.html" class="btn-product btn-quickview"
                                                       title="مشاهده سریع محصول"><span>مشاهده سریع</span></a>
                                                </div><!-- End .product-action -->
                                            </figure><!-- End .product-media -->

                                            <div class="product-body">
                                                <div class="product-cat">
                                                    <a href="#">هدفون</a>
                                                </div><!-- End .product-cat -->
                                                <h3 class="product-title"><a href="product.html">هندزفری بی سیم</a></h3>
                                                <!-- End .product-title -->
                                                <div class="product-price">
                                                    199,000 تومان
                                                </div><!-- End .product-price -->
                                                <div class="ratings-container">
                                                    <div class="ratings">
                                                        <div class="ratings-val" style="width: 100%;"></div>
                                                        <!-- End .ratings-val -->
                                                    </div><!-- End .ratings -->
                                                    <span class="ratings-text">( 4 دیدگاه )</span>
                                                </div><!-- End .rating-container -->

                                                <div class="product-nav product-nav-dots">
                                                    <a href="#" style="background: #69b4ff;"><span class="sr-only">Color
                                                            name</span></a>
                                                    <a href="#" style="background: #ff887f;"><span class="sr-only">Color
                                                            name</span></a>
                                                    <a href="#" class="active" style="background: #333333;"><span
                                                            class="sr-only">Color name</span></a>
                                                </div><!-- End .product-nav -->
                                            </div><!-- End .product-body -->
                                        </div><!-- End .product -->

                                        <div class="product product-2">
                                            <figure class="product-media">
                                                <a href="product.html">
                                                    <img src="{{url('site/assets/images/demos/demo-4/products/product-7.jpg')}}"
                                                         alt="تصویر محصول" class="product-image">
                                                </a>

                                                <div class="product-action-vertical">
                                                    <a href="#" class="btn-product-icon btn-wishlist"
                                                       title="افزودن به لیست علاقه مندی"></a>
                                                </div><!-- End .product-action -->

                                                <div class="product-action">
                                                    <a href="#" class="btn-product btn-cart"
                                                       title="افزودن به سبد خرید"><span>افزودن به سبد خرید</span></a>
                                                    <a href="popup/quickView.html" class="btn-product btn-quickview"
                                                       title="مشاهده سریع محصول"><span>مشاهده سریع</span></a>
                                                </div><!-- End .product-action -->
                                            </figure><!-- End .product-media -->

                                            <div class="product-body">
                                                <div class="product-cat">
                                                    <a href="#">بازی ویدیویی</a>
                                                </div><!-- End .product-cat -->
                                                <h3 class="product-title"><a href="product.html">دستگاه Xbox One S
                                                        500GB</a></h3><!-- End .product-title -->
                                                <div class="product-price">
                                                    279,000 تومان
                                                </div><!-- End .product-price -->
                                                <div class="ratings-container">
                                                    <div class="ratings">
                                                        <div class="ratings-val" style="width: 60%;"></div>
                                                        <!-- End .ratings-val -->
                                                    </div><!-- End .ratings -->
                                                    <span class="ratings-text">( 6 دیدگاه )</span>
                                                </div><!-- End .rating-container -->
                                            </div><!-- End .product-body -->
                                        </div><!-- End .product -->

                                        <div class="product product-2">
                                            <figure class="product-media">
                                                <span class="product-label label-circle label-new">جدید</span>
                                                <a href="product.html">
                                                    <img src="{{url('site/assets/images/demos/demo-4/products/product-8.jpg')}}"
                                                         alt="تصویر محصول" class="product-image">
                                                </a>

                                                <div class="product-action-vertical">
                                                    <a href="#" class="btn-product-icon btn-wishlist"
                                                       title="افزودن به لیست علاقه مندی"></a>
                                                </div><!-- End .product-action -->

                                                <div class="product-action">
                                                    <a href="#" class="btn-product btn-cart"
                                                       title="افزودن به سبد خرید"><span>افزودن به سبد خرید</span></a>
                                                    <a href="popup/quickView.html" class="btn-product btn-quickview"
                                                       title="مشاهده سریع محصول"><span>مشاهده سریع</span></a>
                                                </div><!-- End .product-action -->
                                            </figure><!-- End .product-media -->

                                            <div class="product-body">
                                                <div class="product-cat">
                                                    <a href="#">ساعت هوشمند</a>
                                                </div><!-- End .product-cat -->
                                                <h3 class="product-title"><a href="product.html">ساعت اپل - سری 4 جنس
                                                        صفحه آلمینیومی</a></h3><!-- End .product-title -->
                                                <div class="product-price">
                                                    499,000 تومان
                                                </div><!-- End .product-price -->
                                                <div class="ratings-container">
                                                    <div class="ratings">
                                                        <div class="ratings-val" style="width: 80%;"></div>
                                                        <!-- End .ratings-val -->
                                                    </div><!-- End .ratings -->
                                                    <span class="ratings-text">( 4 دیدگاه )</span>
                                                </div><!-- End .rating-container -->

                                                <div class="product-nav product-nav-dots">
                                                    <a href="#" style="background: #edd2c8;"><span class="sr-only">Color
                                                            name</span></a>
                                                    <a href="#" style="background: #eaeaec;"><span class="sr-only">Color
                                                            name</span></a>
                                                    <a href="#" class="active" style="background: #333333;"><span
                                                            class="sr-only">Color name</span></a>
                                                </div><!-- End .product-nav -->
                                            </div><!-- End .product-body -->
                                        </div><!-- End .product -->

                                        <div class="product product-2">
                                            <figure class="product-media">
                                                <span class="product-label label-circle label-top">برتر</span>
                                                <span class="product-label label-circle label-sale">فروش ویژه</span>
                                                <a href="product.html">
                                                    <img src="{{url('site/assets/images/demos/demo-4/products/product-9.jpg')}}"
                                                         alt="تصویر محصول" class="product-image">
                                                </a>

                                                <div class="product-action-vertical">
                                                    <a href="#" class="btn-product-icon btn-wishlist"
                                                       title="افزودن به لیست علاقه مندی"></a>
                                                </div><!-- End .product-action -->

                                                <div class="product-action">
                                                    <a href="#" class="btn-product btn-cart"
                                                       title="افزودن به سبد خرید"><span>افزودن به سبد خرید</span></a>
                                                    <a href="popup/quickView.html" class="btn-product btn-quickview"
                                                       title="مشاهده سریع محصول"><span>مشاهده سریع</span></a>
                                                </div><!-- End .product-action -->
                                            </figure><!-- End .product-media -->

                                            <div class="product-body">
                                                <div class="product-cat">
                                                    <a href="#">تلویزیون و سینما خانگی</a>
                                                </div><!-- End .product-cat -->
                                                <h3 class="product-title"><a href="product.html">تلویزیون LED Sony - مدل
                                                        Smart 4K Ultra HD</a></h3><!-- End .product-title -->
                                                <div class="product-price">
                                                    <span class="new-price">1,699,000 تومان</span>
                                                    <span class="old-price">1,999,000</span>
                                                </div><!-- End .product-price -->
                                                <div class="ratings-container">
                                                    <div class="ratings">
                                                        <div class="ratings-val" style="width: 80%;"></div>
                                                        <!-- End .ratings-val -->
                                                    </div><!-- End .ratings -->
                                                    <span class="ratings-text">( 10 دیدگاه )</span>
                                                </div><!-- End .rating-container -->
                                            </div><!-- End .product-body -->
                                        </div><!-- End .product -->

                                        <div class="product product-2">
                                            <figure class="product-media">
                                                <span class="product-label label-circle label-new">جدید</span>
                                                <a href="product.html">
                                                    <img src="{{url('site/assets/images/demos/demo-4/products/product-3.jpg')}}"
                                                         alt="تصویر محصول" class="product-image">
                                                </a>

                                                <div class="product-action-vertical">
                                                    <a href="#" class="btn-product-icon btn-wishlist"
                                                       title="افزودن به لیست علاقه مندی"></a>
                                                </div><!-- End .product-action -->

                                                <div class="product-action">
                                                    <a href="#" class="btn-product btn-cart"
                                                       title="افزودن به سبد خرید"><span>افزودن به سبد خرید</span></a>
                                                    <a href="popup/quickView.html" class="btn-product btn-quickview"
                                                       title="مشاهده سریع محصول"><span>مشاهده سریع</span></a>
                                                </div><!-- End .product-action -->
                                            </figure><!-- End .product-media -->

                                            <div class="product-body">
                                                <div class="product-cat">
                                                    <a href="#">تب لت</a>
                                                </div><!-- End .product-cat -->
                                                <h3 class="product-title"><a href="product.html">آیپد اپل - سایز 11 اینچ
                                                        - 256 گیگ</a></h3><!-- End .product-title -->
                                                <div class="product-price">
                                                    899,000 تومان
                                                </div><!-- End .product-price -->
                                                <div class="ratings-container">
                                                    <div class="ratings">
                                                        <div class="ratings-val" style="width: 80%;"></div>
                                                        <!-- End .ratings-val -->
                                                    </div><!-- End .ratings -->
                                                    <span class="ratings-text">( 4 دیدگاه )</span>
                                                </div><!-- End .rating-container -->

                                                <div class="product-nav product-nav-dots">
                                                    <a href="#" style="background: #edd2c8;"><span class="sr-only">Color
                                                            name</span></a>
                                                    <a href="#" style="background: #eaeaec;"><span class="sr-only">Color
                                                            name</span></a>
                                                    <a href="#" class="active" style="background: #333333;"><span
                                                            class="sr-only">Color name</span></a>
                                                </div><!-- End .product-nav -->
                                            </div><!-- End .product-body -->
                                        </div><!-- End .product -->
                                    </div><!-- End .owl-carousel -->
                                </div><!-- .End .tab-pane -->
                                <div class="tab-pane p-0 fade" id="trending-best-tab" role="tabpanel"
                                     aria-labelledby="trending-best-link">
                                    <div class="owl-carousel owl-full carousel-equal-height carousel-with-shadow"
                                         data-toggle="owl" data-owl-options='{
                                            "nav": true,
                                            "dots": false,
                                            "margin": 20,
                                            "loop": false,
                                            "responsive": {
                                                "0": {
                                                    "items":2
                                                },
                                                "480": {
                                                    "items":2
                                                },
                                                "768": {
                                                    "items":3
                                                },
                                                "992": {
                                                    "items":4
                                                }
                                            }
                                        }'>
                                        <div class="product product-2">
                                            <figure class="product-media">
                                                <span class="product-label label-circle label-new">جدید</span>
                                                <a href="product.html">
                                                    <img src="{{url('site/assets/images/demos/demo-4/products/product-3.jpg')}}"
                                                         alt="تصویر محصول" class="product-image">
                                                </a>

                                                <div class="product-action-vertical">
                                                    <a href="#" class="btn-product-icon btn-wishlist"
                                                       title="افزودن به لیست علاقه مندی"></a>
                                                </div><!-- End .product-action -->

                                                <div class="product-action">
                                                    <a href="#" class="btn-product btn-cart"
                                                       title="افزودن به سبد خرید"><span>افزودن به سبد خرید</span></a>
                                                    <a href="popup/quickView.html" class="btn-product btn-quickview"
                                                       title="مشاهده سریع محصول"><span>مشاهده سریع</span></a>
                                                </div><!-- End .product-action -->
                                            </figure><!-- End .product-media -->

                                            <div class="product-body">
                                                <div class="product-cat">
                                                    <a href="#">تب لت</a>
                                                </div><!-- End .product-cat -->
                                                <h3 class="product-title"><a href="product.html">آیپد اپل - سایز 11 اینچ
                                                        - 256 گیگ</a></h3><!-- End .product-title -->
                                                <div class="product-price">
                                                    899,000 تومان
                                                </div><!-- End .product-price -->
                                                <div class="ratings-container">
                                                    <div class="ratings">
                                                        <div class="ratings-val" style="width: 80%;"></div>
                                                        <!-- End .ratings-val -->
                                                    </div><!-- End .ratings -->
                                                    <span class="ratings-text">( 4 دیدگاه )</span>
                                                </div><!-- End .rating-container -->

                                                <div class="product-nav product-nav-dots">
                                                    <a href="#" style="background: #edd2c8;"><span class="sr-only">Color
                                                            name</span></a>
                                                    <a href="#" style="background: #eaeaec;"><span class="sr-only">Color
                                                            name</span></a>
                                                    <a href="#" class="active" style="background: #333333;"><span
                                                            class="sr-only">Color name</span></a>
                                                </div><!-- End .product-nav -->
                                            </div><!-- End .product-body -->
                                        </div><!-- End .product -->

                                        <div class="product product-2">
                                            <figure class="product-media">
                                                <a href="product.html">
                                                    <img src="{{url('site/assets/images/demos/demo-4/products/product-2.jpg')}}"
                                                         alt="تصویر محصول" class="product-image">
                                                </a>

                                                <div class="product-action-vertical">
                                                    <a href="#" class="btn-product-icon btn-wishlist"
                                                       title="افزودن به لیست علاقه مندی"></a>
                                                </div><!-- End .product-action -->

                                                <div class="product-action">
                                                    <a href="#" class="btn-product btn-cart"
                                                       title="افزودن به سبد خرید"><span>افزودن به سبد خرید</span></a>
                                                    <a href="popup/quickView.html" class="btn-product btn-quickview"
                                                       title="مشاهده سریع محصول"><span>مشاهده سریع</span></a>
                                                </div><!-- End .product-action -->
                                            </figure><!-- End .product-media -->

                                            <div class="product-body">
                                                <div class="product-cat">
                                                    <a href="#">لوازم صوتی</a>
                                                </div><!-- End .product-cat -->
                                                <h3 class="product-title"><a href="product.html">Bose - SoundLink
                                                        Bluetooth Speaker</a></h3><!-- End .product-title -->
                                                <div class="product-price">
                                                    79,000 تومان
                                                </div><!-- End .product-price -->
                                                <div class="ratings-container">
                                                    <div class="ratings">
                                                        <div class="ratings-val" style="width: 60%;"></div>
                                                        <!-- End .ratings-val -->
                                                    </div><!-- End .ratings -->
                                                    <span class="ratings-text">( 6 دیدگاه )</span>
                                                </div><!-- End .rating-container -->
                                            </div><!-- End .product-body -->
                                        </div><!-- End .product -->

                                        <div class="product product-2">
                                            <figure class="product-media">
                                                <span class="product-label label-circle label-top">برتر</span>
                                                <span class="product-label label-circle label-sale">فروش ویژه</span>
                                                <a href="product.html">
                                                    <img src="{{url('site/assets/images/demos/demo-4/products/product-4.jpg')}}"
                                                         alt="تصویر محصول" class="product-image">
                                                </a>

                                                <div class="product-action-vertical">
                                                    <a href="#" class="btn-product-icon btn-wishlist"
                                                       title="افزودن به لیست علاقه مندی"></a>
                                                </div><!-- End .product-action -->

                                                <div class="product-action">
                                                    <a href="#" class="btn-product btn-cart"
                                                       title="افزودن به سبد خرید"><span>افزودن به سبد خرید</span></a>
                                                    <a href="popup/quickView.html" class="btn-product btn-quickview"
                                                       title="مشاهده سریع محصول"><span>مشاهده سریع</span></a>
                                                </div><!-- End .product-action -->
                                            </figure><!-- End .product-media -->

                                            <div class="product-body">
                                                <div class="product-cat">
                                                    <a href="#">موبایل</a>
                                                </div><!-- End .product-cat -->
                                                <h3 class="product-title"><a href="product.html">گوشی Google - مدل Pixel
                                                        3 XL -
                                                        حافظه 128 گیگ</a></h3><!-- End .product-title -->
                                                <div class="product-price">
                                                    <span class="new-price">35,000 تومان</span>
                                                    <span class="old-price">41,000</span>
                                                </div><!-- End .product-price -->
                                                <div class="ratings-container">
                                                    <div class="ratings">
                                                        <div class="ratings-val" style="width: 100%;"></div>
                                                        <!-- End .ratings-val -->
                                                    </div><!-- End .ratings -->
                                                    <span class="ratings-text">( 10 دیدگاه )</span>
                                                </div><!-- End .rating-container -->

                                                <div class="product-nav product-nav-dots">
                                                    <a href="#" class="active" style="background: #edd2c8;"><span
                                                            class="sr-only">Color name</span></a>
                                                    <a href="#" style="background: #eaeaec;"><span class="sr-only">Color
                                                            name</span></a>
                                                    <a href="#" style="background: #333333;"><span class="sr-only">Color
                                                            name</span></a>
                                                </div><!-- End .product-nav -->
                                            </div><!-- End .product-body -->
                                        </div><!-- End .product -->

                                        <div class="product product-2">
                                            <figure class="product-media">
                                                <span class="product-label label-circle label-top">برتر</span>
                                                <a href="product.html">
                                                    <img src="{{url('site/assets/images/demos/demo-4/products/product-5.jpg')}}"
                                                         alt="تصویر محصول" class="product-image">
                                                </a>

                                                <div class="product-action-vertical">
                                                    <a href="#" class="btn-product-icon btn-wishlist"
                                                       title="افزودن به لیست علاقه مندی"></a>
                                                </div><!-- End .product-action -->

                                                <div class="product-action">
                                                    <a href="#" class="btn-product btn-cart"
                                                       title="افزودن به سبد خرید"><span>افزودن به سبد خرید</span></a>
                                                    <a href="popup/quickView.html" class="btn-product btn-quickview"
                                                       title="مشاهده سریع محصول"><span>مشاهده سریع</span></a>
                                                </div><!-- End .product-action -->
                                            </figure><!-- End .product-media -->

                                            <div class="product-body">
                                                <div class="product-cat">
                                                    <a href="#">تلویزیون و سینما خانگی</a>
                                                </div><!-- End .product-cat -->
                                                <h3 class="product-title"><a href="product.html">Samsung - 55" Class LED
                                                        2160p Smart</a></h3><!-- End .product-title -->
                                                <div class="product-price">
                                                    899,000 تومان
                                                </div><!-- End .product-price -->
                                                <div class="ratings-container">
                                                    <div class="ratings">
                                                        <div class="ratings-val" style="width: 60%;"></div>
                                                        <!-- End .ratings-val -->
                                                    </div><!-- End .ratings -->
                                                    <span class="ratings-text">( 5 دیدگاه )</span>
                                                </div><!-- End .rating-container -->
                                            </div><!-- End .product-body -->
                                        </div><!-- End .product -->

                                        <div class="product product-2">
                                            <figure class="product-media">
                                                <span class="product-label label-circle label-top">برتر</span>
                                                <a href="product.html">
                                                    <img src="{{url('site/assets/images/demos/demo-4/products/product-1.jpg')}}"
                                                         alt="تصویر محصول" class="product-image">
                                                </a>

                                                <div class="product-action-vertical">
                                                    <a href="#" class="btn-product-icon btn-wishlist"
                                                       title="افزودن به لیست علاقه مندی"></a>
                                                </div><!-- End .product-action -->

                                                <div class="product-action">
                                                    <a href="#" class="btn-product btn-cart"
                                                       title="افزودن به سبد خرید"><span>افزودن به سبد خرید</span></a>
                                                    <a href="popup/quickView.html" class="btn-product btn-quickview"
                                                       title="مشاهده سریع محصول"><span>مشاهده سریع</span></a>
                                                </div><!-- End .product-action -->
                                            </figure><!-- End .product-media -->

                                            <div class="product-body">
                                                <div class="product-cat">
                                                    <a href="#">لپ تاپ</a>
                                                </div><!-- End .product-cat -->
                                                <h3 class="product-title"><a href="product.html">لپ تاپ MacBook Pro -
                                                        سایز 13 اینچ</a></h3><!-- End .product-title -->
                                                <div class="product-price">
                                                    1,199,000 تومان
                                                </div><!-- End .product-price -->
                                                <div class="ratings-container">
                                                    <div class="ratings">
                                                        <div class="ratings-val" style="width: 100%;"></div>
                                                        <!-- End .ratings-val -->
                                                    </div><!-- End .ratings -->
                                                    <span class="ratings-text">( 4 دیدگاه )</span>
                                                </div><!-- End .rating-container -->
                                            </div><!-- End .product-body -->
                                        </div><!-- End .product -->
                                    </div><!-- End .owl-carousel -->
                                </div><!-- .End .tab-pane -->
                                <div class="tab-pane p-0 fade" id="trending-sale-tab" role="tabpanel"
                                     aria-labelledby="trending-sale-link">
                                    <div class="owl-carousel owl-full carousel-equal-height carousel-with-shadow"
                                         data-toggle="owl" data-owl-options='{
                                            "nav": true,
                                            "dots": false,
                                            "margin": 20,
                                            "loop": false,
                                            "responsive": {
                                                "0": {
                                                    "items":2
                                                },
                                                "480": {
                                                    "items":2
                                                },
                                                "768": {
                                                    "items":3
                                                },
                                                "992": {
                                                    "items":4
                                                }
                                            }
                                        }'>
                                        <div class="product product-2">
                                            <figure class="product-media">
                                                <span class="product-label label-circle label-new">جدید</span>
                                                <a href="product.html">
                                                    <img src="{{url('site/assets/images/demos/demo-4/products/product-8.jpg')}}"
                                                         alt="تصویر محصول" class="product-image">
                                                </a>

                                                <div class="product-action-vertical">
                                                    <a href="#" class="btn-product-icon btn-wishlist"
                                                       title="افزودن به لیست علاقه مندی"></a>
                                                </div><!-- End .product-action -->

                                                <div class="product-action">
                                                    <a href="#" class="btn-product btn-cart"
                                                       title="افزودن به سبد خرید"><span>افزودن به سبد خرید</span></a>
                                                    <a href="popup/quickView.html" class="btn-product btn-quickview"
                                                       title="مشاهده سریع محصول"><span>مشاهده سریع</span></a>
                                                </div><!-- End .product-action -->
                                            </figure><!-- End .product-media -->

                                            <div class="product-body">
                                                <div class="product-cat">
                                                    <a href="#">ساعت هوشمند</a>
                                                </div><!-- End .product-cat -->
                                                <h3 class="product-title"><a href="product.html">ساعت اپل - سری 4 جنس
                                                        صفحه آلمینیومی</a></h3><!-- End .product-title -->
                                                <div class="product-price">
                                                    499,000 تومان
                                                </div><!-- End .product-price -->
                                                <div class="ratings-container">
                                                    <div class="ratings">
                                                        <div class="ratings-val" style="width: 80%;"></div>
                                                        <!-- End .ratings-val -->
                                                    </div><!-- End .ratings -->
                                                    <span class="ratings-text">( 4 دیدگاه )</span>
                                                </div><!-- End .rating-container -->

                                                <div class="product-nav product-nav-dots">
                                                    <a href="#" style="background: #edd2c8;"><span class="sr-only">Color
                                                            name</span></a>
                                                    <a href="#" style="background: #eaeaec;"><span class="sr-only">Color
                                                            name</span></a>
                                                    <a href="#" class="active" style="background: #333333;"><span
                                                            class="sr-only">Color name</span></a>
                                                </div><!-- End .product-nav -->
                                            </div><!-- End .product-body -->
                                        </div><!-- End .product -->

                                        <div class="product product-2">
                                            <figure class="product-media">
                                                <span class="product-label label-circle label-top">برتر</span>
                                                <a href="product.html">
                                                    <img src="{{url('site/assets/images/demos/demo-4/products/product-6.jpg')}}"
                                                         alt="تصویر محصول" class="product-image">
                                                </a>

                                                <div class="product-action-vertical">
                                                    <a href="#" class="btn-product-icon btn-wishlist"
                                                       title="افزودن به لیست علاقه مندی"></a>
                                                </div><!-- End .product-action -->

                                                <div class="product-action">
                                                    <a href="#" class="btn-product btn-cart"
                                                       title="افزودن به سبد خرید"><span>افزودن به سبد خرید</span></a>
                                                    <a href="popup/quickView.html" class="btn-product btn-quickview"
                                                       title="مشاهده سریع محصول"><span>مشاهده سریع</span></a>
                                                </div><!-- End .product-action -->
                                            </figure><!-- End .product-media -->

                                            <div class="product-body">
                                                <div class="product-cat">
                                                    <a href="#">هدفون</a>
                                                </div><!-- End .product-cat -->
                                                <h3 class="product-title"><a href="product.html">هندزفری بی سیم</a></h3>
                                                <!-- End .product-title -->
                                                <div class="product-price">
                                                    199,000 تومان
                                                </div><!-- End .product-price -->
                                                <div class="ratings-container">
                                                    <div class="ratings">
                                                        <div class="ratings-val" style="width: 100%;"></div>
                                                        <!-- End .ratings-val -->
                                                    </div><!-- End .ratings -->
                                                    <span class="ratings-text">( 4 دیدگاه )</span>
                                                </div><!-- End .rating-container -->

                                                <div class="product-nav product-nav-dots">
                                                    <a href="#" style="background: #69b4ff;"><span class="sr-only">Color
                                                            name</span></a>
                                                    <a href="#" style="background: #ff887f;"><span class="sr-only">Color
                                                            name</span></a>
                                                    <a href="#" class="active" style="background: #333333;"><span
                                                            class="sr-only">Color name</span></a>
                                                </div><!-- End .product-nav -->
                                            </div><!-- End .product-body -->
                                        </div><!-- End .product -->

                                        <div class="product product-2">
                                            <figure class="product-media">
                                                <a href="product.html">
                                                    <img src="{{url('site/assets/images/demos/demo-4/products/product-7.jpg')}}"
                                                         alt="تصویر محصول" class="product-image">
                                                </a>

                                                <div class="product-action-vertical">
                                                    <a href="#" class="btn-product-icon btn-wishlist"
                                                       title="افزودن به لیست علاقه مندی"></a>
                                                </div><!-- End .product-action -->

                                                <div class="product-action">
                                                    <a href="#" class="btn-product btn-cart"
                                                       title="افزودن به سبد خرید"><span>افزودن به سبد خرید</span></a>
                                                    <a href="popup/quickView.html" class="btn-product btn-quickview"
                                                       title="مشاهده سریع محصول"><span>مشاهده سریع</span></a>
                                                </div><!-- End .product-action -->
                                            </figure><!-- End .product-media -->

                                            <div class="product-body">
                                                <div class="product-cat">
                                                    <a href="#">بازی ویدیویی</a>
                                                </div><!-- End .product-cat -->
                                                <h3 class="product-title"><a href="product.html">دستگاه Xbox One S
                                                        500GB</a></h3><!-- End .product-title -->
                                                <div class="product-price">
                                                    279,000 تومان
                                                </div><!-- End .product-price -->
                                                <div class="ratings-container">
                                                    <div class="ratings">
                                                        <div class="ratings-val" style="width: 60%;"></div>
                                                        <!-- End .ratings-val -->
                                                    </div><!-- End .ratings -->
                                                    <span class="ratings-text">( 6 دیدگاه )</span>
                                                </div><!-- End .rating-container -->
                                            </div><!-- End .product-body -->
                                        </div><!-- End .product -->

                                        <div class="product product-2">
                                            <figure class="product-media">
                                                <span class="product-label label-circle label-new">جدید</span>
                                                <a href="product.html">
                                                    <img src="{{url('site/assets/images/demos/demo-4/products/product-3.jpg')}}"
                                                         alt="تصویر محصول" class="product-image">
                                                </a>

                                                <div class="product-action-vertical">
                                                    <a href="#" class="btn-product-icon btn-wishlist"
                                                       title="افزودن به لیست علاقه مندی"></a>
                                                </div><!-- End .product-action -->

                                                <div class="product-action">
                                                    <a href="#" class="btn-product btn-cart"
                                                       title="افزودن به سبد خرید"><span>افزودن به سبد خرید</span></a>
                                                    <a href="popup/quickView.html" class="btn-product btn-quickview"
                                                       title="مشاهده سریع محصول"><span>مشاهده سریع</span></a>
                                                </div><!-- End .product-action -->
                                            </figure><!-- End .product-media -->

                                            <div class="product-body">
                                                <div class="product-cat">
                                                    <a href="#">تب لت</a>
                                                </div><!-- End .product-cat -->
                                                <h3 class="product-title"><a href="product.html">آیپد اپل - سایز 11 اینچ
                                                        - 256 گیگ</a></h3><!-- End .product-title -->
                                                <div class="product-price">
                                                    899,000 تومان
                                                </div><!-- End .product-price -->
                                                <div class="ratings-container">
                                                    <div class="ratings">
                                                        <div class="ratings-val" style="width: 80%;"></div>
                                                        <!-- End .ratings-val -->
                                                    </div><!-- End .ratings -->
                                                    <span class="ratings-text">( 4 دیدگاه )</span>
                                                </div><!-- End .rating-container -->

                                                <div class="product-nav product-nav-dots">
                                                    <a href="#" style="background: #edd2c8;"><span class="sr-only">Color
                                                            name</span></a>
                                                    <a href="#" style="background: #eaeaec;"><span class="sr-only">Color
                                                            name</span></a>
                                                    <a href="#" class="active" style="background: #333333;"><span
                                                            class="sr-only">Color name</span></a>
                                                </div><!-- End .product-nav -->
                                            </div><!-- End .product-body -->
                                        </div><!-- End .product -->
                                    </div><!-- End .owl-carousel -->
                                </div><!-- .End .tab-pane -->
                            </div><!-- End .tab-content -->
                        </div><!-- End .col-xl-4-5col -->
                    </div><!-- End .row -->
                </div><!-- End .container -->
            </div><!-- End .bg-light pt-5 pb-6 -->

            <div class="mb-5"></div><!-- End .mb-5 -->

            <div class="container for-you">
                <div class="heading heading-flex mb-3">
                    <div class="heading-left">
                        <h2 class="title">پیشنهاد برای شما</h2><!-- End .title -->
                    </div><!-- End .heading-left -->

                    <div class="heading-right">
                        <a href="#" class="title-link">مشاهده همه پیشنهادها <i class="icon-long-arrow-left"></i></a>
                    </div><!-- End .heading-right -->
                </div><!-- End .heading -->

                <div class="products">
                    <div class="row justify-content-center">
                        <div class="col-6 col-md-4 col-lg-3">
                            <div class="product product-2">
                                <figure class="product-media">
                                    <span class="product-label label-circle label-sale">فروش ویژه</span>
                                    <a href="product.html">
                                        <img src="{{url('site/assets/images/demos/demo-4/products/product-10.jpg')}}"
                                             alt="تصویر محصول" class="product-image">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist"
                                           title="افزودن به لیست علاقه مندی"></a>
                                    </div><!-- End .product-action -->

                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart" title="افزودن به سبد خرید"><span>افزودن
                                                به
                                                سبد خرید</span></a>
                                        <a href="popup/quickView.html" class="btn-product btn-quickview"
                                           title="مشاهده سریع محصول"><span>مشاهده سریع</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">هدفون</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="product.html">هدفون وایرلس Beats </a></h3>
                                    <!-- End .product-title -->
                                    <div class="product-price">
                                        <span class="new-price">279,000 تومان</span>
                                        <span class="old-price">349,000</span>
                                    </div><!-- End .product-price -->
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 40%;"></div><!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <span class="ratings-text">( 4 دیدگاه )</span>
                                    </div><!-- End .rating-container -->

                                    <div class="product-nav product-nav-dots">
                                        <a href="#" class="active" style="background: #666666;"><span
                                                class="sr-only">Color name</span></a>
                                        <a href="#" style="background: #ff887f;"><span class="sr-only">Color
                                                name</span></a>
                                        <a href="#" style="background: #6699cc;"><span class="sr-only">Color
                                                name</span></a>
                                        <a href="#" style="background: #f3dbc1;"><span class="sr-only">Color
                                                name</span></a>
                                        <a href="#" style="background: #eaeaec;"><span class="sr-only">Color
                                                name</span></a>
                                    </div><!-- End .product-nav -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->
                        </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->

                        <div class="col-6 col-md-4 col-lg-3">
                            <div class="product product-2">
                                <figure class="product-media">
                                    <a href="product.html">
                                        <img src="{{url('site/assets/images/demos/demo-4/products/product-11.jpg')}}"
                                             alt="تصویر محصول" class="product-image">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist"
                                           title="افزودن به لیست علاقه مندی"></a>
                                    </div><!-- End .product-action -->

                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart" title="افزودن به سبد خرید"><span>افزودن
                                                به
                                                سبد خرید</span></a>
                                        <a href="popup/quickView.html" class="btn-product btn-quickview"
                                           title="مشاهده سریع محصول"><span>مشاهده سریع</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">دوربین فیلمبرداری</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="product.html">دستگاه GoPro - مدل HERO7 مشکی - ضد
                                            آب</a></h3><!-- End .product-title -->
                                    <div class="product-price">
                                        349,000 تومان
                                    </div><!-- End .product-price -->
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <span class="ratings-text">( 2 دیدگاه )</span>
                                    </div><!-- End .rating-container -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->
                        </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->

                        <div class="col-6 col-md-4 col-lg-3">
                            <div class="product product-2">
                                <figure class="product-media">
                                    <span class="product-label label-circle label-new">جدید</span>
                                    <a href="product.html">
                                        <img src="{{url('site/assets/images/demos/demo-4/products/product-12.jpg')}}"
                                             alt="تصویر محصول" class="product-image">
                                        <img src="{{url('site/assets/images/demos/demo-4/products/product-12-2.jpg')}}"
                                             alt="تصویر محصول" class="product-image-hover">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist"
                                           title="افزودن به لیست علاقه مندی"></a>
                                    </div><!-- End .product-action -->

                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart" title="افزودن به سبد خرید"><span>افزودن
                                                به
                                                سبد خرید</span></a>
                                        <a href="popup/quickView.html" class="btn-product btn-quickview"
                                           title="مشاهده سریع محصول"><span>مشاهده سریع</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">ساعت هوشمند</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="product.html">ساعت اپل - با بند سفید اسپورت</a>
                                    </h3><!-- End .product-title -->
                                    <div class="product-price">
                                        214,000 تومان
                                    </div><!-- End .product-price -->
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 0%;"></div><!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <span class="ratings-text">( 0 دیدگاه )</span>
                                    </div><!-- End .rating-container -->

                                    <div class="product-nav product-nav-dots">
                                        <a href="#" class="active" style="background: #e2e2e2;"><span
                                                class="sr-only">Color name</span></a>
                                        <a href="#" style="background: #333333;"><span class="sr-only">Color
                                                name</span></a>
                                        <a href="#" style="background: #f2bc9e;"><span class="sr-only">Color
                                                name</span></a>
                                    </div><!-- End .product-nav -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->
                        </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->

                        <div class="col-6 col-md-4 col-lg-3">
                            <div class="product product-2">
                                <figure class="product-media">
                                    <a href="product.html">
                                        <img src="{{url('site/assets/images/demos/demo-4/products/product-13.jpg')}}"
                                             alt="تصویر محصول" class="product-image">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist"
                                           title="افزودن به لیست علاقه مندی"></a>
                                    </div><!-- End .product-action -->

                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart" title="افزودن به سبد خرید"><span>افزودن
                                                به
                                                سبد خرید</span></a>
                                        <a href="popup/quickView.html" class="btn-product btn-quickview"
                                           title="مشاهده سریع محصول"><span>مشاهده سریع</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">لپ تاپ</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="product.html">لپ تاپ lenovo - 330-15IKBR
                                            15.6"</a></h3>
                                    <!-- End .product-title -->
                                    <div class="product-price">
                                        <span class="out-price">339,000 تومان</span>
                                        <span class="out-text">ناموجود</span>
                                    </div><!-- End .product-price -->
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <span class="ratings-text">( 11 دیدگاه )</span>
                                    </div><!-- End .rating-container -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->
                        </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->

                        <div class="col-6 col-md-4 col-lg-3">
                            <div class="product product-2">
                                <figure class="product-media">
                                    <a href="product.html">
                                        <img src="{{url('site/assets/images/demos/demo-4/products/product-14.jpg')}}"
                                             alt="تصویر محصول" class="product-image">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist"
                                           title="افزودن به لیست علاقه مندی"></a>
                                    </div><!-- End .product-action -->

                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart" title="افزودن به سبد خرید"><span>افزودن
                                                به
                                                سبد خرید</span></a>
                                        <a href="popup/quickView.html" class="btn-product btn-quickview"
                                           title="مشاهده سریع محصول"><span>مشاهده سریع</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">دوربین دیجیتال</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="product.html">دوربین سونی - Alpha a5100</a></h3>
                                    <!-- End .product-title -->
                                    <div class="product-price">
                                        499,000 تومان
                                    </div><!-- End .product-price -->
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 50%;"></div><!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <span class="ratings-text">( 11 دیدگاه )</span>
                                    </div><!-- End .rating-container -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->
                        </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->

                        <div class="col-6 col-md-4 col-lg-3">
                            <div class="product product-2">
                                <figure class="product-media">
                                    <a href="product.html">
                                        <img src="{{url('site/assets/images/demos/demo-4/products/product-15.jpg')}}"
                                             alt="تصویر محصول" class="product-image">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist"
                                           title="افزودن به لیست علاقه مندی"></a>
                                    </div><!-- End .product-action -->

                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart" title="افزودن به سبد خرید"><span>افزودن
                                                به
                                                سبد خرید</span></a>
                                        <a href="popup/quickView.html" class="btn-product btn-quickview"
                                           title="مشاهده سریع محصول"><span>مشاهده سریع</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">لپ تاپ</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="product.html">اسپیکر هوشمند کوچک</a></h3>
                                    <!-- End .product-title -->
                                    <div class="product-price">
                                        490,000 تومان
                                    </div><!-- End .product-price -->
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <span class="ratings-text">( 24 دیدگاه )</span>
                                    </div><!-- End .rating-container -->

                                    <div class="product-nav product-nav-dots">
                                        <a href="#" class="active" style="background: #ef837b;"><span
                                                class="sr-only">Color name</span></a>
                                        <a href="#" style="background: #333333;"><span class="sr-only">Color
                                                name</span></a>
                                        <a href="#" style="background: #e2e2e2;"><span class="sr-only">Color
                                                name</span></a>
                                    </div><!-- End .product-nav -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->
                        </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->

                        <div class="col-6 col-md-4 col-lg-3">
                            <div class="product product-2">
                                <figure class="product-media">
                                    <span class="product-label label-circle label-sale">فروش ویژه</span>
                                    <a href="product.html">
                                        <img src="{{url('site/assets/images/demos/demo-4/products/product-16.jpg')}}"
                                             alt="تصویر محصول" class="product-image">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist"
                                           title="افزودن به لیست علاقه مندی"></a>
                                    </div><!-- End .product-action -->

                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart" title="افزودن به سبد خرید"><span>افزودن
                                                به
                                                سبد خرید</span></a>
                                        <a href="popup/quickView.html" class="btn-product btn-quickview"
                                           title="مشاهده سریع محصول"><span>مشاهده سریع</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">لوازم صوتی</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="product.html">اسپیکر بلوتوث Portable </a></h3>
                                    <!-- End .product-title -->
                                    <div class="product-price">
                                        <span class="new-price">99,000 تومان</span>
                                        <span class="old-price">129,000</span>
                                    </div><!-- End .product-price -->
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 40%;"></div><!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <span class="ratings-text">( 4 دیدگاه )</span>
                                    </div><!-- End .rating-container -->

                                    <div class="product-nav product-nav-dots">
                                        <a href="#" class="active" style="background: #666666;"><span
                                                class="sr-only">Color name</span></a>
                                        <a href="#" style="background: #ff887f;"><span class="sr-only">Color
                                                name</span></a>
                                        <a href="#" style="background: #6699cc;"><span class="sr-only">Color
                                                name</span></a>
                                        <a href="#" style="background: #f3dbc1;"><span class="sr-only">Color
                                                name</span></a>
                                        <a href="#" style="background: #eaeaec;"><span class="sr-only">Color
                                                name</span></a>
                                    </div><!-- End .product-nav -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->
                        </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->

                        <div class="col-6 col-md-4 col-lg-3">
                            <div class="product product-2">
                                <figure class="product-media">
                                    <a href="product.html">
                                        <img src="{{url('site/assets/images/demos/demo-4/products/product-17.jpg')}}"
                                             alt="تصویر محصول" class="product-image">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist"
                                           title="افزودن به لیست علاقه مندی"></a>
                                    </div><!-- End .product-action -->

                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart" title="افزودن به سبد خرید"><span>افزودن
                                                به
                                                سبد خرید</span></a>
                                        <a href="popup/quickView.html" class="btn-product btn-quickview"
                                           title="مشاهده سریع محصول"><span>مشاهده سریع</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">خانه هوشمند</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="product.html">قطب نمای گوگل</a></h3>
                                    <!-- End .product-title -->
                                    <div class="product-price">
                                        149,000 تومان
                                    </div><!-- End .product-price -->
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <span class="ratings-text">( 2 دیدگاه )</span>
                                    </div><!-- End .rating-container -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->
                        </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->
                    </div><!-- End .row -->
                </div><!-- End .products -->
            </div><!-- End .container -->

            <div class="mb-4"></div><!-- End .mb-4 -->

            <div class="container">
                <hr class="mb-0">
            </div><!-- End .container -->

            <div class="icon-boxes-container bg-transparent">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-lg-3">
                            <div class="icon-box icon-box-side">
                                <span class="icon-box-icon text-dark">
                                    <i class="icon-rocket"></i>
                                </span>
                                <div class="icon-box-content">
                                    <h3 class="icon-box-title">ارسال رایگان</h3><!-- End .icon-box-title -->
                                    <p>برای سفارشات بالای 50 هزار تومان</p>
                                </div><!-- End .icon-box-content -->
                            </div><!-- End .icon-box -->
                        </div><!-- End .col-sm-6 col-lg-3 -->

                        <div class="col-sm-6 col-lg-3">
                            <div class="icon-box icon-box-side">
                                <span class="icon-box-icon text-dark">
                                    <i class="icon-rotate-left"></i>
                                </span>

                                <div class="icon-box-content">
                                    <h3 class="icon-box-title">بازگشت رایگان</h3><!-- End .icon-box-title -->
                                    <p>تا 30 روز</p>
                                </div><!-- End .icon-box-content -->
                            </div><!-- End .icon-box -->
                        </div><!-- End .col-sm-6 col-lg-3 -->

                        <div class="col-sm-6 col-lg-3">
                            <div class="icon-box icon-box-side">
                                <span class="icon-box-icon text-dark">
                                    <i class="icon-info-circle"></i>
                                </span>

                                <div class="icon-box-content">
                                    <h3 class="icon-box-title">20% تخفیف برای اولین خرید</h3>
                                    <!-- End .icon-box-title -->
                                    <p>ثبت نام کنید</p>
                                </div><!-- End .icon-box-content -->
                            </div><!-- End .icon-box -->
                        </div><!-- End .col-sm-6 col-lg-3 -->

                        <div class="col-sm-6 col-lg-3">
                            <div class="icon-box icon-box-side">
                                <span class="icon-box-icon text-dark">
                                    <i class="icon-life-ring"></i>
                                </span>

                                <div class="icon-box-content">
                                    <h3 class="icon-box-title">پشتیبانی حرفه ای</h3><!-- End .icon-box-title -->
                                    <p>خدمات 24 ساعته / 7 روز هفته</p>
                                </div><!-- End .icon-box-content -->
                            </div><!-- End .icon-box -->
                        </div><!-- End .col-sm-6 col-lg-3 -->
                    </div><!-- End .row -->
                </div><!-- End .container -->
            </div><!-- End .icon-boxes-container -->
        </main><!-- End .main -->

        <footer class="footer">
            <div class="cta bg-image bg-dark pt-4 pb-5 mb-0"
                 style="background-image:url('{{url('site/assets/images/demos/demo-4/bg-5.jpg')}}') ;">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-sm-10 col-md-8 col-lg-6">
                            <div class="cta-heading text-center">
                                <h3 class="cta-title text-white">دریافت آخرین پیشنهادات</h3><!-- End .cta-title -->
                                <p class="cta-desc text-white text-center">و دریافت <span class="font-weight-normal">کد
                                        تخفیف 20 هزار تومانی</span> برای اولین خرید</p><!-- End .cta-desc -->
                            </div><!-- End .text-center -->

                            <form action="#">
                                <div class="input-group input-group-round">
                                    <input type="email" class="form-control form-control-white"
                                           placeholder="آدرس ایمیل خود را وارد کنید" aria-label="Email Adress" required>
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="submit"><span>عضویت</span><i
                                                class="icon-long-arrow-left"></i></button>
                                    </div><!-- .End .input-group-append -->
                                </div><!-- .End .input-group -->
                            </form>
                        </div><!-- End .col-sm-10 col-md-8 col-lg-6 -->
                    </div><!-- End .row -->
                </div><!-- End .container -->
            </div><!-- End .cta -->
            <div class="footer-middle">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-lg-3">
                            <div class="widget widget-about">
                                <img src="{{url('site/assets/images/demos/demo-3/logo-footer.png')}}" class="footer-logo"
                                     alt="Footer Logo" width="105" height="25">
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم لورم ایپسوم متن ساختگی با تولید سادگی
                                    نامفهوم. </p>

                                <div class="widget-call">
                                    <i class="icon-phone"></i>
                                    سوالی دارید؟ 7روز هفته/24ساعته
                                    <a href="tel:#">02155667788</a>
                                </div><!-- End .widget-call -->
                            </div><!-- End .widget about-widget -->
                        </div><!-- End .col-sm-6 col-lg-3 -->

                        <div class="col-sm-6 col-lg-3">
                            <div class="widget">
                                <h4 class="widget-title">لینک های مفید</h4><!-- End .widget-title -->

                                <ul class="widget-list">
                                    <li><a href="about.html">درباره ما</a></li>
                                    <li><a href="#">خدمات</a></li>
                                    <li><a href="#">نحوه خرید</a></li>
                                    <li><a href="faq.html">سوالات متداول</a></li>
                                    <li><a href="contact.html">تماس با ما</a></li>
                                </ul><!-- End .widget-list -->
                            </div><!-- End .widget -->
                        </div><!-- End .col-sm-6 col-lg-3 -->

                        <div class="col-sm-6 col-lg-3">
                            <div class="widget">
                                <h4 class="widget-title">خدمات مشتری</h4><!-- End .widget-title -->

                                <ul class="widget-list">
                                    <li><a href="#">شیوه پرداخت</a></li>
                                    <li><a href="#">گارانتی بازگشت وجه</a></li>
                                    <li><a href="#">شیوه ارسال محصولات</a></li>
                                    <li><a href="#">قوانین و مقررات</a></li>
                                    <li><a href="#">خط مشی</a></li>
                                </ul><!-- End .widget-list -->
                            </div><!-- End .widget -->
                        </div><!-- End .col-sm-6 col-lg-3 -->

                        <div class="col-sm-6 col-lg-3">
                            <div class="widget">
                                <h4 class="widget-title">حساب کاربری</h4><!-- End .widget-title -->

                                <ul class="widget-list">
                                    <li><a href="#">ورود</a></li>
                                    <li><a href="cart.html">سبد خرید</a></li>
                                    <li><a href="#">لیست علاقه مندی ها</a></li>
                                    <li><a href="#">پیگیری سفارشات</a></li>
                                    <li><a href="#">راهنما</a></li>
                                </ul><!-- End .widget-list -->
                            </div><!-- End .widget -->
                        </div><!-- End .col-sm-6 col-lg-3 -->
                    </div><!-- End .row -->
                </div><!-- End .container -->
            </div><!-- End .footer-middle -->

            <div class="footer-bottom">
                <div class="container">
                    <p class="footer-copyright">Copyright © 2019 تمامی حقوق محفوظ است.</p>
                    <!-- End .footer-copyright -->

                    <div class="social-icons social-icons-color">
                        <span class="social-label">شبکه های اجتماعی</span>
                        <a href="#" class="social-icon social-facebook" title="فیسبوک" target="_blank"><i
                                class="icon-facebook-f"></i></a>
                        <a href="#" class="social-icon social-twitter" title="توییتر" target="_blank"><i
                                class="icon-twitter"></i></a>
                        <a href="#" class="social-icon social-instagram" title="اینستاگرام" target="_blank"><i
                                class="icon-instagram"></i></a>
                        <a href="#" class="social-icon social-youtube" title="یوتیوب" target="_blank"><i
                                class="icon-youtube"></i></a>
                        <a href="#" class="social-icon social-pinterest" title="پینترست" target="_blank"><i
                                class="icon-pinterest"></i></a>
                    </div><!-- End .soial-icons -->
                </div><!-- End .container -->
            </div>
        </footer><!-- End .footer -->
    </div><!-- End .page-wrapper -->
    <button id="scroll-top" title="Back to Top"><i class="icon-arrow-up"></i></button>

    <!-- Mobile Menu -->
    <div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->

    <div class="mobile-menu-container mobile-menu-light">
        <div class="mobile-menu-wrapper">
            <span class="mobile-menu-close"><i class="icon-close"></i></span>

            <form action="#" method="get" class="mobile-search">
                <label for="mobile-search" class="sr-only">جستجو</label>
                <input type="search" class="form-control" name="mobile-search" id="mobile-search"
                       placeholder="جستجو در ..." required>
                <button class="btn btn-primary" type="submit"><i class="icon-search"></i></button>
            </form>

            <ul class="nav nav-pills-mobile nav-border-anim" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="mobile-menu-link" data-toggle="tab" href="#mobile-menu-tab"
                       role="tab" aria-controls="mobile-menu-tab" aria-selected="true">منو</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="mobile-cats-link" data-toggle="tab" href="#mobile-cats-tab" role="tab"
                       aria-controls="mobile-cats-tab" aria-selected="false">دسته بندی ها</a>
                </li>
            </ul>

            <div class="tab-content">
                <div class="tab-pane fade show active" id="mobile-menu-tab" role="tabpanel"
                     aria-labelledby="mobile-menu-link">
                    <nav class="mobile-nav">
                        <ul class="mobile-menu">
                            <li class="active">
                                <a href="index10.html">خانه</a>

                                <ul>
                                    <li><a href="index10.html">01 - فروشگاه لوازم الکترونیکی</a></li>
                                    <li><a href="index-2-2.html">02 - فروشگاه مبلمان</a></li>
                                    <li><a href="index-3.html">03 - فروشگاه مبلمان</a></li>
                                    <li><a href="index-4.html">04 - فروشگاه لوازم الکترونیکی</a></li>
                                    <li><a href="index-5.html">05 - فروشگاه مد و لباس</a></li>
                                    <li><a href="index-6.html">06 - فروشگاه مد و لباس</a></li>
                                    <li><a href="index-7.html">07 - فروشگاه مد و لباس</a></li>
                                    <li><a href="index-8.html">08 - فروشگاه مد و لباس</a></li>
                                    <li><a href="index-9.html">09 - فروشگاه مد و لباس</a></li>
                                    <li><a href="index-10.html">10 - فروشگاه کفش</a></li>
                                    <li><a href="index-11.html">11 - فروشگاه مبل</a></li>
                                    <li><a href="index-12.html">12 - فروشگاه مد</a></li>
                                    <li><a href="index-13.html">13 - بازار</a></li>
                                    <li><a href="index-14.html">14 - بازار تمام عرض</a></li>
                                    <li><a href="index-15.html">15 - مد و زیبایی</a></li>
                                    <li><a href="index-16.html">16 - مد و زیبایی</a></li>
                                    <li><a href="index-17.html">17 - فروشگاه مد و لباس</a></li>
                                    <li><a href="index-18.html">18 - فروشگاه مد (با سایدبار)</a></li>
                                    <li><a href="index-19.html">19 - فروشگاه بازی</a></li>
                                    <li><a href="index-20.html">20 - فروشگاه کتاب</a></li>
                                    <li><a href="index-21.html">21 - فروشگاه ورزشی</a></li>
                                    <li><a href="index-22.html">22 - فروشگاه ابزار</a></li>
                                    <li><a href="index-23.html">23- فروشگاه مد با نوبار سمت راست</a></li>
                                    <li><a href="index-24.html">24 - فروشگاه ورزشی</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="category.html">فروشگاه</a>
                                <ul>
                                    <li><a href="category-list.html">فروشگاه لیست</a></li>
                                    <li><a href="category-2cols.html">2 ستونه</a></li>
                                    <li><a href="category.html">3 ستونه</a></li>
                                    <li><a href="category-4cols.html">4 ستونه</a></li>
                                    <li><a href="category-boxed.html"><span>فروشگاه با حالت بسته بدون سایدبار<span
                                                    class="tip tip-hot">ویژه</span></span></a></li>
                                    <li><a href="category-fullwidth.html">فروشگاه تمام عرض بدون سایدبار</a></li>
                                    <li><a href="product-category-boxed.html">دسته بندی محصولات با حالت بسته</a></li>
                                    <li><a href="product-category-fullwidth.html"><span>دسته بندی محصولات تمام عرض<span
                                                    class="tip tip-new">جدید</span></span></a></li>
                                    <li><a href="cart.html">سبد خرید</a></li>
                                    <li><a href="checkout.html">پرداخت</a></li>
                                    <li><a href="wishlist.html">لیست علاقه مندی</a></li>
                                    <li><a href="#">داشبورد</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="product.html" class="sf-with-ul">محصولات</a>
                                <ul>
                                    <li><a href="product.html">پیش فرض</a></li>
                                    <li><a href="product-centered.html">توضیحات وسط چین</a></li>
                                    <li><a href="product-extended.html"><span>توضیحات گسترده<span
                                                    class="tip tip-new">جدید</span></span></a></li>
                                    <li><a href="product-gallery.html">گالری</a></li>
                                    <li><a href="product-sticky.html">اطلاعات چسبیده</a></li>
                                    <li class=""><a href="product-sidebar.html">صفحه جمع با سایدبار</a></li>
                                    <li><a href="product-fullwidth.html">تمام صفحه</a></li>
                                    <li><a href="product-masonry.html">اطلاعات چسبیده</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">صفحات</a>
                                <ul>
                                    <li>
                                        <a href="about.html" class="sf-with-ul">درباره ما</a>

                                        <ul style="display: none;">
                                            <li><a href="about.html">درباره ما 01</a></li>
                                            <li><a href="about-2.html">درباره ما 02</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="contact.html" class="sf-with-ul">تماس با ما</a>

                                        <ul style="display: none;">
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
                                <a href="blog.html">اخبار</a>

                                <ul>
                                    <li class=""><a href="blog.html">کلاسیک</a></li>
                                    <li><a href="blog-listing.html">لیست</a></li>
                                    <li>
                                        <a href="#" class="sf-with-ul">شبکه بندی</a>
                                        <ul style="display: none;">
                                            <li><a href="blog-grid-2cols.html">2 ستونه</a></li>
                                            <li><a href="blog-grid-3cols.html">3 ستونه</a></li>
                                            <li><a href="blog-grid-4cols.html">4 ستونه</a></li>
                                            <li><a href="blog-grid-sidebar.html">با سایدبار</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#" class="sf-with-ul">سایز های مختلف</a>
                                        <ul style="display: none;">
                                            <li><a href="blog-masonry-2cols.html">2 ستونه</a></li>
                                            <li><a href="blog-masonry-3cols.html">3 ستونه</a></li>
                                            <li><a href="blog-masonry-4cols.html">4 ستونه</a></li>
                                            <li><a href="blog-masonry-sidebar.html">با سایدبار</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#" class="sf-with-ul">ماسک</a>
                                        <ul style="display: none;">
                                            <li><a href="blog-mask-grid.html">نوع 1</a></li>
                                            <li><a href="blog-mask-masonry.html">نوع 2</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#" class="sf-with-ul">پست تکی</a>
                                        <ul style="display: none;">
                                            <li><a href="single.html">پیش فرض با سایدبار</a></li>
                                            <li><a href="single-fullwidth.html">تمام صفحه بدون سایدبار</a></li>
                                            <li><a href="single-fullwidth-sidebar.html">تمام صفحه باسایدبار</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="elements-list.html">عناصر طراحی</a>
                                <ul>
                                    <li class=""><a href="elements-products.html">محصولات</a></li>
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
                    </nav><!-- End .mobile-nav -->
                </div><!-- .End .tab-pane -->
                <div class="tab-pane fade" id="mobile-cats-tab" role="tabpanel" aria-labelledby="mobile-cats-link">
                    <nav class="mobile-cats-nav">
                        <ul class="mobile-cats-menu">
                            <li><a class="mobile-cats-lead" href="#">پیشنهاد روزانه</a></li>
                            <li><a class="mobile-cats-lead" href="#">هدیه</a></li>
                            <li><a href="#">تخت خواب</a></li>
                            <li><a href="#">روشنایی</a></li>
                            <li><a href="#">مبلمان</a></li>
                            <li><a href="#">فضای ذخیره سازی</a></li>
                            <li><a href="#">میز وصندلی</a></li>
                            <li><a href="#">دکور </a></li>
                            <li><a href="#">کابینت</a></li>
                            <li><a href="#">قهوه</a></li>
                            <li><a href="#">مبلمان خارج از منزل </a></li>
                        </ul><!-- End .mobile-cats-menu -->
                    </nav><!-- End .mobile-cats-nav -->
                </div><!-- .End .tab-pane -->
            </div><!-- End .tab-content -->

            <div class="social-icons">
                <a href="#" class="social-icon" target="_blank" title="فیسبوک"><i class="icon-facebook-f"></i></a>
                <a href="#" class="social-icon" target="_blank" title="توییتر"><i class="icon-twitter"></i></a>
                <a href="#" class="social-icon" target="_blank" title="اینستاگرام"><i class="icon-instagram"></i></a>
                <a href="#" class="social-icon" target="_blank" title="یوتیوب"><i class="icon-youtube"></i></a>
            </div><!-- End .social-icons -->
        </div><!-- End .mobile-menu-wrapper -->
    </div><!-- End .mobile-menu-container -->

    <!-- Sign in / Register Modal -->
    <div class="modal fade" id="signin-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="icon-close"></i></span>
                    </button>

                    <div class="form-box">
                        <div class="form-tab">
                            <ul class="nav nav-pills nav-fill nav-border-anim" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="signin-tab" data-toggle="tab" href="#signin"
                                       role="tab" aria-controls="signin" aria-selected="true">ورود</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="register-tab" data-toggle="tab" href="#register" role="tab"
                                       aria-controls="register" aria-selected="false">ثبت نام</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="tab-content-5">
                                <div class="tab-pane fade show active" id="signin" role="tabpanel"
                                     aria-labelledby="signin-tab">


                                    <form action="{{url('login')}}" method="post">
                                        @csrf
                                        <div class="form-group">
                                            <label for="mobile">شماره موبایل خود را وارد کنید *</label>
                                            <input type="text" class="form-control" id="mobile" value="{{old('mobile')}}"
                                                   name="mobile" required>
                                        </div><!-- End .form-group -->

                                        <div class="form-group">
                                            <label for="password">رمز عبور *</label>
                                            <input type="password" class="form-control" id="password"
                                                   name="password" required>
                                        </div><!-- End .form-group -->

                                        <div class="form-footer">
                                            <button type="submit" class="btn btn-outline-primary-2">
                                                <span>ورود</span>
                                                <i class="icon-long-arrow-left"></i>
                                            </button>

                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input"
                                                       id="signin-remember">
                                                <label class="custom-control-label" for="signin-remember">مرا به خاطر
                                                    بسپار</label>
                                            </div><!-- End .custom-checkbox -->

                                            <a href="#" class="forgot-link">فراموشی رمز عبور؟</a>
                                        </div><!-- End .form-footer -->
                                    </form>
                                    <div class="form-choice">
                                        <p class="text-center">یا ورود با</p>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <a href="#" class="btn btn-login btn-g">
                                                    <i class="icon-google"></i>
                                                    حساب گوگل
                                                </a>
                                            </div><!-- End .col-6 -->
                                            <div class="col-sm-6">
                                                <a href="#" class="btn btn-login btn-f">
                                                    <i class="icon-facebook-f"></i>
                                                    حساب فیسبوک
                                                </a>
                                            </div><!-- End .col-6 -->
                                        </div><!-- End .row -->
                                    </div><!-- End .form-choice -->
                                </div><!-- .End .tab-pane -->
                                <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby=" -tab">
                                   <div class="text-danger">
                                       @foreach ($errors->all() as $error)
                                           {{$error}}}
                                       @endforeach

                                   </div>
                                    <form action="{{route('register')}}" method="post">
                                        @csrf
                                        <div class="form-group">
                                            <label for="name">نام کاربری *</label>
                                            <input type="text" minlength="3" maxlength="255" value="{{old('name')}}" class="form-control" id="name"
                                                   name="name" required>
                                        </div><!-- End .form-group -->
                                        <div class="form-group">
                                            <label for="mobile">شماره موبایل شما *</label>
                                            <input type="text" minlength="11" maxlength="11" value="{{old('mobile')}}" class="form-control" id="mobile"
                                                   name="mobile" required>
                                        </div><!-- End .form-group -->

                                        <div class="form-group">
                                            <label for="password">رمز عبور *</label>
                                            <input type="password" class="form-control" id="password"
                                                   name="password" required>
                                        </div><!-- End .form-group -->

                                        <div class="form-footer">
                                            <button type="submit" class="btn btn-outline-primary-2">
                                                <span>ثبت نام</span>
                                                <i class="icon-long-arrow-left"></i>
                                            </button>

                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="register-policy"
                                                       required>
                                                <label class="custom-control-label" for="register-policy">با
                                                    <a href="#">قوانین و مقررات </a>موافقم *</label>
                                            </div><!-- End .custom-checkbox -->
                                        </div><!-- End .form-footer -->
                                    </form>
                                    <div class="form-choice">
                                        <p class="text-center">یا عضویت با</p>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <a href="#" class="btn btn-login btn-g">
                                                    <i class="icon-google"></i>
                                                    حساب گوگل
                                                </a>
                                            </div><!-- End .col-6 -->
                                            <div class="col-sm-6">
                                                <a href="#" class="btn btn-login  btn-f">
                                                    <i class="icon-facebook-f"></i>
                                                    حساب فیسبوک
                                                </a>
                                            </div><!-- End .col-6 -->
                                        </div><!-- End .row -->
                                    </div><!-- End .form-choice -->
                                </div><!-- .End .tab-pane -->
                            </div><!-- End .tab-content -->
                        </div><!-- End .form-tab -->
                    </div><!-- End .form-box -->
                </div><!-- End .modal-body -->
            </div><!-- End .modal-content -->
        </div><!-- End .modal-dialog -->
    </div><!-- End .modal -->

@endsection
