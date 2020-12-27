@extends('adminpanel.layout')
@section('pageTitle')
    افزودن محصول جدید
@endsection
@section('headerStyles')
    <link href="{{url('node_modules/select2/dist/css/select2.min.css')}}" rel="stylesheet"/>
@endsection
@section('mainContent')
    <!-- .content-header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">افزودن محصول جدید</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">داشبورد</a></li>
                        <li class="breadcrumb-item active">محصول جدید</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <div class="col-sm-12">
        @foreach($errors->all() as $error)
            <div class="alert alert-danger col-sm-3">
                <li>{{$error}}</li>
            </div>
        @endforeach
    </div>
    {{--    <---------card header------>--}}
    <div class="card">
        <div class="card-header">
            <div class="card-title">مشخصات محصول جدید</div>
        </div>

        {{--    <-----------card body ------->--}}
        <div class="card-body">
            <form action="{{route('dashboard.product.store')}}" role="form" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
{{--                    //--------product--}}
                    <div class="col-sm-4">
                        <div class="form-group">
                            <lable> نام محصول</lable>
                            <input type="text" class="form-control" name="title"
                                   placeholder="نام محصول را وارد کنید ..." value="{{old('title')}}">
                        </div>
                    </div>
{{--                    //--------category--}}
                    <div class="col-sm-4">
                        <div class="form-group">
                            <lable> دسته بندی محصول</lable>
                            <select class="form-control js-example-basic-single" name="category">
                                <option value=""><span class=" text-darkwhite">انتخاب دسته بندی محصول...</span></option>
{{--                                <option value="0">دسته بندی نشده ها</option>--}}
                                @foreach($allcategories as $category)
                                    <option value="{{$category->id}}">{{$category->title}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
{{--                    //------------------price--}}
                    <div class="col-sm-4">
                        <div class="form-group">
                            <lable> قیمت محصول بدون تخفیف به ریال </lable>
                            <input type="number" class="form-control" name="price"
                                   placeholder="قیمت محصول را وارد کنید ..." value="{{old('price')}}">
                        </div>
                    </div>
{{--                          //------------------old price --}}
                    <div class="col-sm-4">
                        <div class="form-group">
                            <lable> قیمت محصول با تخفیف به ریال </lable>
                            <input type="number" class="form-control" name="old_price"
                                   placeholder="قیمت محصول را وارد کنید ..." value="{{old('old_price')}}">
                        </div>
                    </div>
{{--                    //------------------product_id --}}
                    <div class="col-sm-4">
                        <div class="form-group">
                            <lable> کد محصول </lable>
                            <input type="text" class="form-control" name="product_id"
                                   placeholder="کد محصول را وارد کنید ..." value="{{old('product_id')}}">
                        </div>
                    </div>
{{--                    <-------image---->--}}
                    <div class="col-sm-4">
                        <div class="form-group">
                            <lable for="image"> عکس محصول</lable>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="image">
                                    <lable class="custom-file-label" for="image ">انتخاب عکس</lable>
                                </div>
                            </div>
                        </div>
                    </div>
{{--                    <-----------discount-------------}}
                    <div class="col-sm-4">
                        <div class="form-group">
                            <lable> درصد تخفیف محصول</lable>
                            <input type="text" class="form-control" name="discount"
                                   placeholder="درصد تخفیف محصول را وارد کنید ..." value="{{old('discount')}}">
                        </div>
                    </div>
{{--                    <------------count --------------}}
                    <div class="col-sm-4">
                        <div class="form-group">
                            <lable> تعداد محصول</lable>
                            <input type="number" class="form-control" name="count"
                                   placeholder="تعداد محصول را وارد کنید ..." value="{{old('count')}}">
                        </div>
                    </div>
{{--                    <---------size------------>--}}
                    <div class="col-sm-4">
                        <div class="form-group">
                            <lable> سایز محصول</lable>
                            <input type="text" class="form-control" name="size"
                                   placeholder="سایز محصول را وارد کنید ..." value="{{old('size')}}">
                        </div>
                    </div>
{{--                    <-----------weight------------->--}}
                    <div class="col-sm-4">
                        <div class="form-group">
                            <lable> وزن محصول</lable>
                            <input type="text" class="form-control" name="weight"
                                   placeholder="وزن محصول را وارد کنید ..." value="{{old('weight')}}">
                        </div>
                    </div>
                    {{--                    <-----------status------------->--}}
                    <div class="col-sm-4">
                        <div class="form-group">
                            <lable> وضعیت نمایش محصول</lable>
                            <select class="form-control" name="status">
                                <option value=""><span class=" text-darkwhite">انتخاب وضعیت محصول...</span></option>
                                <option value="0">پیش نویس</option>
                                <option value="1">انتشار</option>
                            </select>
                        </div>
                    </div>
{{--                    <----------description--------------}}
                    <div class="col-sm-12">
                        <div class="form-group">
                            <lable> توضیحات محصول</lable>
                            <textarea rows="5" class="form-control" id="description" name="description"
                                      placeholder="توضیحات محصول را وارد کنید ..."></textarea>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="ذخیره">
                            <a class="btn btn-danger" href="{{ route('dashboard') }}">لغو عملیات</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>



@stop
@section('footerScripts')
    <!-- bs-custom-file-input -->
    <script src="{{ url('adminPanel/plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
    <script src="{{ url('adminPanel/plugins/ckeditor/ckeditor.js') }}"></script>
    <script src="{{ url('node_modules/select2/dist/js/select2.js') }}"></script>

    <script !src="">
            CKEDITOR.replace('description', {
                filebrowserUploadMethod : 'form',
                filebrowserUploadUrl: '/dashboard/products/save_image',
                filebrowserImageUploadUrl: '/dashboard/products/save_image',
            });
    </script>

    <script>
        $(document).ready(function () {
            $('.js-example-basic-single').select2();
        });
    </script>

    <script !src="">
        $('.nav-link').removeClass('active');

        $('#products').addClass('menu-open');
        $('#products> a').addClass('active');
        $('#new-products').addClass('active');
    </script>
@stop
