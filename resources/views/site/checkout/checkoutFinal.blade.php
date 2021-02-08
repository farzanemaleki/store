@extends('site.layout.inc.main')
@section('page-title')
    نتیجه پرداخت
@endsection
@section('main-content')
    <main class="main">
        <div class="page-header text-center"
             style="background-image: url({{url('site/assets/images/page-header-bg.jpg')}})">
            <div class="container">
                <h1 class="page-title">نتیجه پرداخت<span>فروشگاه</span></h1>
            </div><!-- End .container -->
        </div><!-- End .page-header -->
        <nav aria-label="breadcrumb" class="breadcrumb-nav">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('homepage')}}">خانه</a></li>
                    <li class="breadcrumb-item"><a href="{{route('site.shop.index')}}">فروشگاه</a></li>
                    <li class="breadcrumb-item active" aria-current="page">نتیجه پرداخت</li>
                </ol>
            </div><!-- End .container -->
        </nav><!-- End .breadcrumb-nav -->

        <div class="page-content">
            <div class="checkout">
                    <div class="col-sm-6 flex-column mx-auto text-center">
                        <h3 class="bg-primary ">
                        {{ $final }}
                        </h3>
                    </div>
            </div><!-- End .checkout -->
        </div><!-- End .page-content -->
    </main>
@endsection
