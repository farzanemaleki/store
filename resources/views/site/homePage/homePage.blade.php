@extends('site.layout.inc.main')
@section('page-title')
    صفحه اصلی
@stop
@section('main-content')

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
                        <a href="{{route('site.product.show' , $product->id)}}" class="cat-block">
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
                                <img src="{{url('site/assets/images/demos/demo-4/products/product-1.jpg')}}"
                                     alt="تصویر محصول"
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
                                <img src="{{url('site/assets/images/demos/demo-4/products/product-2.jpg')}}"
                                     alt="تصویر محصول"
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
                                <img src="{{url('site/assets/images/demos/demo-4/products/product-3.jpg')}}"
                                     alt="تصویر محصول"
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
                                <img src="{{url('site/assets/images/demos/demo-4/products/product-4.jpg')}}"
                                     alt="تصویر محصول"
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
                                <img src="{{url('site/assets/images/demos/demo-4/products/product-5.jpg')}}"
                                     alt="تصویر محصول"
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
                                <img src="{{url('site/assets/images/demos/demo-4/products/product-1.jpg')}}"
                                     alt="تصویر محصول"
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
                                <img src="{{url('site/assets/images/demos/demo-4/products/product-3.jpg')}}"
                                     alt="تصویر محصول"
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
                                <img src="{{url('site/assets/images/demos/demo-4/products/product-2.jpg')}}"
                                     alt="تصویر محصول"
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
                                <img src="{{url('site/assets/images/demos/demo-4/products/product-4.jpg')}}"
                                     alt="تصویر محصول"
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
                                <img src="{{url('site/assets/images/demos/demo-4/products/product-5.jpg')}}"
                                     alt="تصویر محصول"
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
                                <img src="{{url('site/assets/images/demos/demo-4/products/product-1.jpg')}}"
                                     alt="تصویر محصول"
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
                                <img src="{{url('site/assets/images/demos/demo-4/products/product-5.jpg')}}"
                                     alt="تصویر محصول"
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
                                <img src="{{url('site/assets/images/demos/demo-4/products/product-1.jpg')}}"
                                     alt="تصویر محصول"
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
                                <img src="{{url('site/assets/images/demos/demo-4/products/product-3.jpg')}}"
                                     alt="تصویر محصول"
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
                                <img src="{{url('site/assets/images/demos/demo-4/products/product-2.jpg')}}"
                                     alt="تصویر محصول"
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
                                <img src="{{url('site/assets/images/demos/demo-4/products/product-4.jpg')}}"
                                     alt="تصویر محصول"
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
                                <img src="{{url('site/assets/images/demos/demo-4/products/product-1.jpg')}}"
                                     alt="تصویر محصول"
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
                                <img src="{{url('site/assets/images/demos/demo-4/products/product-2.jpg')}}"
                                     alt="تصویر محصول"
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
                                <img src="{{url('site/assets/images/demos/demo-4/products/product-5.jpg')}}"
                                     alt="تصویر محصول"
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
                                <img src="{{url('site/assets/images/demos/demo-4/products/product-1.jpg')}}"
                                     alt="تصویر محصول"
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
                                <img src="{{url('site/assets/images/demos/demo-4/products/product-4.jpg')}}"
                                     alt="تصویر محصول"
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
                                <img src="{{url('site/assets/images/demos/demo-4/products/product-4.jpg')}}"
                                     alt="تصویر محصول"
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
                                <img src="{{url('site/assets/images/demos/demo-4/products/product-2.jpg')}}"
                                     alt="تصویر محصول"
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
                                <img src="{{url('site/assets/images/demos/demo-4/products/product-3.jpg')}}"
                                     alt="تصویر محصول"
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
                                <img src="{{url('site/assets/images/demos/demo-4/products/product-1.jpg')}}"
                                     alt="تصویر محصول"
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
                                <img src="{{url('site/assets/images/demos/demo-4/products/product-5.jpg')}}"
                                     alt="تصویر محصول"
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
                                <img src="{{url('site/assets/images/demos/demo-4/products/product-1.jpg')}}"
                                     alt="تصویر محصول"
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
                                <img src="{{url('site/assets/images/demos/demo-4/products/product-2.jpg')}}"
                                     alt="تصویر محصول"
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
                                <img src="{{url('site/assets/images/demos/demo-4/products/product-3.jpg')}}"
                                     alt="تصویر محصول"
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
        <div class="cta cta-border mb-5"
             style="background-image:url('{{url('site/assets/images/demos/demo-4/bg-1.jpg')}}') ;">
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
                <div class="deal"
                     style="background-image:url('{{url('site/assets/images/demos/demo-4/deal/bg-1.jpg')}}') ;">
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
                <div class="deal"
                     style="background-image:url('{{url('site/assets/images/demos/demo-4/deal/bg-2.jpg')}}') ;">
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
@endsection
