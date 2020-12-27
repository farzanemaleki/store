@extends('site.layout.inc.main')
@section('page-title')
    صفحه پرداخت
@endsection
@section('main-content')
    <main class="main">
        <div class="page-header text-center"
             style="background-image: url({{url('site/assets/images/page-header-bg.jpg')}})">
            <div class="container">
                <h1 class="page-title">صفحه پرداخت<span>فروشگاه</span></h1>
            </div><!-- End .container -->
        </div><!-- End .page-header -->
        <nav aria-label="breadcrumb" class="breadcrumb-nav">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('homepage')}}">خانه</a></li>
                    <li class="breadcrumb-item"><a href="{{route('site.shop.index')}}">فروشگاه</a></li>
                    <li class="breadcrumb-item active" aria-current="page">صفحه پرداخت</li>
                </ol>
            </div><!-- End .container -->
        </nav><!-- End .breadcrumb-nav -->

        <div class="page-content">
            <div class="checkout">

                @if(!(Cart::content()->count()))
                    <div class="col-sm-12">
                        <div class="alert alert-info d-flex mx-auto col-sm-9">
                            <li>سبد خرید شما خالی است.</li>
                        </div>
                    </div>
                @else
                    <div class="col-lg-9">
                        @if(session('success-message'))
                            <div class="alert alert-success d-flex mx-auto col-sm-9">
                                <li>{{ Session::get('success-message') }}</li>
                            </div>
                        @elseif(session('alert-message'))
                            <div class="alert alert-danger d-flex mx-auto col-sm-9">
                                <li>{{ Session::get('alert-message') }}</li>
                            </div>
                        @endif
                    </div>
                    @if(Auth::guest())
                        <div class="alert alert-warning d-flex mx-auto col-sm-9">
                            <li style="margin-left: 25%">لطفا قبل از پرداخت وارد حساب کاربری خود شوید.</li>
                            <a href="{{route('login')}}" class="btn btn-outline-white"> ورود به حساب کاربری</a>
                        </div>
                    @else
                        <div class="container">
                            <div class="row">

                           <div class="col-lg-12">
                            <form action="{{route('site.checkout.store')}}" method="POST">
                                <div class="row">
                                    @csrf
                                    <div class="col-lg-9">
                                        <h2 class="checkout-title">جزئیات صورت حساب</h2><!-- End .checkout-title -->
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <label>نام و نام خانوادگی *</label>
                                                <input type="text" name="name" class="form-control" required=""
                                                       value="{{ auth()->user()->name ?? '' }}">
                                            </div><!-- End .col-sm-6 -->
                                        </div><!-- End .row -->

                                        <div class="row address-section">
                                            <input type="hidden" value="0" name="address_choose_id"
                                                   id="address_choose_id">
                                            <label class="col-sm-12 text-right">انتخاب آدرس : *</label>
                                            @if($current_addresses != null)
                                                @foreach($current_addresses as $address)
                                                    <div class="col-sm-12 col-md-6">
                                                        <div class="form-control"
                                                             style="height: 100%; text-align: right">
                                                            <input class="address_choose" type="radio"
                                                                   name="address_id" id="{{ $address->id }}"
                                                                   value="{{ $address->id }}">
                                                            <label
                                                                for="{{ $address->id }}">{{ $address->user_address }}</label>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            @endif
                                            <div class="col-sm-12">
                                                <div class="form-control" style="height: auto">
                                                    <input class="address_choose" type="radio" name="address_id"
                                                           id="0" value="0">
                                                    <label for="0">ارسال به آدرس جدید</label>
                                                    <br>
                                                    <br>
                                                    <label>نام شرکت یا موسسه (اختیاری)</label>
                                                    <input type="text" class="form-control" name="company_name">

                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <label>شهر / استان *</label>
                                                            <input type="text" name="city" class="form-control">

                                                        </div><!-- End .col-sm-6 -->

                                                        <div class="col-sm-6">
                                                            <label>شهرستان *</label>
                                                            <input type="text" name="state" class="form-control">
                                                        </div><!-- End .col-sm-6 -->
                                                    </div><!-- End .row -->
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <label>آدرس کامل *</label>
                                                            <input type="text" class="form-control" name="address"
                                                                   placeholder="نام خیابان و پلاک">

                                                        </div><!-- End .col-sm-12 -->

                                                    </div><!-- End .row -->

                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <label>کد پستی *</label>
                                                <input type="text" maxlength="10" class="form-control"
                                                       name="postal_code" required="required">
                                            </div><!-- End .col-sm-6 -->

                                            <div class="col-sm-6">
                                                <label>تلفن ثابت یا موبایل *</label>
                                                <input type="tel" maxlength="11" class="form-control" name="phone"
                                                       required="required"
                                                       value="{{ auth()->user()->mobile ?? '' }}">
                                            </div><!-- End .col-sm-6 -->
                                        </div><!-- End .row -->

                                        <label>ایمیل (اختیاری)</label>
                                        <input type="email" class="form-control"
                                               value="{{ auth()->user()->email ?? '' }}">
                                        <label>توضیحات (اختیاری)</label>
                                        <textarea class="form-control" cols="30" rows="4"
                                                  placeholder="شما میتوانید توضیحات اضافی خود را اینجا بنویسید"></textarea>
                                    </div><!-- End .col-lg-9 -->

                                <aside class="col-lg-3">
                                    <div class="summary">
                                        <h3 class="summary-title">سفارش شما</h3><!-- End .summary-title -->

                                        <table class="table table-summary">
                                            <thead>
                                            <tr>

                                                <th>محصول</th>
                                                <th>تعداد</th>
                                                <th class="text-left">جمع</th>
                                            </tr>
                                            </thead>

                                            <tbody>
                                            @foreach(Cart::content() as $item)
                                                <tr>
                                                    <td>
                                                        <a href="{{route('site.product.show' , $item->model->id)}}">{{$item->model->title}}
                                                            <img width="100px"
                                                                 src="{{url('')}}{{$item->model->thumbnail}}"
                                                                 alt="{{$item->model->title}}">
                                                        </a>
                                                    </td>
                                                    <td>{{ $item->qty }}</td>
                                                    <td class="text-left">{{ number_format( intdiv((int)$item->model->price , 10 ) * $item->qty ). ' '}}
                                                        تومان
                                                    </td>
                                                </tr>
                                            @endforeach
                                            <tr class="summary-subtotal">
                                                <td>جمع سبد خرید</td>
                                                <td></td>
                                                <td class="text-left">{{number_format(intdiv((int)str_replace( ',' , '' , Cart::subtotal()) , 10))}}</td>
                                            </tr><!-- End .summary-subtotal -->
                                            <tr>
                                                <td>مالیات و ارزش افزوده کالا (9درصد) :</td>
                                                <td></td>
                                                <td class="text-left">{{number_format( intdiv( (int)str_replace( ',' , '' , Cart::tax()) , 10 ) )}}</td>
                                            </tr>
                                            <tr>
                                                <td>شیوه ارسال :</td>
                                                <td>پست پیشتاز</td>
                                                <td class="text-left">{{number_format(10000)}}تومان</td>
                                            </tr>
                                            <tr class="summary-total">
                                                <td>مبلغ قابل پرداخت :</td>
                                                <td></td>
                                                <td class="text-left">{{number_format( intdiv( (int)str_replace( ',' , '' , Cart::total()) , 10 ) + 10000)}}
                                                    تومان
                                                </td>
                                            </tr><!-- End .summary-total -->
                                            </tbody>
                                        </table><!-- End .table table-summary -->

                                        <div class="accordion-summary" id="accordion-payment">
                                            <div class="card">
                                                <div class="card">
                                                    <div class="card-header" id="heading-3">
                                                        <h2 class="card-title">
                                                            <a class="collapsed" role="button"
                                                               data-toggle="collapse" href="#collapse-3"
                                                               aria-expanded="false" aria-controls="collapse-3">
                                                                زرین پال
                                                            </a>
                                                        </h2>
                                                    </div><!-- End .card-header -->
                                                    <div id="collapse-3" class="collapse"
                                                         aria-labelledby="heading-3"
                                                         data-parent="#accordion-payment">
                                                        <div class="card-body">استفاده از درگاه واسط زرین پال
                                                        </div><!-- End .card-body -->
                                                    </div><!-- End .collapse -->
                                                </div><!-- End .card -->

                                            </div><!-- End .accordion -->

                                            <button type="submit"
                                                    class="btn btn-outline-primary-2 btn-order btn-block">
                                                <span class="btn-text">ثبت</span>
                                                <span class="btn-hover-text">پرداخت</span>
                                            </button>
                                        </div><!-- End .summary -->
                                    </div>
                                </aside><!-- End .col-lg-3 -->
                                </div>
                            </form>
                           </div>

                            @endif
                            @endif
                            </div>
                        </div><!-- End .container -->
            </div><!-- End .checkout -->
        </div><!-- End .page-content -->
    </main>
@endsection
@section('footer_scripts')
    <script !src="">
        $(document).ready(function () {
            $('.address_choose').click(function () {
                let hiddenInput = $(this).parent().parent().parent().find('#address_choose_id');
                hiddenInput.val($(this).val());
                // console.log(hiddenInput);
                // console.log(hiddenInput.val($(this).val()));
            });
        });
    </script>

@endsection
