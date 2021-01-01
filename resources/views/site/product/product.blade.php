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
                                    <button type="submit" class="btn-product btn-cart"><span>افزودن به سبد خرید</span>
                                    </button>
                                </form>
                                <div class="product-details-footer">
                                    <div class="product-cat text-center">
                                        <span>دسته بندی : </span>
                                        {{--                                        <a--}}
                                        {{--                                            @if($product->category)--}}
                                        {{--                                            href="{{route('site.productCategory.show' , $product->category)}}"--}}
                                        {{--                                            @else--}}
                                        {{--                                            href="#"--}}
                                        {{--                                            @endif--}}
                                        {{--                                        > {{$product->category_name($product->category)}} </a>، --}}
                                        <a
                                            @if($product->category)
                                            href="{{route('site.productCategory.show' , $product->category)}}"
                                            @else
                                            href="#"
                                            @endif
                                        > {{$product->product_category->title}} </a>،

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
                           aria-selected="false">نظرات ({{$comments->count()}})</a>
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
                    <div class="tab-pane fade" id="product-review-tab" role="tabpanel" aria-labelledby="product-review-link">
                        <div class="reviews">
                        @if($comments->count() > 0)

                            <h3>نظر {{$comments->count()}}</h3>
                            @foreach($comments as $comment)
                            <div class="review">
                                <div class="row no-gutters">
                                    <div class="col-auto">
                                        <h4><a href="#">کاربر {{$comment->user->name}}</a></h4>
                                        <div class="ratings-container">
                                            <div class="ratings">
                                                <div class="ratings-val" style="width: 80%;"></div>
                                                <!-- End .ratings-val -->
                                            </div><!-- End .ratings -->
                                        </div><!-- End .rating-container -->
                                        <span class="review-date"> {{ $comment->diffForHumans($comment->updated_at) }} </span>
                                    </div><!-- End .col -->
                                    <div class="col-12">
                                        <div class="review-content">
                                            <p>{!! $comment->comment_body !!}</p>
                                        </div><!-- End .review-content -->

                                        <div class="review-action">
                                            <a href="#"><i class="icon-thumbs-up"></i>مثبت (2)</a>
                                            <a href="#"><i class="icon-thumbs-down"></i>منفی (0)</a>
                                        </div><!-- End .review-action -->
                                    </div><!-- End .col-auto -->
                                </div><!-- End .row -->
                            </div><!-- End .review -->
                                @endforeach
                            @else
                            <div style="margin: 30px">
                                هیچ نظری تا به حال درباره این محصول ثبت نشده است.
                            </div>
                            @endif
                        </div><!-- End .نظر -->



                        @if(auth()->check())
                            <div class="reviews">
                                <div class="reply">
                                    <div class="heading">
                                        <h3 class="title">ارسال دیدگاه</h3>
                                    </div>
                                    <form action="{{route('site.comment')}}" method="POST">
                                        @csrf
                                        <input type="hidden" name="parent_id" value="0">
                                        <input type="hidden" name="commentable_id" value="{{$product->id}}">
                                        <input type="hidden" name="commentable_type" value="{{ get_class($product) }}">
                                        <lable for="comment_body" class="sr-only">دیدگاه</lable>
                                        <textarea name="comment_body" id="comment_body" cols="30" rows="4"
                                                  class="form-control" placeholder="دیدگاه شما"></textarea>
                                        <button type="submit" class="btn btn-outline-primary-2 float-right">
                                            <span>ارسال دیدگاه</span>
                                            <i class="icon-long-arrow-left"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        @else
                            <div class="alert alert-warning col-sm-12 m-2">
                                <li>
                                برای ثبت نظر لطفا ابتدا وارد حساب کابری خود شوید
                                </li>
                            </div>
                        @endif

                    </div><!-- .End .tab-pane -->
                </div><!-- End .tab-content -->
            </div><!-- End .product-details-tab -->

            <h2 class="title text-center mb-4">محصولات مشابه</h2><!-- End .title text-center -->
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
                @foreach($product->more_product($product->category) as $more)
                    <div class="product product-7 text-center">
                        <figure class="product-media">
                            <span class="product-label label-new">جدید</span>
                            <a target="_blank" href="{{route('site.product.show' , $more->id) }}">
                                <img src="{{url('')}}{{$more->image}}" alt="{{$more->title}}" class="product-image">
                            </a>
                            <div class="product-action">
                                <form action="{{route('site.cart.store' , $product)}}" method="post">
                                    @csrf
                                    <input type="hidden" name="name" value="{{$product->title}}">
                                    <input type="hidden" name="id" value="{{$product->id}}">
                                    <input type="hidden" name="price" value="{{$product->price}}">
                                    <input type="hidden" name="count" value="1">
                                    <button type="submit" class="btn-product btn-cart" style="padding: 10px 75px"><span>افزودن به سبد خرید</span>
                                    </button>
                                </form>
                            </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat text-center">
                                <a target="_blank" href="{{route('site.productCategory.show' , $more->category)}}">
                                    {{$more->category_name($more->category)}}
                                </a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title text-center">
                                <a target="_blank" href="{{route('site.product.show' , $more->id)}}">
                                    {{$more->title}}
                                </a>
                            </h3>
                            <!-- End .product-title -->
                            <div class="product-price">
                                {{number_format(intdiv($more->price , 10))}}
                            </div><!-- End .product-price -->
                            <div class="ratings-container">
                                <div class="ratings">
                                    @switch($more->rate)
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
                                    @endswitch
                                </div><!-- End .ratings -->
                                {{--                        <span class="ratings-text">( 2 دیدگاه )</span>--}}
                            </div><!-- End .rating-container -->
                        </div><!-- End .product-body -->
                    </div><!-- End .product -->
                @endforeach

            </div><!-- End .owl-carousel -->
        </div>

@endsection
