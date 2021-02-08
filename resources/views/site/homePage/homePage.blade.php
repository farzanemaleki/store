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
                 style="background-image:url('{{url('site/assets/images/home/a8b3b229bb1490f543580fe6d6029b13.jpg')}}') ">
            </div><!-- End .intro-slide -->

            <div class="intro-slide"
                 style="background-image:url(' {{url('site/assets/images/home/4e7e00a609999c25a6a3ee40b25ad14b.jpg')}}')">
            </div><!-- End .intro-slide -->

            <div class="intro-slide"
                 style="background-image:url(' {{url('site/assets/images/home/689d5cb6aaae28fe24bc64d1f5bc7338.jpg')}}')">
            </div><!-- End .intro-slide -->
        </div><!-- End .intro-slider owl-carousel owl-simple -->

        <span class="slider-loader"></span><!-- End .slider-loader -->
    </div><!-- End .intro-slider-container -->

    <div class="container">
        <h2 class="title text-center mb-4">دسته بندی های محبوب</h2><!-- End .title text-center -->

        <div class="cat-blocks-container">
            <div class="row">

                @foreach( $allcategory as $category)
                    <div class="col-6 col-sm-4 col-lg-2 flex-column mx-auto">
                        <a href="{{route('site.productCategory.show' , $category->id)}}" class="cat-block">
                            <figure>
                                    <span>
                                        <img src="{{ url('') }}{{$category->image }}" alt="{{$category->title}}">
                                    </span>
                            </figure>

                            <h3 class="cat-block-title">{{$category->title}}</h3><!-- End .cat-block-title -->
                        </a>
                    </div><!-- End .col-sm-4 col-lg-2 -->
                @endforeach

            </div><!-- End .row -->
        </div><!-- End .cat-blocks-container -->
    </div><!-- End .container -->
    <div class="mb-3"></div>

    <div class="container">
        <div class="row justify-content-center">
            <img style="height: 200px ; width: 100%" src="{{url('site/assets/images/home/ipad pro 2020-1171x300.jpg')}}"
                 alt="بنر">
        </div><!-- End .row -->
    </div><!-- End .container -->

    <div class="mb-5"></div><!-- End .mb-5 -->

    <div class="container new-arrivals">

        <div class="heading heading-flex mb-3">
            <div class="heading-left">
                <h2 class="title">محصولات هر دسته بندی</h2><!-- End .title -->
            </div><!-- End .heading-left -->

            <div class="heading-right">
                <ul class="nav nav-pills nav-border-anim justify-content-center" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="new-all-link" data-toggle="tab" href="#new-all-tab"
                           role="tab" aria-controls="new-all-tab" aria-selected="true">همه</a>
                    </li>
                    @foreach( $allcategory as $category)
                        <li class="nav-item">
                            <a class="nav-link" id="new-link{{$category->id}}" data-toggle="tab"
                               href="#new-tab{{$category->id}}"
                               role="tab" aria-controls="new-all-tab" aria-selected="true">{{$category->title}}</a>
                        </li>
                    @endforeach
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
                    @foreach( $allProducts as $product)
                        <div class="product product-2">
                            <figure class="product-media">
                                <span class="product-label label-circle label-new">جدید</span>
                                <a href="{{route('site.product.show' , $product->id)}}">
                                    <img src="{{url('')}}{{$product->image}}"
                                         alt="{{$product->title}}"
                                         class="product-image">
                                </a>
                                <div class="product-action ">
                                    <a href="{{route('site.product.show' , $product->id)}}"
                                       title="مشاهده محصول" style="float: right ; direction: rtl"><span
                                            class="px-2">مشاهده محصول </span></a>

                                    <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; |&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>

                                    <form action="{{route('site.cart.store' , $product)}}" method="post">
                                        @csrf
                                        <input type="hidden" name="name" value="{{$product->title}}">
                                        <input type="hidden" name="id" value="{{$product->id}}">
                                        <input type="hidden" name="price" value="{{$product->price}}">
                                        <input type="hidden" name="count" value="1">
                                        <button type="submit" class="btn-product btn-cart px-2 border-0"
                                                title="افزودن به سبد خرید">
                                        </button>
                                    </form>
                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->
                            <div class="product-body">
                                <div class="product-cat">
                                    <a href="#">{{$product->category_name($product->category)}}</a>
                                </div><!-- End .product-cat -->
                                <h3 class="product-title">
                                    <a href="{{route('site.product.show' , $product->id)}}">
                                        {{$product->title}}
                                    </a></h3><!-- End .product-title -->
                                <div class="product-price">
                                    {{number_format(intdiv($product->price , 10))}}
                                </div><!-- End .product-price -->
                                <div class="ratings-container">
                                    <div class="ratings">
                                        @switch($product->rate)
                                            @case(1)
                                            <div class="ratings-val" style="width: 20%;"></div>
                                            @break
                                            @case(2)
                                            <div class="ratings-val" style="width: 40%;"></div>
                                            @break
                                            @case(3)
                                            <div class="ratings-val" style="width: 60%;"></div>
                                            @break
                                            @case(4)
                                            <div class="ratings-val" style="width: 80%;"></div>
                                            @break
                                            @case(5)
                                            <div class="ratings-val" style="width: 100%;"></div>
                                            @break
                                        @endswitch</div><!-- End .ratings-val -->
                                </div><!-- End .rating-container -->
                            </div><!-- End .product-body -->
                        </div><!-- End .product -->
                    @endforeach

                </div><!-- End .owl-carousel -->
            </div><!-- .End .tab-pane -->
            @foreach( $allcategory as $category)
                <div class="tab-pane p-0 fade " id="new-tab{{$category->id}}" role="tabpanel"
                     aria-labelledby="new-tab{{$category->id}}">
                    <div class="owl-carousel owl-full carousel-equal-height carousel-with-shadow flex-column mx-auto"
                         data-toggle="owl"
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
                        @foreach( $allProducts->where('category' , '=' , $category->id) as $product)
                            <div class="product product-2">
                                <figure class="product-media">
                                    <span class="product-label label-circle label-new">جدید</span>
                                    <a href="{{route('site.product.show' , $product->id)}}">
                                        <img src="{{url('')}}{{$product->image}}"
                                             alt="{{$product->title}}"
                                             class="product-image">
                                    </a>
                                    <div class="product-action ">
                                        <a href="{{route('site.product.show' , $product->id)}}"
                                           title="مشاهده محصول" style="float: right ; direction: rtl"><span
                                                class="px-2">مشاهده محصول </span></a>

                                        <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; |&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>


                                        <form action="{{route('site.cart.store' , $product)}}" method="post">
                                            @csrf
                                            <input type="hidden" name="name" value="{{$product->title}}">
                                            <input type="hidden" name="id" value="{{$product->id}}">
                                            <input type="hidden" name="price" value="{{$product->price}}">
                                            <input type="hidden" name="count" value="1">
                                            <button type="submit" class="btn-product btn-cart px-2 border-0"
                                                    title="افزودن به سبد خرید">
                                            </button>
                                        </form>


                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->
                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">{{$product->category_name($product->category)}}</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title">
                                        <a href="{{route('site.product.show' , $product->id)}}">
                                            {{$product->title}}
                                        </a></h3><!-- End .product-title -->
                                    <div class="product-price">
                                        {{number_format(intdiv($product->price , 10))}}
                                    </div><!-- End .product-price -->
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            @switch($product->rate)
                                                @case(1)
                                                <div class="ratings-val" style="width: 20%;"></div>
                                                @break
                                                @case(2)
                                                <div class="ratings-val" style="width: 40%;"></div>
                                                @break
                                                @case(3)
                                                <div class="ratings-val" style="width: 60%;"></div>
                                                @break
                                                @case(4)
                                                <div class="ratings-val" style="width: 80%;"></div>
                                                @break
                                                @case(5)
                                                <div class="ratings-val" style="width: 100%;"></div>
                                                @break
                                            @endswitch</div><!-- End .ratings-val -->
                                    </div><!-- End .rating-container -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->
                        @endforeach
                    </div><!-- End .owl-carousel -->
                </div><!-- .End .tab-pane -->
            @endforeach
        </div><!-- End .tab-content -->

    </div><!-- End .container -->

    <div class="mb-6"></div><!-- End .mb-6 -->

    <div class="container">
        <div class="cta cta-border mb-5"
             style="background-image:url('{{url('site/assets/images/home/galaxy tab s7 plus-1171x300.jpg')}}') ; height: 200px">
            {{--            <img src="{{url('site/assets/images/demos/demo-4/camera.png')}}" alt="camera" class="cta-img">--}}
        </div><!-- End .cta -->
    </div><!-- End .container -->



    <div class="container">
        <div class="heading-left">
            <h2 class="title text-center">همکاران ما</h2><!-- End .title -->
        </div><!-- End .heading -->
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
            @foreach($allpartners as $partner)
                <a href="javascript:void(0)" class="brand flex-column mx-auto">
                    <img src="{{url('')}}{{$partner->logo}}" alt="نام برند">
                </a>
            @endforeach
        </div><!-- End .owl-carousel -->
    </div><!-- End .container -->

    <div class="mb-5"></div><!-- End .mb-5 -->

    <div class="container for-you">
        <div class="heading heading-flex mb-3">
            <div class="heading-left">
                <h2 class="title">تخفیفات ویژه 10 تا 20 درصد تخفیف</h2><!-- End .title -->
            </div><!-- End .heading-left -->
        </div><!-- End .heading -->

        <div class="products">
            <div class="row justify-content-center">
                @foreach( $allProducts->where('discount' , '>=' , '10') as $product)
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="product product-2">
                            <figure class="product-media">
                                <span class="product-label label-circle label-sale">فروش ویژه</span>
                                <a href="javascript:void(0)">
                                    <img src="{{url('')}}{{$product->image}}"
                                         alt="{{$product->title}}"
                                         class="product-image">
                                </a>
                                <div class="product-action ">

                                    <a href="{{route('site.product.show' , $product->id)}}"
                                       title="مشاهده محصول" style="float: right ; direction: rtl"><span
                                            class="px-2">مشاهده محصول </span></a>
                                    <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; |&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>

                                    <form action="{{route('site.cart.store' , $product)}}" method="post">
                                        @csrf
                                        <input type="hidden" name="name" value="{{$product->title}}">
                                        <input type="hidden" name="id" value="{{$product->id}}">
                                        <input type="hidden" name="price" value="{{$product->price}}">
                                        <input type="hidden" name="count" value="1">
                                        <button type="submit" class="btn-product btn-cart px-2 border-0"
                                                title="افزودن به سبد خرید">
                                        </button>
                                    </form>

                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->
                            <div class="product-body">
                                <div class="product-cat">
                                    <a href="#">{{$product->category_name($product->category)}}</a>
                                </div><!-- End .product-cat -->
                                <h3 class="product-title">
                                    <a href="{{route('site.product.show' , $product->id)}}">
                                        {{$product->title}}
                                    </a></h3><!-- End .product-title -->
                                <div class="product-price">
                                    {{number_format(intdiv($product->price , 10))}}
                                </div><!-- End .product-price -->
                                <div class="ratings-container">
                                    <div class="ratings">
                                        @switch($product->rate)
                                            @case(1)
                                            <div class="ratings-val" style="width: 20%;"></div>
                                            @break
                                            @case(2)
                                            <div class="ratings-val" style="width: 40%;"></div>
                                            @break
                                            @case(3)
                                            <div class="ratings-val" style="width: 60%;"></div>
                                            @break
                                            @case(4)
                                            <div class="ratings-val" style="width: 80%;"></div>
                                            @break
                                            @case(5)
                                            <div class="ratings-val" style="width: 100%;"></div>
                                            @break
                                        @endswitch</div><!-- End .ratings-val -->
                                </div><!-- End .rating-container -->
                            </div><!-- End .product-body -->
                        </div><!-- End .product -->

                    </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->
                @endforeach
            </div><!-- End .row -->
        </div><!-- End .products -->

    </div><!-- End .container -->

    <div class="mb-4"></div><!-- End .mb-4 -->


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

@section('footerTopAd')
    @include('site.layout.footer.footerTopAd')
@endsection
@section('footerMiddle')
    @include('site.layout.footer.footerMiddle')
@endsection
