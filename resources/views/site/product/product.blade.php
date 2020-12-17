@extends('site.layout.inc.main')
@section('page-title')
    {{$product->title}}
@endsection
@section('main-content')
    <nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-0">
        <div class="container d-flex align-items-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('homepage')}}">خانه</a></li>
                <li class="breadcrumb-item"><a href="#">محصولات</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{$product->title}}</li>
            </ol>
        </div>
    </nav>
    <div class="page-content">
        <div class="container">
            <div class="product-details-top">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="product-gallery product-gallery-vertical">
                            <div class="row">
                                <figure class="product-main-image">
                                    <img src="{{url('')}}{{$product->image}}" alt="{{$product->title}}"
                                         data-zoom-image="{{url('')}}{{$product->image}}"/>
                                    <a href="#"></a>
                                </figure>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="product-details">
                            <h1 class="product-title">{{$product->title}}</h1>
                            <div class="rating-container">
                                <a href="#" class="ratings-text" id="review-link"></a>
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 0%"></div>
                                </div>
                            </div>
                            <div class="product-price">{{number_format(intdiv($product->price , 10))}}تومان</div>
                            <div class="product-content"><p>{!! $product->description !!}</p></div>

                            <div class="product-details-action">
                                <form action="{{route('site.cart.store' , $product)}}" method="post">
                                    @csrf
                                    <input type="hidden" name="name" value="{{$product->title}}">
                                    <input type="hidden" name="id" value="{{$product->id}}">
                                    <input type="hidden" name="price" value="{{$product->price}}">
                                    <input type="hidden" name="count" value="1">
                                    <button type="submit" class="btn-product btn-cart"><span>افزودن به سبد خرید</span></button>
                                </form>
                                    <div class="product-details-footer">
                                <div class="product-cat text-center">
                                    <span>دسته بندی : </span>
                                    <a
                                        @if($product->category)
                                        href="{{route('site.productCategory.show' , $product->category)}}"
                                        @else
                                            href="#"
                                        @endif
                                    > {{$product->category_name($product->category)}} </a>،

                                    <a href="#">{{$product->title}}</a>،
{{--                                    <a href="#">زرد</a>--}}
                                </div><!-- End .product-cat -->
                            </div><!-- End .product-details-footer -->
                        </div><!-- End .product-details -->
                    </div><!-- End .col-md-6 -->
                </div>
            </div><!-- End .row -->
        </div><!-- End .product-details-top -->

        <div class="product-details-tab">
            <ul class="nav nav-pills justify-content-center" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="product-desc-link" data-toggle="tab"
                       href="#product-desc-tab" role="tab" aria-controls="product-desc-tab"
                       aria-selected="true">توضیحات</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="product-info-link" data-toggle="tab" href="#product-info-tab"
                       role="tab" aria-controls="product-info-tab" aria-selected="false">اطلاعات بیشتر</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="product-shipping-link" data-toggle="tab"
                       href="#product-shipping-tab" role="tab" aria-controls="product-shipping-tab"
                       aria-selected="false">ارسال و بازگشت</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="product-review-link" data-toggle="tab"
                       href="#product-review-tab" role="tab" aria-controls="product-review-tab"
                       aria-selected="false">نظرات (2)</a>
                </li>
            </ul>
            <div class="tab-content" style="border: lightgray solid thin;margin-right: 2%;margin-left: 2%">
                <div class="tab-pane fade show active" id="product-desc-tab" role="tabpanel"
                     aria-labelledby="product-desc-link">
                    <div class="product-desc-content">
                        <h3>اطلاعات {{$product->title}}</h3>
                        {!! $product->description !!}
                    </div><!-- End .product-desc-content -->
                </div><!-- .End .tab-pane -->
                <div class="tab-pane fade" id="product-info-tab" role="tabpanel"
                     aria-labelledby="product-info-link">
                    <div class="product-desc-content">
<<<<<<< HEAD
                        <h3>اطلاعات بیشتر</h3>
                        <ul>
                            @foreach($allAttr as $attre)
                                <li class="row">
                                    <div class="col-sm-12 col-md-3 bg-gray m-1 pt-1">{{$attre->key}}</div>

                                    <div class="col-sm-12 col-md-8 bg-gray m-1 pt-1">{{$attre->value}}</div>
                                </li>
{{--                                    <li>{{$attre->key}} : {{$attre->value}}</li>--}}

                            @endforeach
                        </ul>

