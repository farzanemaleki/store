@extends('adminpanel.layout')

@section('pageTitle')
    سفارش
@stop
@section('mainContent')
    <!-- .content-header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">نام سفارش دهنده : {{$order->user->name}} </h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">داشبورد</a></li>
                        <li class="breadcrumb-item active"> شماره سفارش | {{$order->order_id}}</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    {{--    mainContent--}}
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title text-right">سفارشات</h3>
                        </div>

                        {{--card header--}}
                        <div class="card-body">
                            <ul class="row show-order">
                                <li class="col-md-6">
                                    نام سفارش دهنده:
                                    <span>{{$order->user->name}}</span>
                                </li>
                                <li class="col-md-6">
                                    شماره پیگیری:
                                    <span>{{$order->RefID}}</span>
                                </li>
                                <li class="col-md-6">
                                    وضعیت پرداخت:
                                    <span>موفق</span>
                                </li>
                                <li class="col-md-6">
                                    شماره همراه سفارش دهنده:
                                    <span>{{$order->user->mobile ?? ''}}</span>
                                </li>
                                <li class="col-md-6">
                                    تاریخ ثبت سفارش:
                                    <span>{{$order->diffForHumans($order->created_at)}}</span>
                                </li>
                                <li class="col-md-9">
                                    توضیحات اضافی:
                                    <span>{{$order->order->description?  $order->order->description: 'بدون توضیح'}}</span>
                                </li>
                                <li class="col-md-6">
                                    میزان مالیات پرداختی (با احتساب ۹٪):
                                    <span>{{number_format(intdiv($TaxPrice , 10))}} تومان</span>
                                </li>

                                <li class="col-md-12">
                                    <hr>
                                    <p>
                                        سفارش:
                                    </p>
                                    <table class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <td class="th-row">ردیف</td>
                                                <td>نام کالا</td>
                                                <td>تعداد</td>
                                                <td>قیمت واحد</td>
                                                <td>قیمت کل</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @for($i=0 ; $i<count($selectedProductsPricesAsList) ; $i++)
                                            <tr>
                                                <td class="th-row">{{$i+1}}</td>
                                                <td>
                                                    <a href="{{route('site.product.show' , $selectedProductsIdsAsList[$i])}}">{{$selectedProductsNamesAsList[$i]}}</a>
                                                </td>
                                                <td>{{$selectedProductsCountsAsList[$i]}}</td>
                                                <td>{{number_format(intdiv($selectedProductsPricesAsList[$i] , 10))}}</td>
                                                <td>{{number_format(intdiv($selectedProductsTotalPricesAsList[$i] , 10))}}</td>
                                            </tr>
                                        @endfor
                                        <tr>
                                            <td colspan="4" class="text-left">مجموع سبد خرید (به همراه نرخ مالیات ۹٪) :</td>
                                            <td colspan="1" class="text-center"> {{number_format(intdiv($TotalPrice , 10))}}</td>
                                        </tr>
                                        <tr>
                                            <td colspan="4" class="text-left">هزینه ارسال :</td>
                                            <td colspan="1" class="text-center"> {{number_format(10000)}}</td>
                                        </tr>
                                        <tr>
                                            <td colspan="4" class="text-left">مجموع پرداختی (به همراه نرخ مالیات ۹٪ و هزینه ارسال) :</td>
                                            <td colspan="1" class="text-center"> {{number_format($order->order->amount)}}</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <hr>
                                </li>
                                <li class="col-sm-12">
                                    آدرس:
                                    <span>{{$order->address->user_address}}</span>

                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
