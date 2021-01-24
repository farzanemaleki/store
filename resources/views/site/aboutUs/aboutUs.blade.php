@extends('site.layout.inc.main')
@section('page-title')
    درباره ما
@endsection
@section('main-content')
    <main class="main">
        <nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-0">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('homepage')}}">خانه</a></li>
                    <li class="breadcrumb-item active" aria-current="page">درباره ما</li>
                </ol>
            </div><!-- End .container -->
        </nav><!-- End .breadcrumb-nav -->
        <div class="container">
            <div class="page-header page-header-big text-center" style="background-image: url({{url('site/assets/images/blog/single/fullwidth-sidebar/1.jpg')}})">
                <h1 class="page-title text-white">درباره ما<span class="text-white">درباره فروشگاه ما</span></h1>
            </div><!-- End .page-header -->
        </div><!-- End .container -->

        <div class="page-content pb-0">

            <div class="bg-light-2 pt-6 pb-5 mb-6 mb-lg-8">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 mb-3 mb-lg-0">
                            <h2 class="title">ما که هستیم</h2><!-- End .title -->
                            <p class="lead text-primary mb-3">
                              {{$info->short_description}}
                            </p><!-- End .lead text-primary -->
                        </div><!-- End .col-lg-5 -->

                        <div class="col-lg-7 mb-3 mb-lg-0">
                        <p class="mb-5">
                                {!! $info->description !!}
                            </p>

                            <a href="{{route('site.blog.index')}}" class="btn btn-sm btn-minwidth btn-outline-primary-2 float-left">
                                <span>مشاهده دیگر خبرها</span>
                                <i class="icon-long-arrow-left"></i>
                            </a>
                        </div><!-- End .col-lg-7 -->
                    </div><!-- End .row -->
                </div><!-- End .container -->
            </div><!-- End .bg-light-2 pt-6 pb-6 -->

            <div class="container">
                <div class="row">
                    <div class="col-lg-12 mb-4">
                        <h2 class="text-center">برند های معروفی که با ما در حال همکاری هستند.</h2>
                    </div><!-- End .col-lg-5 -->
                    <div class="col-lg-12">
                        <div class="brands-display">
                            <div class="row justify-content-center">
                                @foreach($allPartners as $partner)
                                <div class="col-sm-2 mb-3">

                                        <img  src="{{url('')}}{{$partner->logo}}" alt="نام برند">

                                </div><!-- End .col-sm-4 -->
                                @endforeach
                            </div><!-- End .row -->
                        </div><!-- End .brands-display -->
                    </div><!-- End .col-lg-7 -->
                </div><!-- End .row -->

            </div><!-- End .container -->
        </div><!-- End .page-content -->
    </main>
@endsection

