@extends('site.layout.inc.main')
@section('page-title')
    پست ها
@endsection
@section('main-content')
    <main class="main">
        <div class="page-header text-center" style="background-image: url('{{url('site/assets/images/page-header-bg.jpg')}}')">
            <div class="container">
                <h1 class="page-title">همه پست ها<span>جدید ترین</span></h1>
            </div><!-- End .container -->
        </div><!-- End .page-header -->
        <nav aria-label="breadcrumb" class="breadcrumb-nav mb-3">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('homepage')}}">خانه</a></li>
                    <li class="breadcrumb-item active"><a href="#">همه پست ها</a></li>
                </ol>
            </div><!-- End .container -->
        </nav><!-- End .breadcrumb-nav -->

        <div class="page-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        @foreach($allblog as $blog)
                        <article class="entry entry-list">
                            <div class="row align-items-center">
                                <div class="col-md-5">
                                    <figure class="entry-media">
                                        <a href="single.html">
                                            <img src="{{url('')}}{{$blog->image}}" alt="{{$blog->topic}}">
                                        </a>
                                    </figure><!-- End .entry-media -->
                                </div><!-- End .col-md-5 -->

                                <div class="col-md-7">
                                    <div class="entry-body">
                                        <div class="entry-meta">
                                                <span class="entry-author">
                                                    نویسنده : <a href="#">{{$blog->author_name($blog->author)}}</a>
                                                </span>
                                            <span class="meta-separator">|</span>
                                            <a href="#">{{$blog->created_at}}</a>
                                            <span class="meta-separator">|</span>
                                            {{-- <a href="#">2 دیدگاه</a> --}}
                                        </div><!-- End .entry-meta -->

                                        <h2 class="entry-title">
                                            <a href="single.html">{{$blog->topic}}</a>
                                        </h2><!-- End .entry-title -->

                                        <div class="entry-cats">
                                             <a href="{{route('site.blog.category.index' , $blog->category)}}">دسته بندی : {{' '.$blog->category_name($blog->category)}}</a>
                                        </div><!-- End .entry-cats -->

                                        <div class="entry-content">
                                            <p>
                                                {!! str_limit($blog->description , 120) !!}
                                            </p>

                                            <a href="{{ route('site.blog.single.index' , $blog->id) }}" class="read-more">ادامه...</a>
                                        </div><!-- End .entry-content -->
                                    </div><!-- End .entry-body -->
                                </div><!-- End .col-md-7 -->
                            </div><!-- End .row -->
                        </article><!-- End .entry -->
                        @endforeach
                        <!----------------pagination----------->
                        <div class="col-sm-12">
                            {!! $allblog->render() !!}
                        </div>
                    </div><!-- End .col-lg-9 -->

                    @include('site.blog.sidebar')
                </div><!-- End .row -->
            </div><!-- End .container -->
        </div>
    </main>
@endsection
