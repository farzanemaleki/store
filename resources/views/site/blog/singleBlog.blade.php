@extends('site.layout.inc.main')
@section('page-title')
    بلاگ
@endsection
@section('main-content')
    <main class="main">
        <nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-0">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('homepage')}}">خانه</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('site.blog.category.index' , $blog->category) }}">دسته بندی</a></li>
                    <li class="breadcrumb-item active" aria-current="page">پست تکی</li>
                </ol>
            </div><!-- End .container -->
        </nav><!-- End .breadcrumb-nav -->
        <div class="page-content">
            <div class="container">
                <img src={{ url('') }}{{ $blog->image }} width="100%" height="100px" />

                <div class="row">
                    <div class="col-lg-9">
                        <article class="entry single-entry">
                            <div class="entry-body">
                                <div class="entry-meta">
                                        <span class="entry-author">
                                            نویسنده : {{ $blog->author_name($blog->author) }}
                                        </span>
                                    {{-- <span class="meta-separator">|</span>
                                    <a href="#">22 فروردین 1399</a>
                                    <span class="meta-separator">|</span>
                                    <a href="#">2 دیدگاه</a> --}}
                                </div><!-- End .entry-meta -->

                                <h2 class="entry-title entry-title-big">
                                    {{ $blog->body }}
                                </h2><!-- End .entry-title -->


                                <div class="entry-content editor-content">
                                    {!! $blog->description !!}
                                </div><!-- End .entry-content -->
                            </div><!-- End .entry-body -->
                        </article><!-- End .entry -->

                        <br/>
                        <div class="comments" style="text-align: right">
                            @include('site.layout.comment.comment' , ['allcomments' => $allcomments,'subject' => $blog])

                        </div><!-- End .comments -->
                    </div><!-- End .col-lg-9 -->
                            @include('site.blog.sidebar')
                </div><!-- End .row ->
            </div><!-- End .container -->
        </div><!-- End .page-content -->
    </main>
@endsection

