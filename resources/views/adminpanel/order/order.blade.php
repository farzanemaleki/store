@extends('adminpanel.layout')

@section('pageTitle')
    سفارشات کاربران
@stop
@section('mainContent')
    <!-- .content-header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">همه سفارشات</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">داشبورد</a></li>
                        <li class="breadcrumb-item active">سفارشات</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    {{--    mainContent--}}
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    @if(session('message'))
                        <div class="alert alert-success col-sm-3">
                            <li>{{Session::get('message')}}</li>
                        </div>
                    @endif
                    @if(session ('warning'))
                        <div class="alert alert-danger col-sm-3">
                            <li>{{Session::get('warning')}}</li>
                        </div>
                    @endif
                </div>
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title text-right">سفارشات</h3>
                        </div>

                        {{--card header--}}
                        <div class="card-body">
                            @if(\App\Payment::where('status' , 'OK')->count() > 0)
                                <table id="example2" class="table table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th>ردیف</th>
                                        <th>نام سفارش دهنده</th>
                                        <th>شماره سفارش</th>
                                        <th>مبلغ سفارش</th>
                                        <th>وضعیت پرداخت</th>
                                        <th> تاریخ ثبت سفارش</th>
                                        <th>عملیات</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($orders as $order)
                                        <tr>
                                            <td>{{$order->id}}</td>
                                            <td>{{$order->user->name}}</td>
                                            <td>{{$order->order->id }}
                                            </td>
                                            <td>{{number_format($order->amount)}}تومان</td>
                                            <td>پرداخت موفق</td>
                                            <td>{{$order->diffForHumans($order->order->created_at)}}</td>
                                            <td>
                                                <a href="{{route('dashboard.orders.show' , $order->id)}}">
                                                    <i class="fa fa-check m-2" ></i></a>
                                                <a href="{{route('dashboard.orders.destroy' , $order->id)}}">
                                                    <i class="fa fa-trash-o text-danger"></i></a>
                                            </td>
                                        </tr>

                                    @endforeach
                                    </tbody>
                                    {!! $orders->links() !!}
                                </table>
                            @else
                                <h4>سفارشی در سایت موجود نیست</h4>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

@stop

@section('footerScripts')
    {{--    dataTables--}}
    <script src="{{url('adminPanel/plugins/datatables/jquery.dataTables.js')}}"></script>
    <script src="{{url('adminPanel/plugins/datatables/dataTables.bootstrap4.js')}}"></script>

    <script !src="">
        $('.nav-link').removeClass('active');

        $('#orders').addClass('menu-open');
        $('#orders> a').addClass('active');
        $('#allorders').addClass('active');


    </script>
@stop

