@extends('adminpanel.layout')

@section('pageTitle')
    ویژگی محصولات
@stop
@section('mainContent')
    <!-- .content-header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">همه ویژگی های محصولات</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">داشبورد</a></li>
                        <li class="breadcrumb-item active">ویژگی ها</li>
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
                    @if(session ('error'))
                        <div class="alert alert-danger col-sm-3">
                            <li>{{Session::get('error')}}</li>
                        </div>
                    @endif
                </div>
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title text-right">جدول ویژگی ها</h3>
                        </div>

                        {{--card header--}}
                        <div class="card-body">
                            @if(\App\productAttribiutes::all()->count() > 0)
                                <table id="example2" class="table table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th>ردیف</th>
                                        <th>نام محصول</th>
                                        <th>عنوان ویژگی</th>
                                        <th>مقدار ویژگی</th>
                                        <th>عملیات</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($allproductAttr as $attr)
                                        <tr>
                                            <td>{{$attr->id}}</td>
                                            <td>{{$attr->product_name($attr->product_id)}}</td>
                                            <td>{{$attr->key}}</td>
                                            <td>{{$attr->value}}</td>
                                            <td>
                                                <a href="{{route('dashboard.productAttribiutes.edit', $attr->id)}}"><i class="fa fa-pencil m-2" ></i></a>
                                                <a href="{{route('dashboard.productAttribiutes.destroy' , $attr->id)}}"><i class="fa fa-trash-o text-danger"></i></a>
                                            </td>
                                        </tr>

                                    @endforeach
                                    </tbody>
                                </table>
                            @else
                                <h4>ویژگی محصول در سایت موجود نیست</h4>
                                <a type="button" class="btn btn-outline-primary" href="{{route('dashboard.productAttribiutes.create')}}">اولین ویژگی محصول  خود را بسازید</a>

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

        $('#attribiutes').addClass('menu-open');
        $('#attribiutes> a').addClass('active');
        $('#allAttr').addClass('active');


    </script>
@stop

