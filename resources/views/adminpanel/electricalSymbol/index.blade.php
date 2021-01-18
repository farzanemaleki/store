@extends('adminpanel.layout')

@section('pageTitle')
    نماد الکترونیکی
@stop
@section('mainContent')
    <!-- .content-header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">همه نمادهای الکترونیکی</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">داشبورد</a></li>
                        <li class="breadcrumb-item active">نمادها</li>
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
                            <h3 class="card-title text-right">جدول نماد ها</h3>
                        </div>

                        {{--card header--}}
                        <div class="card-body">
                            @if(\App\ElectricalSymbol::all()->count() > 0)
                                <div class="table-responsive">
                                    <table id="example2" class="table table-bordered table-hover">
                                        <thead>
                                        <tr>
                                            <th>ردیف</th>
                                            <th>نام نماد الکترونیکی</th>
                                            <th>تصویر نماد</th>
                                            <th>عملیات</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($allSymbol as $symbol)
                                            <tr>
                                                <td>{{$loop->iteration}}</td>
                                                <td>{{$symbol->title}}</td>
                                                <td>
                                                    <img src="{{url('')}}{{$symbol->electrical_symbol}}" alt="{{$symbol->title}}" width="100">
                                                </td>
                                                <td><a href="{{route('dashboard.elecSymbol.edit' , $symbol->id)}}"><i class="fa fa-pencil m-2" ></i></a>
                                                    <a href="{{route('dashboard.elecSymbol.destroy', $symbol->id)}}"><i class="fa fa-trash-o text-danger"></i></a>
                                                </td>

                                            </tr>

                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            @else
                                <h4>نماد الکترونیکی ای در سایت موجود نیست.</h4>
                                <a type="button" class="btn btn-outline-primary" href="{{route('dashboard.elecSymbol.create')}}">اولین نماد خود را وارد کنید</a>

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

        $('#Elecs').addClass('menu-open');
        $('#Elecs> a').addClass('active');
        $('#allElecs').addClass('active');


    </script>
@stop
