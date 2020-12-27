@extends('site.layout.inc.main')
@section('page-title')
    {{$category->title}}
@endsection
@section('main-content')
    <main class="main">
        <div class="page-header text-center" style="background-image: url('{{url('')}}{{$category->image}}')">
            <div class="container">
                <h1 class="page-title"><span>فروشگاه</span>{{$category->title}}</h1>
            </div><!-- End .container -->
        </div><!-- End .page-header -->
        <nav aria-label="breadcrumb" class="breadcrumb-nav mb-2">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('homepage')}}">خانه</a></li>
                    {{--                    <li class="breadcrumb-item"><a href="#">فروشگاه</a></li>--}}
                    <li class="breadcrumb-item active" aria-current="page">فروشگاه{{' '.$category->title}}</li>
                </ol>
            </div><!-- End .container -->
        </nav><!-- End .breadcrumb-nav -->

        <div class="page-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="toolbox">
                            <div class="toolbox-left">
                                <div class="toolbox-info">
                                    تعداد <span>
                                        {{$allproductCount}}
                                    </span> محصول
                                </div><!-- End .toolbox-info -->
                            </div><!-- End .toolbox-left -->
                        </div><!-- End .toolbox -->

                        <div class="products mb-3">
                            <div class="row justify-content-center">
                                @if($allproductCount)
                                @foreach($allproduct as $product)
                                    <div class="col-6 col-md-4 col-lg-4 col-xl-3">
                                        <div class="product product-7 text-center">
                                            <figure class="product-media">
                                                <span class="product-label label-new">جدید</span>
                                                <a href="{{ route('site.product.show' , $product->id ) }}}}">
                                                    <img src="{{url('')}}{{$product->image}}" alt="{{$product->title}}"
                                                         class="product-image">
                                                </a>
                                                <div class="product-action">
                                                    <a href="#" class="btn-product btn-cart"><span>افزودن به
                                                            سبد خرید</span></a>
                                                </div><!-- End .product-action -->
                                            </figure><!-- End .product-media -->

                                            <div class="product-body">
                                                <div class="product-cat text-center">
                                                    <a href="{{route('site.productCategory.show' , $product->category)}}">{{$product->category_name($product->category)}}</a>
                                                </div><!-- End .product-cat -->
                                                <h3 class="product-title text-center">
                                                    <a href="{{route('site.product.show' , $product->id)}}">{{$product->title}}</a>
                                                </h3><!-- End .product-title -->
                                                <div class="product-price">
                                                    {{number_format(intdiv($product->price , 10))}}
                                                    تومان
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
                                                        @endswitch
                                                        <!-- End .ratings-val -->
                                                    </div><!-- End .ratings -->
                                                </div><!-- End .rating-container -->
                                            </div><!-- End .product-body -->
                                        </div><!-- End .product -->
                                    </div><!-- End .col-sm-6 col-lg-4 col-xl-3 -->
                                @endforeach
                                @else

                                <h4>محصولی در {{$category->title}} دسته بندی موجود نیست</h4>
                                @endif
                            </div><!-- End .row -->
                        </div><!-- End .products -->
                    </div><!-- End .col-lg-9 -->

                  @include('site.category.asideProductCategory')
                </div><!-- End .row -->
            </div><!-- End .container -->
        </div><!-- End .page-content -->
    </main><!-- End .main -->
@endsection
