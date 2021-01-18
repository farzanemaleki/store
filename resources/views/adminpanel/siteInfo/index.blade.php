@extends('adminpanel.layout')
@section('pageTitle')
    اطلاعات سایت
@endsection
@section('mainContent')
    <!-- .content-header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">مدیریت اطلاعات سایت</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">داشبورد</a></li>
                        <li class="breadcrumb-item active">اطلاعات سایت</li>
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
                        <div class="alert alert-success col-sm-9">
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
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title text-right">اطلاعات سایت</h3>
                        </div>
                        {{--card header--}}
                        <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example2" class="table table-bordered table-hover">
                                        <thead>
                                        <tr>
                                            <th>ردیف</th>
                                            <th>نام شرکت</th>
                                            <th>لوگو شرکت</th>
                                            <th>شماره تماس شرکت</th>
                                            <th>شماره تماس مدیر</th>
                                            <th>توضیحات کوتاه</th>
                                            <th>توضیحات</th>
                                            <th>ویرایش </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($allInfo as $info)
                                            <tr>
                                                <td>{{$info->id}}</td>
                                                <td>{{$info->company_name}}</td>
                                                <td>
                                                    <img width="100px" src="{{ url('') }}{{$info->company_logo}}" alt="{{$info->company_name}}">
                                                </td>
                                                <td>{{$info->company_tell}}</td>
                                                <td>{{$info->manager_tell}}</td>
                                                <td>{!! Str::limit($info->short_description , 100) !!}</td>
                                                <td>{!! $info->description !!}</td>

                                                <td>
                                                    <a href="{{route('dashboard.siteInfo.edit', $info->id)}}"><i class="fa fa-pencil m-2" ></i></a>
                                                </td>
                                            </tr>

                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
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

        $('#infos').addClass('menu-open');
        $('#infos> a').addClass('active');
        $('#allinfos').addClass('active');


    </script>
@stop
