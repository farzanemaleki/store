@extends('site.layout.inc.main')

@section('page-title')
    صفحه کاربر
@stop

@section('main-content')
    <main class="main">
        <div class="page-header text-center"
             style="background-image: url('{{url('site/assets/images/page-header-bg.jpg')}}')">
            <div class="container">
                <h1 class="page-title"> {{ Auth::user()->name . ' '}}<span>خوش آمدید </span></h1>
            </div><!-- End .container -->
        </div><!-- End .page-header -->
        <nav aria-label="breadcrumb" class="breadcrumb-nav mb-3">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('homepage')}}">خانه</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0)">داشبورد</a></li>
                    <li class="breadcrumb-item active"><a href="#">صفحه {{ Auth::user()->name . ' '}}</a></li>
                </ol>
            </div><!-- End .container -->
        </nav><!-- End .breadcrumb-nav -->

        <div class="container">
            <div class="row">
                @if(session('message'))
                    <div class="alert alert-success col-sm-9 flex-column mx-auto rtl">
                        <li>{{Session::get('message')}}</li>
                    </div>
                @endif
                @if(session ('error'))
                    <div class="alert alert-danger col-sm-9">
                        <li>{{Session::get('error')}}</li>
                    </div>
                @endif
                @if(session ('warning'))
                    <div class="alert alert-warning col-sm-9">
                        <li>{{Session::get('warning')}}</li>
                    </div>
                @endif
                </div>
            <div class="row">

                <div class="nav nav-tabs   d-inline-block col-sm-3 mx-0 px-0" id="tabs-7" role="tablist">
                    <a class="nav-item account-tab active">
                        <a class="nav-link " id="tab-25-tab" data-toggle="tab" href="#tab-25" role="tab"
                           aria-controls="tab-25" aria-selected="true">
                            سفارشات
                        </a>
                    </a>
                    <a class="nav-item account-tab">
                        <a class="nav-link" id="tab-26-tab" data-toggle="tab" href="#tab-26" role="tab"
                           aria-controls="tab-26" aria-selected="false">
                            آدرس
                        </a>
                    </a>
                    <a class="nav-item account-tab">
                        <a class="nav-link" id="tab-27-tab" data-toggle="tab" href="#tab-27" role="tab"
                           aria-controls="tab-27" aria-selected="false">
                            جزییات حساب کاربری
                        </a>
                    </a>
                    <a class="nav-item account-tab">
                        <a class="nav-link" href="{{route('logoutUser')}}">
                            خروج از حساب
                        </a>
                    </a>
                </div>
                <div class="tab-content  d-inline-block col-sm-9" id="tab-content-7">
                    <div class="tab-pane fade show active" id="tab-25" role="tabpanel"
                         aria-labelledby="tab-25-tab">
                        @if($allOrders->count() > 0)
                            <table class="table table-cart table-mobile">
                                <thead>
                                <tr>
                                    <th>ردیف</th>
                                    <th>قیمت(تومان)</th>
                                    <th>آدرس</th>
                                    <th>شماره سفارش</th>
                                    <th>عملیات</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($allOrders as $order)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ number_format($order->amount) }}</td>
                                        <td>{{Str::limit( $order->address->user_address , 60)}}</td>
                                        <td>{{ $order->RefID }}</td>
                                        <td>
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                                    data-target="#exampleModal{{$order->order_id}}">
                                                نمایش جزییات سفارش
                                            </button>
                                            <!-- Modal -->

                                            <div class="modal fade" id="exampleModal{{$order->order_id}}" tabindex="-1"
                                                 aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">جزییات سفارش
                                                                شما</h5>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="summary">
                                                                <h3 class="summary-title">سفارش شما</h3>
                                                                <!-- End .summary-title -->
                                                                <table class="table table-bordered table-hover">
                                                                    <thead>
                                                                        <tr>
                                                                            <th class="text-center">محصول</th>
                                                                            <th class="text-center">تعداد</th>
                                                                            <th class="text-center">قیمت واحد</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr >
                                                                            <td class="text-center">
                                                                                @foreach(  explode(',', str_replace(['{' , '}'] , '' , $order->order->product_name)) as $singleName)
                                                                                    {{ $singleName }}</br>
                                                                                    <hr/>
                                                                                @endforeach
                                                                            </td>
                                                                            <td class="text-center">
                                                                                @foreach(explode(',', str_replace(['{' , '}'] , '' , $order->order->product_count)) as $singleCount)
                                                                                    {{ $singleCount }}</br>
                                                                                    <hr/>
                                                                                @endforeach
                                                                            </td>
                                                                            <td class="text-center">
                                                                                @foreach(explode(',', str_replace(['{' , '}'] , '' , $order->order->product_price)) as $singlePrice)
                                                                                    {{ $singlePrice }}</br>
                                                                                    <hr/>
                                                                                @endforeach
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                    <div>
                                                                        <p>مبلغ پرداختی :</p>
                                                                        <p class="text-left">{{$order->order->amount}}
                                                                            تومان
                                                                        </p>
                                                                    </div>
                                                            </div>

                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-success"
                                                                    data-dismiss="modal">بسیار خب!
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        @else
                            <p>
                                تا به حال سفارشی برای شما ثبت نشده است لطفا برای ثبت سفارش خود به فروشگاه ما
                                بروید.
                            </p>
                            <a class="btn btn-primary" href="{{route('site.shop.index')}}">فروشگاه</a>
                        @endif
                    </div><!-- .End .tab-pane -->
                    <div class="tab-pane fade" id="tab-26" role="tabpanel" aria-labelledby="tab-26-tab">
                        @if($allAddress->count() > 0)
                            <table class="table table-cart table-mobile">
                                <thead>
                                <tr>
                                    <th>ردیف</th>
                                    <th>آدرس</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($allAddress as $address)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $address->user_address }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        @else
                            <p>
                                تا به حال آدرسی برای شما ثبت نشده است.
                            </p>
                        @endif
                    </div><!-- .End .tab-pane -->
                    <div class="tab-pane fade" id="tab-27" role="tabpanel" aria-labelledby="tab-27-tab">
                        <form action="{{route('user.account.update' , Auth::user()->id)}}" role="form" method="post">
                            @csrf
                            <div class="row rtl">
                                <!------------------ name---------------->
                                <div class="col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <lable> نام</lable>
                                        <input type="text" class="form-control" name="name"
                                               value="{{Auth::user()->name}}"/>
                                    </div>
                                </div>
                                <!------------------- mobile---------------->
                                <div class="col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <lable> شماره موبایل</lable>
                                        <input type="tel" class="form-control" name="mobile" disabled
                                               value="{{Auth::user()->mobile }}"/>
                                    </div>
                                </div>
                                <!------------------- email---------------->
                                <div class="col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <lable> ایمیل</lable>
                                        <input type="email" class="form-control" name="email"
                                               value="{{Auth::user()->email }}"/>
                                    </div>
                                </div>
                                <!-------------------password---------------->
                                <div class="col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <lable> پسورد</lable>
                                        <input type="password" class="form-control" name="password"
                                               placeholder="میتوانید رمز عبور جدید وارد کنید..."
                                            />

                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-primary" value="ذخیره">
                                        <a class="btn btn-danger" href="{{ route('user.account.index') }}">لغو
                                            عملیات</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div><!-- .End .tab-pane -->
                </div><!-- End .tab-content -->
            </div>

        </div><!-- End .row -->

    </main>


@stop
