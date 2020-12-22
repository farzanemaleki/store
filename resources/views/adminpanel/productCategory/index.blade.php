@extends('adminpanel.layout')

@section('pageTitle')
    دسته بندی محصولات
@stop
@section('mainContent')
    <!-- .content-header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">همه دسته بندی های محصولات</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">داشبورد</a></li>
                        <li class="breadcrumb-item active">دسته بندی ها</li>
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
                            <h3 class="card-title text-right">جدول دسته بندی ها</h3>
                        </div>

                        {{--card header--}}
                        <div class="card-body">
                            @if(\App\ProductCategory::all()->count() > 0)
                                <div class="table-responsive">
                                <table id="example2" class="table table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th>ردیف</th>
                                        <th>نام دسته بندی</th>
                                        <th>پرچم دسته بندی</th>
                                        <th>دسته بندی پدر</th>
                                        <th>عکس دسته بندی</th>
                                        <th>وضعیت نمایش دسته بندی</th>
                                        <th>توضیحات دسته بندی</th>
                                        <th>عملیات</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($allcategories as $category)
                                        <tr>
                                            <td>{{$category->id}}</td>
                                            <td>{{$category->title}}</td>
                                            <td>{{$category->slug}}</td>
                                            <td>{{$category->parent_name($category->parent_id)}}</td>
                                            <td><img width="100px" src="{{ url('') }}{{$category->image}}" alt="{{$category->title}}"></td>
                                            <td>
                                                @if($category->status == 0)
                                                    پیش نویس
                                                @else
                                                    منتشر شده
                                                @endif
                                            </td>
                                            <td>{!! $category->description!!}</td>
                                            <td><a href="{{route('dashboard.productCategory.edit' , $category->id)}}"><i class="fa fa-pencil m-2" ></i></a>
                                                <a href="{{route('dashboard.productCategory.destroy', $category->id)}}"><i class="fa fa-trash-o text-danger"></i></a>
                                            </td>

                                        </tr>

                                    @endforeach
                                    </tbody>
                                </table>
                                </div>
                            @else
                                <h4>دسته بندی در سایت موجود نیست</h4>
                                <a type="button" class="btn btn-outline-primary" href="{{route('dashboard.productCategory.create')}}">اولین دسته بندی خود را بسازید</a>

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

        $('#categories').addClass('menu-open');
        $('#categories> a').addClass('active');
        $('#allCategory').addClass('active');


    </script>
@stop
