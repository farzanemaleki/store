@extends('adminpanel.layout')
@section('pageTitle')
    همکاران
@endsection
@section('mainContent')
    <!-- .content-header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">همکاران</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">داشبورد</a></li>
                        <li class="breadcrumb-item active">همکاران</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
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
                    @if(session ('warning'))
                        <div class="alert alert-warning col-sm-3">
                            <li>{{Session::get('warning')}}</li>
                        </div>
                    @endif
                </div>
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title text-right">همکاران</h3>
                        </div>

                        {{--card header--}}
                        <div class="card-body">
                            @if(\App\Partner::all()->count() > 0)
                                <div class="table-responsive">
                                    <table id="example2" class="table table-bordered table-hover">
                                        <thead>
                                        <tr>
                                            <th>ردیف</th>
                                            <th>نام شرکت همکار</th>
                                            <th>نام مدیر</th>
                                            <th>شماره تماس</th>
                                            <th>آدرس</th>
                                            <th>ایمیل</th>
                                            <th>لوگو شرکت</th>
                                            <th>عملیات</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($allpartner as $partner)
                                            <tr>
                                                <td>{{$loop->iteration}}</td>
                                                <td>{{$partner->name}}</td>
                                                <td>{{$partner->manager_name}}</td>
                                                <td>{{$partner->phone}}</td>
                                                <td>{{$partner->address}}</td>
                                                <td>{{$partner->email}}</td>
                                                <td>
                                                    <img width="100px" src="{{ url('') }}{{$partner->logo}}" alt="{{$partner->name}}">
                                                </td>

                                                <td>
                                                    <a href="{{route('dashboard.partner.edit', $partner->id)}}"><i class="fa fa-pencil m-2" ></i></a>
                                                    <a href="{{route('dashboard.partner.destroy' , $partner->id)}}"><i class="fa fa-trash-o text-danger"></i></a>
                                                </td>
                                            </tr>

                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            @else
                                <h4>همکاری در سایت موجود نیست .</h4>
                                <a type="button" class="btn btn-outline-primary" href="{{route('dashboard.partner.create')}}">اولین همکار خود را اضافه کنید .</a>

                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection

@section('footerScripts')
    {{--    dataTables--}}
    <script src="{{url('adminPanel/plugins/datatables/jquery.dataTables.js')}}"></script>
    <script src="{{url('adminPanel/plugins/datatables/dataTables.bootstrap4.js')}}"></script>

    <script !src="">
        $('.nav-link').removeClass('active');

        $('#partners').addClass('menu-open');
        $('#partners> a').addClass('active');
        $('#allpartners').addClass('active');



    </script>
@stop
