@extends('site.layout.inc.main')
@section('page-title')
    جستجو:{{$text}}
@endsection
@section('main-content')
    <div class="page-header text-center" style="background-image: url('{{url('site/assets/images/page-header-bg.jpg')}}')">
        <div class="container">
            <h1 class="page-title"><span>جستجو برای </span>{{ $text }}</h1>
        </div><!-- End .container -->
    </div>
    <nav aria-label="breadcrumb" class="breadcrumb-nav mb-2">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('homepage')}}">خانه</a></li>
                <li class="breadcrumb-item"><a href="{{route('site.shop.index')}}">فروشگاه</a></li>
                <li class="breadcrumb-item active" aria-current="page">نتیجه جستجو : {{ $text }}</li>
            </ol>
        </div><!-- End .container -->
    </nav>
    <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    @if($result->count() > 0)
                        <div class="toolbox">
                            <div class="toolbox-left">
                                <div class="toolbox-info">
                                    تعداد
                                    <span>
                                        {{ $result->count() }}
                                    </span>
                                    نتیجه جستجو
                                </div><!-- End .toolbox-info -->
                            </div><!-- End .toolbox-left -->
                        </div><!-- End .toolbox -->

                        <div class="products mb-3">
                            <div class="row justify-content-center">
                                @foreach($result as $item)
                                    <div class="col-6 col-md-4 col-lg-4 col-xl-3">
                                        <div class="product product-7 text-center">
                                            <figure class="product-media">
                                                <span class="product-label label-new">جدید</span>
                                                <a href="{{ route('site.product.show' , $item->id) }}">
                                                    <img src="{{ url('') }}{{ $item->image }}" alt="{{ $item->title }}" class="product-image">
                                                </a>
                                                <div class="product-action">
                                                    <form action="{{route('site.cart.store' , $item)}}" method="post">
                                                        @csrf
                                                        <input type="hidden" name="name" value="{{$item->title}}">
                                                        <input type="hidden" name="id" value="{{$item->id}}">
                                                        <input type="hidden" name="price" value="{{$item->price}}">
                                                        <input type="hidden" name="count" value="1">
                                                        <button type="submit" class="btn-product btn-cart"><span>افزودن به سبد خرید</span>
                                                        </button>
                                                    </form>
                                                </div><!-- End .product-action -->
                                            </figure><!-- End .product-media -->

                                            <div class="product-body">
                                                <div class="product-cat text-center">
                                                    <a href="{{ route('site.productCategory.show' , $item->category) }}">{{ $item->category_name($item->category) }}</a>
                                                </div><!-- End .product-cat -->
                                                <h3 class="product-title text-center">
                                                    <a href="{{ route('site.product.show' , $item->id) }}">{{ $item->title }}</a>
                                                </h3><!-- End .product-title -->
                                                <div class="product-price">
                                                    {{ number_format(intdiv($item->price , 10)) }} تومان
                                                </div><!-- End .product-price -->
                                                <div class="ratings-container">
                                                    <div class="ratings">
                                                        @switch($item->rate)
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
                            </div><!-- End .row -->
                        </div><!-- End .products -->
                    @else
                        <p class="text-danger">هیچ محصولی در دسته {{ $text }} موجود نمی باشد. </p>
                    @endif
                </div><!-- End .col-lg-9 -->
                @include('site.category.asideProductCategory')
            </div><!-- End .row -->
        </div><!-- End .container -->
    </div>
@stop

