@extends('adminpanel.layout')

@section('pageTitle')
   کاربران سایت
@stop
@section('mainContent')
    <!-- .content-header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">همه کاربران سایت</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">داشبورد</a></li>
                        <li class="breadcrumb-item active">کاربران</li>
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
                            <h3 class="card-title text-right">کاربران</h3>
                        </div>

                        {{--card header--}}
                        <div class="card-body">
                            @if(\App\User::all()->count() > 0)
                                <table id="example2" class="table table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th>ردیف</th>
                                        <th>نام کاربر</th>
                                        <th>شماره همراه</th>
                                        <th>سطح دسترسی</th>
                                        <th>تاریخ عضویت</th>
                                        <th>آخرین کد تایید</th>
                                        <th>عملیات</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($allmembers as $member)
                                        <tr>
                                            <td>{{$member->id}}</td>
                                            <td>{{$member->name}}</td>
                                            <td>{{$member->mobile}}</td>
                                            <td>{{$member->role}}</td>
                                            <td>{{$member->created_at}}</td>
                                            <td>{{$member->verify_code}}</td>
                                            <td>
                                                <a href="{{route('dashboard.productAttribiutes.edit', $member->id)}}"><i class="fa fa-pencil m-2" ></i></a>
                                                <a href="{{route('dashboard.productAttribiutes.destroy' , $member->id)}}"><i class="fa fa-trash-o text-danger"></i></a>
                                            </td>
                                        </tr>

                                    @endforeach
                                    </tbody>
                                </table>
                            @else
                                <h4>کاربری در سایت موجود نیست</h4>
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

        $('#members').addClass('menu-open');
        $('#members> a').addClass('active');
        $('#allmembers').addClass('active');


    </script>
@stop

