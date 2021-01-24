@extends('site.layout.inc.main')
@section('page-title')
تماس با ما
@endsection
@section('main-content')

<main class="main">
    <nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-0">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('homepage')}}">خانه</a></li>
                <li class="breadcrumb-item active" aria-current="page">تماس با ما</li>
            </ol>
        </div><!-- End .container -->
    </nav><!-- End .breadcrumb-nav -->
    <div class="container">
        <div class="page-header page-header-big text-center" style="background-image: url({{url('site/assets/images/contact-header-bg.jpg')}})">
            <h1 class="page-title text-white">تماس با ما
                <span class="text-white">
                    ارتباط خود را با ما حفظ کنید
                </span>
            </h1>
        </div><!-- End .page-header -->
    </div><!-- End .container -->

    <div class="page-content pb-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-2 mb-lg-0">
                    <h2 class="title mb-1">اطلاعات تماس</h2><!-- End .title mb-2 -->
                    <p class="mb-3">
                        {{$Info->short_description}}
                    </p>

                </div><!-- End .col-lg-6 -->
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-sm-7">
                            <div class="contact-info">
                                <h3>
                                    نام شرکت : {{$Info->company_name}}
                                </h3>

                                <ul class="contact-list">

                                    <li>
                                        <i class="icon-phone"></i>
                                        <a href="tel:#">{{$Info->company_tell}}</a>
                                    </li>
                                    <li>
                                        <i class="icon-envelope"></i>
                                        <a href="#">پیامک {{$Info->manager_tell}}</a>
                                    </li>
                                </ul><!-- End .contact-list -->
                            </div><!-- End .contact-info -->
                        </div><!-- End .col-sm-7 -->

                        <div class="col-sm-5">
                            <div class="contact-info">
                                <h3>ساعت کار</h3>

                                <ul class="contact-list">
                                    <li>
                                        <i class="icon-calendar"></i>
                                        <span class="text-dark">همه روزه</span> <br>
                                    </li>
                                    <li>
                                        <i class="icon-clock-o"></i>
                                        <span class="text-dark">24 ساعته</span>
                                    </li>
                                </ul><!-- End .contact-list -->
                            </div><!-- End .contact-info -->
                        </div><!-- End .col-sm-5 -->
                    </div><!-- End .row -->
                </div>

                {{--                <div class="col-lg-6">--}}
{{--                    <h2 class="title mb-1">سوالی دارید؟</h2><!-- End .title mb-2 -->--}}
{{--                    <p class="mb-2">با استفاده از فرم زیر می توانید با ما ارتباط برقرار کنید</p>--}}

{{--                    <form action="#" class="contact-form mb-3">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-sm-6">--}}
{{--                                <label for="cname" class="sr-only">نام</label>--}}
{{--                                <input type="text" class="form-control" id="cname" placeholder="نام خود را وارد کنید *" required="">--}}
{{--                            </div><!-- End .col-sm-6 -->--}}

{{--                            <div class="col-sm-6">--}}
{{--                                <label for="cemail" class="sr-only">ایمیل</label>--}}
{{--                                <input type="email" class="form-control" id="cemail" placeholder="ایمیل خود را وارد کنید *" required="">--}}
{{--                            </div><!-- End .col-sm-6 -->--}}
{{--                        </div><!-- End .row -->--}}

{{--                        <div class="row">--}}
{{--                            <div class="col-sm-6">--}}
{{--                                <label for="cphone" class="sr-only">شماره موبایل</label>--}}
{{--                                <input type="tel" class="form-control" id="cphone" placeholder="شماره موبایل خود را وارد کنید">--}}
{{--                            </div><!-- End .col-sm-6 -->--}}

{{--                            <div class="col-sm-6">--}}
{{--                                <label for="csubject" class="sr-only">موضوع</label>--}}
{{--                                <input type="text" class="form-control" id="csubject" placeholder="موضوع پیام شما">--}}
{{--                            </div><!-- End .col-sm-6 -->--}}
{{--                        </div><!-- End .row -->--}}

{{--                        <label for="cmessage" class="sr-only">پیام</label>--}}
{{--                        <textarea class="form-control" cols="30" rows="4" id="cmessage" required="" placeholder="متن پیام شما *"></textarea>--}}

{{--                        <button type="submit" class="btn btn-outline-primary-2 btn-minwidth-sm float-right">--}}
{{--                            <span>تایید و ارسال</span>--}}
{{--                            <i class="icon-long-arrow-left"></i>--}}
{{--                        </button>--}}
{{--                    </form><!-- End .contact-form -->--}}
{{--                </div><!-- End .col-lg-6 -->--}}
            </div><!-- End .row -->

            <hr class="mt-4 mb-5">

        </div><!-- End .container -->
    </div><!-- End .page-content -->
</main>

@endsection
