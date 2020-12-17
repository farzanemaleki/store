@extends('adminpanel.layout')

@section('pageTitle')
    همه محصولات
@endsection

@section('mainContent')
    <!-- .content-header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">همه محصولات</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">داشبورد</a></li>
                        <li class="breadcrumb-item active">محصولات</li>
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
                                    @if(session ('warning'))
                                        <div class="alert alert-warning col-sm-3">
                                            <li>{{Session::get('warning')}}</li>
                                        </div>
                                        @endif
                                </div>
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title text-right">جدول محصولات</h3>
                        </div>

                        {{--card header--}}
                        <div class="card-body">
                            @if(\App\Product::all()->count() > 0)
                                <table id="example2" class="table table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th>ردیف</th>
                                        <th>نام محصول</th>
                                        <th>قیمت</th>
                                        <th>توضیحات</th>
                                        <th>کد محصول</th>
                                        <th>تصویر محصول</th>
                                        <th>دسته بندی</th>
                                        <th>تخفیف</th>
                                        <th>تعداد</th>
                                        <th>سایز</th>
                                        <th>وزن</th>
                                        <th>امتیاز</th>
                                        <th>وضعیت</th>
                                        <th>عملیات</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($allProuduct as $product)
                                        <tr>
                                            <td>{{$product->id}}</td>
                                            <td>{{$product->title}}</td>
                                            <td>

                                                @if($product->old_price != '')
                                                    {{$product->price}}
                                                @else
                                                    <span class="text-secondary">{{$product->old_price}}</span>
                                                    {{$product->price}}
                                                @endif
                                            </td>
                                            <td>{!! $product->description !!}</td>
                                            <td>{{$product->product_id}}</td>
                                            <td><img width="100px" src="{{ url('') }}{{$product->image}}" alt="{{$product->title}}"></td>
                                            <td>{{$product->category_name($product->category)}}</td>
                                            <td>{{$product->discount}}</td>
                                            <td>{{$product->count}}</td>
                                            <td>{{$product->size}}</td>
                                            <td>{{$product->weight}}</td>
                                            <td>{{$product->rate}}</td>
                                            <td>
                                                @if($product->status == 0)
                                                    پیش نویس
                                                @else
                                                منتشر شده
                                                    @endif
                                            </td>
                                            <td><a href="{{route('dashboard.product.edit', $product->id)}}"><i class="fa fa-pencil m-2" ></i></a>
                                                <a href="{{route('dashboard.product.destroy' , $product->id)}}"><i class="fa fa-trash-o text-danger"></i></a>
                                            </td>

                                        </tr>

                                    @endforeach
                                    </tbody>
                                </table>
                            @else
                                <h4>محصولی در سایت موجود نیست</h4>
                                <a type="button" class="btn btn-outline-primary" href="{{route('dashboard.product.create')}}">اولین محصول خود را بسازید</a>

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

        $('#products').addClass('menu-open');
        $('#products> a').addClass('active');
        $('#allProdacts').addClass('active');


    </script>
@stop
