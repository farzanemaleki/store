@extends('adminpanel.layout')
@section('pageTitle')
    دسته بندی نوشته ها
@endsection
@section('mainContent')
    <!-- .content-header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">دسته بندی نوشته ها</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">داشبورد</a></li>
                        <li class="breadcrumb-item active">دسته بندی نوشته ها</li>
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
                            <h3 class="card-title text-right">دسته بندی نوشته ها</h3>
                        </div>

                        {{--card header--}}
                        <div class="card-body">
                            @if(\App\BlogCategory::all()->count() > 0)
                                <div class="table-responsive">
                                    <table id="example2" class="table table-bordered table-hover">
                                        <thead>
                                        <tr>
                                            <th>ردیف</th>
                                            <th>نام دسته بندی</th>
                                            <th>پرچم</th>
                                            <th>تصویر دسته بندی</th>
                                            <th>وضعیت</th>
                                            <th>توضیحات کوتاه</th>
                                            <th>عملیات</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($allBlogCategory as $blogcat)
                                            <tr>
                                                <td>{{$blogcat->id}}</td>
                                                <td>{{$blogcat->topic}}</td>
                                                <td>{{$blogcat->slug}}</td>
                                                <td>
                                                    <img width="100px" src="{{ url('') }}{{$blogcat->image}}" alt="{{$blogcat->topic}}">
                                                </td>
                                                <td>
                                                    @if($blogcat->status == 0)
                                                        پیش نویس
                                                    @else
                                                        منتشر شده
                                                    @endif
                                                </td>
                                                <td>{!! $blogcat->body !!}</td>
                                                <td>
                                                    <a href="{{route('dashboard.blogCategory.edit', $blogcat->id)}}"><i class="fa fa-pencil m-2" ></i></a>
                                                    <a href="{{route('dashboard.blogCategory.destroy' , $blogcat->id)}}"><i class="fa fa-trash-o text-danger"></i></a>
                                                </td>
                                            </tr>

                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            @else
                                <h4>دسته بندی ای در سایت موجود نیست</h4>
                                <a type="button" class="btn btn-outline-primary" href="{{route('dashboard.blogCategory.create')}}">اولین دسته بندی خود را بسازید</a>

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

        $('#blogCategory').addClass('menu-open');
        $('#blogCategory> a').addClass('active');
        $('#allBlogCategory').addClass('active');
        // $('#newBlogCategory').addClass('active');


    </script>
@stop