=======
                        <h3>اطلاعات</h3>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم لورم ایپسوم متن ساختگی با تولید
                            سادگی نامفهوم لورم ایپسوم متن ساختگی با تولید سادگی نامفهوملورم ایپسوم متن
                            ساختگی با تولید سادگی نامفهوملورم ایپسوم متن ساختگی با تولید سادگی نامفهوملورم
                            ایپسوم متن ساختگی با تولید سادگی نامفهوم. </p>

                        <h3>اطلاعات بیشتر</h3>
                        <ul>
                            <li>لورم ایپسوم متن ساختگی</li>
                            <li>لورم ایپسوم متن ساختگی با تولید سادگی</li>
                            <li>لورم ایپسوم</li>
                            <li>لورم ایپسوم متن ساختگی</li>
                            <li>لورم ایپسوم متن ساختگی با تولید سادگی</li>
                            <li> ارتفاع: 31سانتی متر; عرض: 32سانتی متر; عمق: 12سانتی متر</li>
                        </ul>

                        <h3>سایز</h3>
                        <p>تک سایز</p>
>>>>>>> c0a5a9f384955196b200fb275c7a0c937da3cd41
                    </div><!-- End .product-desc-content -->
                </div><!-- .End .tab-pane -->
                <div class="tab-pane fade" id="product-shipping-tab" role="tabpanel"
                     aria-labelledby="product-shipping-link">
                    <div class="product-desc-content">
                        <h3>ارسال و بازگشت</h3>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم لورم ایپسوم متن ساختگی با تولید
                            سادگی نامفهوم لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم لورم ایپسوم متن
                            ساختگی با تولید سادگی نامفهوم<br>
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم لورم ایپسوم متن ساختگی با تولید
                            سادگی نامفهوم لورم ایپسوم متن ساختگی با تولید سادگی نامفهوملورم ایپسوم متن
                            ساختگی با تولید سادگی نامفهوملورم ایپسوم متن ساختگی با تولید سادگی نامفهوم.
                        </p>
                    </div><!-- End .product-desc-content -->
                </div><!-- .End .tab-pane -->
                <div class="tab-pane fade" id="product-review-tab" role="tabpanel"
                     aria-labelledby="product-review-link">
                    <div class="reviews">
                        <h3>نظر (2)</h3>
                        <div class="review">
                            <div class="row no-gutters">
                                <div class="col-auto">
                                    <h4><a href="#">کاربر 1</a></h4>
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 80%;"></div>
                                            <!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                    </div><!-- End .rating-container -->
                                    <span class="review-date">4 روز پیش</span>
                                </div><!-- End .col -->
                                <div class="col-12">
                                    <h4>عالی، سایز فوق العاده</h4>

                                    <div class="review-content">
                                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم،لورم ایپسوم متن
                                            ساختگی با تولید سادگی نامفهوم، لورم ایپسوم متن ساختگی با تولید
                                            سادگی نامفهوم لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم!</p>
                                    </div><!-- End .review-content -->

                                    <div class="review-action">
                                        <a href="#"><i class="icon-thumbs-up"></i>مثبت (2)</a>
                                        <a href="#"><i class="icon-thumbs-down"></i>منفی (0)</a>
                                    </div><!-- End .review-action -->
                                </div><!-- End .col-auto -->
                            </div><!-- End .row -->
                        </div><!-- End .review -->

                        <div class="review">
                            <div class="row no-gutters">
                                <div class="col-auto">
                                    <h4><a href="#">کاربر 2</a></h4>
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 100%;"></div>
                                            <!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                    </div><!-- End .rating-container -->
                                    <span class="review-date">2 روز پیش</span>
                                </div><!-- End .col -->
                                <div class="col-12">
                                    <h4>خیلی عالی</h4>

                                    <div class="review-content">
                                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم، لورم ایپسوم متن
                                            ساختگی با تولید سادگی نامفهوم لورم ایپسوم متن ساختگی با تولید
                                            سادگی نامفهوم.</p>
                                    </div><!-- End .review-content -->

                                    <div class="review-action">
                                        <a href="#"><i class="icon-thumbs-up"></i>مثبت (0)</a>
                                        <a href="#"><i class="icon-thumbs-down"></i>منفی (0)</a>
                                    </div><!-- End .review-action -->
                                </div><!-- End .col-auto -->
                            </div><!-- End .row -->
                        </div><!-- End .review -->
                    </div><!-- End .نظر -->
                </div><!-- .End .tab-pane -->
            </div><!-- End .tab-content -->
        </div><!-- End .product-details-tab -->
        <h2 class="title text-center mb-4">محصولاتی که شاید بپسندید</h2><!-- End .title text-center -->

        <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl"
             data-owl-options='{
                            "nav": false,
                            "dots": true,
                            "margin": 20,
                            "loop": false,
                            "responsive": {
                                "0": {
                                    "items":1
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
                                    "items":4,
                                    "nav": true,
                                    "dots": false
                                }
                            }
                        }'>
            <div class="product product-7 text-center">
                <figure class="product-media">
                    <span class="product-label label-new">جدید</span>
                    <a href="product.html">
                        <img src="assets/images/products/product-4.jpg" alt="تصویر محصول"
                             class="product-image">
                    </a>

                    <div class="product-action-vertical">
                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>افزودن به
                                            لیست علاقه مندی</span></a>
                        <a href="popup/quickView.html" class="btn-product-icon btn-quickview"
                           title="مشاهده سریع"><span>مشاهده سریع</span></a>
                        <a href="#" class="btn-product-icon btn-compare" title="مقایسه"><span>لیست
                                            مقایسه</span></a>
                    </div><!-- End .product-action-vertical -->

                    <div class="product-action">
                        <a href="#" class="btn-product btn-cart"><span>افزودن به سبد خرید</span></a>
                    </div><!-- End .product-action -->
                </figure><!-- End .product-media -->

                <div class="product-body">
                    <div class="product-cat text-center">
                        <a href="#">زنانه</a>
                    </div><!-- End .product-cat -->
                    <h3 class="product-title text-center"><a href="product.html">دامن چرم قهوه ای</a></h3>
                    <!-- End .product-title -->
                    <div class="product-price">
                        60,000 تومان
                    </div><!-- End .product-price -->
                    <div class="ratings-container">
                        <div class="ratings">
                            <div class="ratings-val" style="width: 20%;"></div><!-- End .ratings-val -->
                        </div><!-- End .ratings -->
                        <span class="ratings-text">( 2 دیدگاه )</span>
                    </div><!-- End .rating-container -->

                    <div class="product-nav product-nav-thumbs">
                        <a href="#" class="active">
                            <img src="assets/images/products/product-4-thumb.jpg" alt="product desc">
                        </a>
                        <a href="#">
                            <img src="assets/images/products/product-4-2-thumb.jpg" alt="product desc">
                        </a>

                        <a href="#">
                            <img src="assets/images/products/product-4-3-thumb.jpg" alt="product desc">
                        </a>
                    </div><!-- End .product-nav -->
                </div><!-- End .product-body -->
            </div><!-- End .product -->

            <div class="product product-7 text-center">
                <figure class="product-media">
                    <span class="product-label label-out">ناموجود</span>
                    <a href="product.html">
                        <img src="assets/images/products/product-6.jpg" alt="تصویر محصول"
                             class="product-image">
                    </a>

                    <div class="product-action-vertical">
                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>افزودن به
                                            لیست علاقه مندی</span></a>
                        <a href="popup/quickView.html" class="btn-product-icon btn-quickview"
                           title="مشاهده سریع"><span>مشاهده سریع</span></a>
                        <a href="#" class="btn-product-icon btn-compare" title="مقایسه"><span>لیست
                                            مقایسه</span></a>
                    </div><!-- End .product-action-vertical -->

                    <div class="product-action">
                        <a href="#" class="btn-product btn-cart"><span>افزودن به سبد خرید</span></a>
                    </div><!-- End .product-action -->
                </figure><!-- End .product-media -->

                <div class="product-body">
                    <div class="product-cat text-center">
                        <a href="#">ژاکت</a>
                    </div><!-- End .product-cat -->
                    <h3 class="product-title text-center"><a href="product.html">بلوز شلوار خاکی</a></h3>
                    <!-- End .product-title -->
                    <div class="product-price">
                        <span class="out-price">120,000 تومان</span>
                    </div><!-- End .product-price -->
                    <div class="ratings-container">
                        <div class="ratings">
                            <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                        </div><!-- End .ratings -->
                        <span class="ratings-text">( 6 دیدگاه )</span>
                    </div><!-- End .rating-container -->
                </div><!-- End .product-body -->
            </div><!-- End .product -->

            <div class="product product-7 text-center">
                <figure class="product-media">
                    <span class="product-label label-top">برتر</span>
                    <a href="product.html">
                        <img src="assets/images/products/product-11.jpg" alt="تصویر محصول"
                             class="product-image">
                    </a>

                    <div class="product-action-vertical">
                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>افزودن به
                                            لیست علاقه مندی</span></a>
                        <a href="popup/quickView.html" class="btn-product-icon btn-quickview"
                           title="مشاهده سریع"><span>مشاهده سریع</span></a>
                        <a href="#" class="btn-product-icon btn-compare" title="مقایسه"><span>لیست
                                            مقایسه</span></a>
                    </div><!-- End .product-action-vertical -->

                    <div class="product-action">
                        <a href="#" class="btn-product btn-cart"><span>افزودن به سبد خرید</span></a>
                    </div><!-- End .product-action -->
                </figure><!-- End .product-media -->

                <div class="product-body">
                    <div class="product-cat text-center">
                        <a href="#">کفش</a>
                    </div><!-- End .product-cat -->
                    <h3 class="product-title text-center"><a href="product.html">کش زنانه قهوه ای پاشنه
                            دار</a>
                    </h3><!-- End .product-title -->
                    <div class="product-price">
                        110,000 تومان
                    </div><!-- End .product-price -->
                    <div class="ratings-container">
                        <div class="ratings">
                            <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                        </div><!-- End .ratings -->
                        <span class="ratings-text">( 1 دیدگاه )</span>
                    </div><!-- End .rating-container -->

                    <div class="product-nav product-nav-thumbs">
                        <a href="#" class="active">
                            <img src="assets/images/products/product-11-thumb.jpg" alt="product desc">
                        </a>
                        <a href="#">
                            <img src="assets/images/products/product-11-2-thumb.jpg" alt="product desc">
                        </a>

                        <a href="#">
                            <img src="assets/images/products/product-11-3-thumb.jpg" alt="product desc">
                        </a>
                    </div><!-- End .product-nav -->
                </div><!-- End .product-body -->
            </div><!-- End .product -->

            <div class="product product-7 text-center">
                <figure class="product-media">
                    <a href="product.html">
                        <img src="assets/images/products/product-10.jpg" alt="تصویر محصول"
                             class="product-image">
                    </a>

                    <div class="product-action-vertical">
                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>افزودن به
                                            لیست علاقه مندی</span></a>
                        <a href="popup/quickView.html" class="btn-product-icon btn-quickview"
                           title="مشاهده سریع"><span>مشاهده سریع</span></a>
                        <a href="#" class="btn-product-icon btn-compare" title="مقایسه"><span>لیست
                                            مقایسه</span></a>
                    </div><!-- End .product-action-vertical -->

                    <div class="product-action">
                        <a href="#" class="btn-product btn-cart"><span>افزودن به سبد خرید</span></a>
                    </div><!-- End .product-action -->
                </figure><!-- End .product-media -->

                <div class="product-body">
                    <div class="product-cat text-center">
                        <a href="#">لباس زنانه</a>
                    </div><!-- End .product-cat -->
                    <h3 class="product-title text-center"><a href="product.html">لباس زنانه دکمه دار رنگ
                            زرد</a></h3>
                    <!-- End .product-title -->
                    <div class="product-price">
                        56,000 تومان
                    </div><!-- End .product-price -->
                    <div class="ratings-container">
                        <div class="ratings">
                            <div class="ratings-val" style="width: 0%;"></div><!-- End .ratings-val -->
                        </div><!-- End .ratings -->
                        <span class="ratings-text">( 0 دیدگاه )</span>
                    </div><!-- End .rating-container -->
                </div><!-- End .product-body -->
            </div><!-- End .product -->

            <div class="product product-7 text-center">
                <figure class="product-media">
                    <a href="product.html">
                        <img src="assets/images/products/product-7.jpg" alt="تصویر محصول"
                             class="product-image">
                    </a>

                    <div class="product-action-vertical">
                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>افزودن به
                                            لیست علاقه مندی</span></a>
                        <a href="popup/quickView.html" class="btn-product-icon btn-quickview"
                           title="مشاهده سریع"><span>مشاهده سریع</span></a>
                        <a href="#" class="btn-product-icon btn-compare" title="مقایسه"><span>لیست
                                            مقایسه</span></a>
                    </div><!-- End .product-action-vertical -->

                    <div class="product-action">
                        <a href="#" class="btn-product btn-cart"><span>افزودن به سبد خرید</span></a>
                    </div><!-- End .product-action -->
                </figure><!-- End .product-media -->

                <div class="product-body">
                    <div class="product-cat text-center">
                        <a href="#">لی</a>
                    </div><!-- End .product-cat -->
                    <h3 class="product-title text-center"><a href="product.html">Blue utility pinafore denim
                            dress</a>
                    </h3><!-- End .product-title -->
                    <div class="product-price">
                        76,000 تومان
                    </div><!-- End .product-price -->
                    <div class="ratings-container">
                        <div class="ratings">
                            <div class="ratings-val" style="width: 20%;"></div><!-- End .ratings-val -->
                        </div><!-- End .ratings -->
                        <span class="ratings-text">( 2 دیدگاه )</span>
                    </div><!-- End .rating-container -->
                </div><!-- End .product-body -->
            </div><!-- End .product -->
        </div><!-- End .owl-carousel -->
    </div>

@endsection
